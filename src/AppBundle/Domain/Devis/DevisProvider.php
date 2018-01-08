<?php

namespace AppBundle\Domain\Devis;

use AppBundle\Entity\Animal;
use AppBundle\Entity\Devis;
use AppBundle\Entity\User;
use AppBundle\Domain\Devis\Model\Status;
use Doctrine\ORM\EntityManagerInterface;

class DevisProvider
{
    protected $em;

    public function __construct(
        EntityManagerInterface $em
    ) {
        $this->em = $em;
    }

    public function findCurrentDevisByUser(User $user)
    {
        $devis = $this->em->getRepository(Devis::class)->findOneBy(['user' => $user, 'status' => Status::JUST_USER]);

        return $devis;
    }
}
