<?php

namespace AppBundle\Entity;

use AppBundle\Domain\User\Model\Status;
use AppBundle\Entity\Behavior\TimestampableInterface;
use Doctrine\ORM\Mapping as ORM;
use Greg0ire\Enum\Bridge\Symfony\Validator\Constraint\Enum;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 * @ORM\Table(name="public.user")
 * @ORM\HasLifecycleCallbacks
 **/
class User implements TimestampableInterface
{
    use Behavior\TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="uuid")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;

    /**
     * @ORM\Column(name="email", type="string", length=180, unique=true)
     * @Assert\NotBlank
     * @Assert\Length(max="500")
     * @Assert\Email
     */
    protected $email;

    /**
     * @ORM\Column(name="gender", type="string", length=5, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="5")
     * @Assert\Choice(callback = {"AppBundle\Domain\User\Model\Gender", "getGenderValues"})
     */
    protected $gender;

    /**
     * @ORM\Column(name="ln", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected $lastname;

    /**
     * @ORM\Column(name="fn", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected $firstname;

    /**
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     */
    protected $dateOfBirth;

    /**
     * @ORM\Column(name="phone", type="string", length=128, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="128")
     */
    protected $phone;

    /**
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected $street;

    /**
     * @ORM\Column(name="postcode", type="string", length=16, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="16")
     */
    protected $postcode;

    /**
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected $city;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Animal", mappedBy="user")
     */
    protected $animals;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Devis", mappedBy="user", cascade={"persist"})
     */
    protected $devis;

    /**
     * @ORM\Column(name="status", type="string", length=10)
     * @Assert\NotBlank()
     * @Assert\Length(max="10")
     * @Enum("AppBundle\Domain\Devis\Model\Status")
     */
    protected $status;

    public function __construct()
    {
        $this->animals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->devis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return (string) $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return type
     */
    public function getDevis()
    {
        return $this->devis;
    }

    /**
     * @param type $devis
     */
    public function setDevis($devis)
    {
        $this->devis = $devis;

        return $this;
    }

    /**
     * @return Enum
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Enum $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
