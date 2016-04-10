<?php

namespace ARPCCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="ARPCCoreBundle\Repository\TeamRepository")
 */
class Team
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
     * @var Club
     * 
     * @ORM\ManyToOne(targetEntity="ARPCCoreBundle\Entity\Club", cascade={"persist", "remove"})
     */
    private $club;

    /**
     * @var TeamEvent
     * 
     * @ORM\ManyToMany(targetEntity="ARPCCoreBundle\Entity\TeamEvent", cascade={"persist", "remove"})
     */
    private $teamEvents;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teamEvents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
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
     * @return Team
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
     * Set club
     *
     * @param \ARPCCoreBundle\Entity\Club $club
     *
     * @return Team
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
     * Add teamEvent
     *
     * @param \ARPCCoreBundle\Entity\TeamEvent $teamEvent
     *
     * @return Team
     */
    public function addTeamEvent(\ARPCCoreBundle\Entity\TeamEvent $teamEvent)
    {
        $this->teamEvents[] = $teamEvent;

        return $this;
    }

    /**
     * Remove teamEvent
     *
     * @param \ARPCCoreBundle\Entity\TeamEvent $teamEvent
     */
    public function removeTeamEvent(\ARPCCoreBundle\Entity\TeamEvent $teamEvent)
    {
        $this->teamEvents->removeElement($teamEvent);
    }

    /**
     * Get teamEvents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamEvents()
    {
        return $this->teamEvents;
    }
}
