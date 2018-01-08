<?php

namespace AppBundle\Domain\Fidanimo;

use AppBundle\Domain\Util\Date;
use AppBundle\Entity\Animal;
use AppBundle\Entity\Devis;
use AppBundle\Entity\User;
use GuzzleHttp\Psr7\Request;
use Http\Client\HttpClient;

/**
 * Created by PhpStorm.
 * User: fenow
 * Date: 20/12/2017
 * Time: 11:33
 */
class Manager
{
    /* @var HttpClient $_httpClient */
    protected $_httpClient;

    public function __construct($url, HttpClient $httpClient)
    {
        $this->_url = $url;
        $this->_httpClient = $httpClient;
    }

    private function transform(Devis $devis)
    {
        /* @var User $prospect */
        $prospect = $devis->getUser();

        /* @var Animal $animal */
        $animal = $devis->getAnimal();

        return ['form_order' => [
           'Prospect' => [
               'civilite' => \AppBundle\Domain\User\Model\Gender::getFidAnimoCorrespondance($prospect->getGender()),
               'nom' => $prospect->getLastname(),
               'prenom' => $prospect->getFirstname(),
               'date_naissance' => $prospect->getDateOfBirth()->format('d-m-Y'),
               'adresse' => $prospect->getStreet(),
               'cp' => $prospect->getPostcode(),
               'ville' => $prospect->getCity(),
               'email' => $prospect->getEmail(),
               'telephone_fixe' => $prospect->getPhone()
           ],
            'Animals' =>[
                0 => [
                    'type' => \AppBundle\Domain\Animal\Model\Species::getFidAnimoCorrespondance($animal->getSpecies()),
                    'sexe' => \AppBundle\Domain\Animal\Model\Gender::getFidAnimoCorrespondance($animal->getGender()),
                    'nom' => $animal->getName(),
                    'date_naissance' => $animal->getDateOfBirth()->format('d-m-Y'),
                    'Race' => 110, //=>\AppBundle\Domain\Breed\Model\Breed::getFidAnimoCorrespondance($animal->getBreed()),
                    'ispuce' => $animal->getIsIdentified()
                ]
            ]
        ]];
    }

    public function send(Devis $devis)
    {
        $data = $this->transform($devis);


        $request = new Request(
            'post',
            $this->_url,
            [
                'Content-type' => 'application/x-www-form-urlencoded',
            ],
            http_build_query($data)
        );

        $response = $this->_httpClient->sendRequest($request);

        return $response;
    }
}
