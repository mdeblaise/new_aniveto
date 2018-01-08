<?php

namespace AppBundle\Entity\EventListener;

use AppBundle\Entity\Behavior\TimestampableInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class TimestampableListener
{
    public function prePersist(LifecycleEventArgs $eventArgs)
    {
        $entity = $eventArgs->getEntity();
        if (!$entity instanceof TimestampableInterface) {
            return;
        }

        $now = new \DateTime();
        if (!$entity->getCreatedAt()) {
            $entity->setCreatedAt($now);
        }

        if (!$entity->getUpdatedAt()) {
            $entity->setUpdatedAt($now);
        }
    }

    public function preUpdate(PreUpdateEventArgs $eventArgs)
    {
        $entity = $eventArgs->getEntity();
        if (!$entity instanceof TimestampableInterface) {
            return;
        }

        $entity->setUpdatedAt(new \DateTime());
    }
}
