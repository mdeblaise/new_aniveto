<?php

namespace AppBundle\Entity\Behavior;

trait TimestampableTrait
{
    /**
     * @ORM\Column(name="created_at__c", type="datetime", nullable=false)
     * @Assert\DateTime()
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="updated_at__c", type="datetime", nullable=false)
     * @Assert\DateTime()
     */
    protected $updatedAt;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
