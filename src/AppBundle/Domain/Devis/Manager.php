<?php

namespace AppBundle\Domain\Devis;

use AppBundle\Domain\Devis\DevisProvider;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;
use AppBundle\Entity\Animal;
use AppBundle\Entity\Devis;
use AppBundle\Domain\User\Model\Status as UserStatus;
use AppBundle\Domain\Devis\Model\Status as DevisStatus;

class Manager
{
    protected $em;

    public function __construct(
        EntityManager $em,
        DevisProvider $devisProvider
    ) {
        $this->em = $em;
        $this->devisProvider = $devisProvider;
    }


    public function saveEmailStep($email)
    {
        $user = new User();
        $user->setEmail($email);
        $user->setStatus(UserStatus::JUST_EMAIL);

        $devis = new Devis();
        $devis->setUser($user);
        $devis->setStatus(DevisStatus::JUST_EMAIL);

        $this->em->persist($user);
        $this->em->persist($devis);

        $this->em->flush();

        return $user;
    }

    public function saveProfilStep(array $data, User $user)
    {
        $user->setGender($data['gender']);
        $user->setLastname($data['lastname']);
        $user->setFirstname($data['firstname']);
        $user->setPhone($data['phone']);
        $user->setDateOfBirth($data['dateOfBirth']);
        $user->setStreet($data['street']);
        $user->setPostcode($data['postcode']);
        $user->setCity($data['city']);
        $user->setStatus(UserStatus::JUST_USER);

        $this->em->persist($user);

        $this->em->flush();
    }

    public function saveAnimalStep(array $data, User $user)
    {
        $devis = $this->devisProvider->findCurrentDevisByUser($user);

        $animal = new Animal();
        $animal->setUser($user);
        $animal->setName($data['name']);
        $animal->setGender($data['gender']);
        $animal->setSpecies($data['species']);
        $animal->setBreed($data['breed']);
        $animal->setDateOfBirth($data['dateOfBirth']);
        $animal->setIsVaccinated($data['isVaccinated']);
        $animal->setIsIdentified($data['isIdentified']);
        $animal->setIsSterilized($data['isSterilized']);

        $devis->setAnimal($animal);

        //En attendant le retour de l'api
        $devis->setStatus(DevisStatus::SEND);

        $this->em->persist($animal);
        $this->em->persist($devis);

        $this->em->flush();

        return $devis;
    }
}
