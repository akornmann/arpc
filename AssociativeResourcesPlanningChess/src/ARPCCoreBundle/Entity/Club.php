<?php

namespace ARPCCoreBundle\Entity;

use ARPCCoreBundle\Entity\ContactWay;
use ARPCCoreBundle\Entity\Adress;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="ARPCCoreBundle\Repository\ClubRepository")
 */
class Club
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
     * @ORM\Column(name="operationalHours", type="string", length=2500, nullable=true)
     */
    private $operationalHours;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicapAcess", type="boolean")
     */
    private $handicapAcess;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;

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
     * Constructor
     */
    public function __construct()
    {
        $this->handicapAcess = false;
        $this->contactWays = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set operationalHours
     *
     * @param string $operationalHours
     *
     * @return Club
     */
    public function setOperationalHours($operationalHours)
    {
        $this->operationalHours = $operationalHours;

        return $this;
    }

    /**
     * Get operationalHours
     *
     * @return string
     */
    public function getOperationalHours()
    {
        return $this->operationalHours;
    }

    /**
     * Set handicapAcess
     *
     * @param boolean $handicapAcess
     *
     * @return Club
     */
    public function setHandicapAcess($handicapAcess)
    {
        $this->handicapAcess = $handicapAcess;

        return $this;
    }

    /**
     * Get handicapAcess
     *
     * @return boolean
     */
    public function getHandicapAcess()
    {
        return $this->handicapAcess;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Club
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Club
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set adress
     *
     * @param \ARPCCoreBundle\Entity\Adress $adress
     *
     * @return Club
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
     * @return Club
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
