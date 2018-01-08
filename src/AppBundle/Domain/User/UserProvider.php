<?php

namespace AppBundle\Domain\User;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class UserProvider
{
    protected $em;

    public function __construct(
        EntityManager $em
    ) {
        $this->em = $em;
    }

    public function findUserByEmail($email)
    {
        $user = $this->em->getRepository(User::class)->findOneByEmail($email);

        return $user;
    }
}
