<?php

namespace AppBundle\Entity\EventListener;

use AppBundle\Domain\Devis\DevisProvider;
use AppBundle\Entity\Animal;
use AppBundle\Entity\Devis;
use AppBundle\Entity\User;
use AppBundle\Domain\Devis\Model\Status as DevisStatus;
use AppBundle\Domain\User\Model\Status as UserStatus;
use Doctrine\ORM\Event\LifecycleEventArgs;

class DevisListener
{
    protected $em;

    public function preUpdate(LifecycleEventArgs $eventArgs)
    {
        $entity = $eventArgs->getEntity();

        if (!$entity instanceof User) {
            return;
        }
        if ($entity->getStatus() != UserStatus::JUST_USER) {
            return;
        }

        $devis = $entity->getDevis()->first();

        if ($devis->getStatus() == DevisStatus::JUST_EMAIL) {
            $devis->setStatus(DevisStatus::JUST_USER);

            $this->em = $eventArgs->getEntityManager();
            $this->em->persist($devis);
            $this->em->flush();
        }
    }

    public function postPersist(LifecycleEventArgs $eventArgs)
    {
        // $entity = $eventArgs->getEntity();
        // if (!$entity instanceof Animal) {
        //     return;
        // }


        // $this->em = $eventArgs->getEntityManager();

        // $devis = $this->em->getRepository(Devis::class)->findOneBy(['user' => $entity->getUser(), 'status' => DevisStatus::JUST_USER]);

        // if (!$devis) {
        //     $devis = new Devis();
        //     $devis->setUser($entity->getUser());
        // }

        // $devis->setAnimal($entity);
        // $devis->setStatus(DevisStatus::SEND);

        // $this->em->persist($devis);
        // $this->em->flush();
    }
}
