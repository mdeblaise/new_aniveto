<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Behavior\TimestampableInterface;
use Doctrine\ORM\Mapping as ORM;
use Greg0ire\Enum\Bridge\Symfony\Validator\Constraint\Enum;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AnimalRepository")
 * @ORM\Table(name="public.animal")
 * @UniqueEntity("id")
 * @ORM\HasLifecycleCallbacks
 */
class Animal implements TimestampableInterface
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="animals")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $user;

    /**
     * @ORM\Column(name="name", type="string", length=180)
     * @Assert\NotBlank()
     * @Assert\Length(max="180")
     */
    private $name;

    /**
     * @ORM\Column(name="gender", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max="55")
     * @Enum("AppBundle\Domain\Animal\Model\Gender")
     */
    private $gender;

    /**
     * @ORM\Column(name="specie", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max="55")
     * @Enum("AppBundle\Domain\Animal\Model\Species")
     */
    private $species;

    /**
     * @ORM\Column(name="breed", type="string", length=255, nullable=true)
     * @Assert\Length(max="55")
     * @Enum("AppBundle\Domain\Breed\Model\Breed")
     */
    private $breed;

    /**
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     * @Assert\NotBlank()
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(name="is_vaccinated", type="boolean", nullable=false, options={"default": 0})
     */
    protected $isVaccinated;

    /**
     * @ORM\Column(name="is_identified", type="boolean", nullable=false, options={"default": 0})
     */
    protected $isIdentified;

    /**
     * @ORM\Column(name="is_sterilized", type="boolean", nullable=false, options={"default": 0})
     */
    protected $isSterilized;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Devis", mappedBy="animal", cascade={"persist"})
     */
    protected $devis;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    /**
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies($species)
    {
        $this->species = $species;
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
    public function getIsVaccinated()
    {
        return $this->isVaccinated;
    }

    /**
     * @param mixed $isVaccinated
     */
    public function setIsVaccinated($isVaccinated)
    {
        $this->isVaccinated = $isVaccinated;
    }

    /**
     * @return mixed
     */
    public function getIsIdentified()
    {
        return $this->isIdentified;
    }

    /**
     * @param mixed $isIdentified
     */
    public function setIsIdentified($isIdentified)
    {
        $this->isIdentified = $isIdentified;
    }

    /**
     * @return mixed
     */
    public function getIsSterilized()
    {
        return $this->isSterilized;
    }

    /**
     * @param mixed $isSterilized
     */
    public function setIsSterilized($isSterilized)
    {
        $this->isSterilized = $isSterilized;
    }

    /**
     * @return Devis
     */
    public function getDevis()
    {
        return $this->devis;
    }

    /**
     * @param Devis $devis
     */
    public function setDevis($devis)
    {
        $this->devis = $devis;

        return $this;
    }
}
