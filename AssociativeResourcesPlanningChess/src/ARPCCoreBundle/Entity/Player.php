<?php

namespace ARPCCoreBundle\Entity;

use ARPCCoreBundle\Entity\Club;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="ARPCCoreBundle\Repository\PlayerRepository")
 */
class Player implements \Symfony\Component\Security\Core\User\UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="ffeCode", type="string", length=10, unique=true)
     */
    private $ffeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fideCode", type="string", length=10, unique=true)
     */
    private $fideCode;
    
    /**
     * @var Club
     * 
     * @ORM\ManyToOne(targetEntity="ARPCCoreBundle\Entity\Club", cascade={"persist", "remove"})
     */
    private $club;
    
    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     * @ORM\Column(nullable=false)
     */
    private $birthday;
    
    /**
     * @var Adress
     * 
     * @ORM\OneToOne(targetEntity="ARPCCoreBundle\Entity\Adress", cascade={"persist", "remove"})
     */
    private $adress;
    
    /**
     * @var ContactWay 
     * 
     * @ORM\ManyToMany(targetEntity="ARPCCoreBundle\Entity\ContactWay", cascade={"persist", "remove"})
     */
    private $contactWays;
    
    /**
     * @var type
     *
     * @ORM\Column(type="string", length=64)
     */
    private $password;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->birthday = new \DateTime();
        $this->contactWays = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Implements UserInterface
     */
    public function getRoles()
    {
        return array("ROLE_USER");
    }
        
    /**
     * Implements UserInterface
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Implements UserInterface
     */
    public function getSalt()
    {
        return null;
    }
    
    /**
     * Implements UserInterface
     */
    public function getUsername()
    {
        return $this->ffeCode;
    }
    
    /**
     * Implements UserInterface
     */
    public function eraseCredentials()
    {
    }
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->ffeCode,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }    

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->ffeCode,
            $this->password,
        ) = unserialize($serialized);
    }
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Player
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set ffeCode
     *
     * @param string $ffeCode
     *
     * @return Player
     */
    public function setFfeCode($ffeCode)
    {
        $this->ffeCode = $ffeCode;

        return $this;
    }

    /**
     * Get ffeCode
     *
     * @return string
     */
    public function getFfeCode()
    {
        return $this->ffeCode;
    }

    /**
     * Set fideCode
     *
     * @param string $fideCode
     *
     * @return Player
     */
    public function setFideCode($fideCode)
    {
        $this->fideCode = $fideCode;

        return $this;
    }

    /**
     * Get fideCode
     *
     * @return string
     */
    public function getFideCode()
    {
        return $this->fideCode;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Player
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set club
     *
     * @param \ARPCCoreBundle\Entity\Club $club
     *
     * @return Player
     */
    public function setClub(\ARPCCoreBundle\Entity\Club $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \ARPCCoreBundle\Entity\Club
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set adress
     *
     * @param \ARPCCoreBundle\Entity\Adress $adress
     *
     * @return Player
     */
    public function setAdress(\ARPCCoreBundle\Entity\Adress $adress = null)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return \ARPCCoreBundle\Entity\Adress
     */
    public function getAdress()
    {
        return $this->adress;
    }
    
    /**
     * Add contactWay
     *
     * @param \ARPCCoreBundle\Entity\ContactWay $contactWay
     *
     * @return Player
     */
    public function addContactWay(\ARPCCoreBundle\Entity\ContactWay $contactWay)
    {
        $this->contactWays[] = $contactWay;

        return $this;
    }

    /**
     * Remove contactWay
     *
     * @param \ARPCCoreBundle\Entity\ContactWay $contactWay
     */
    public function removeContactWay(\ARPCCoreBundle\Entity\ContactWay $contactWay)
    {
        $this->contactWays->removeElement($contactWay);
    }

    /**
     * Get contactWays
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContactWays()
    {
        return $this->contactWays;
    }
}
