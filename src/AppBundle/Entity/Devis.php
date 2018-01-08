<?php

namespace AppBundle\Entity;

use AppBundle\Domain\Devis\Model\Status;
use AppBundle\Entity\Behavior\TimestampableInterface;
use Doctrine\ORM\Mapping as ORM;
use Greg0ire\Enum\Bridge\Symfony\Validator\Constraint\Enum;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DevisRepository")
 * @ORM\Table(name="public.devis")
 * @UniqueEntity("id")
 * @ORM\HasLifecycleCallbacks
 **/
class Devis implements TimestampableInterface
{
    use Behavior\TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="uuid", name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;

    /**
     * @ORM\Column(name="eid", type="string", length=255, nullable=true)
     * @Assert\Length(max="255")
     */
    protected $eid;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="devis")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Animal", inversedBy="devis")
     * @ORM\JoinColumn(name="animal_id", referencedColumnName="id", nullable=true)
     */
    protected $animal;

    /**
     * @ORM\Column(name="status", type="string", length=10)
     * @Assert\NotBlank()
     * @Assert\Length(max="10")
     * @Enum("AppBundle\Domain\Devis\Model\Status")
     */
    protected $status;

    /**
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    protected $comment;

    /**
     * @return uuid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return Animal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param Animal $animal
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return text
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
}
