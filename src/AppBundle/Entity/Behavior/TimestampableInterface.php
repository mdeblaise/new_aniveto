<?php

namespace AppBundle\Entity\Behavior;

interface TimestampableInterface
{
    public function setCreatedAt(\DateTime $createdAt);
    public function getCreatedAt();

    public function setUpdatedAt(\DateTime $createdAt);
    public function getUpdatedAt();
}
