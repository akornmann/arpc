<?php

namespace ARPCCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamEvent
 *
 * @ORM\Table(name="team_event")
 * @ORM\Entity(repositoryClass="ARPCCoreBundle\Repository\TeamEventRepository")
 */
class TeamEvent extends Event
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
     * @var Club
     * 
     * @ORM\ManyToOne(targetEntity="ARPCCoreBundle\Entity\Club", cascade={"persist", "remove"})
     */
    private $host;
    
    /**
     * @var Adress
     * 
     * @ORM\ManyToOne(targetEntity="ARPCCoreBundle\Entity\Club", cascade={"persist", "remove"})
     */
    private $visitors;
    
    /**
     * @var Adress
     * 
     * @ORM\ManyToOne(targetEntity="ARPCCoreBundle\Entity\Club", cascade={"persist", "remove"})
     */
    private $field;
    
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
     * Set host
     *
     * @param \ARPCCoreBundle\Entity\Club $host
     *
     * @return TeamEvent
     */
    public function setHost(\ARPCCoreBundle\Entity\Club $host = null)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return \ARPCCoreBundle\Entity\Club
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set visitors
     *
     * @param \ARPCCoreBundle\Entity\Club $visitors
     *
     * @return TeamEvent
     */
    public function setVisitors(\ARPCCoreBundle\Entity\Club $visitors = null)
    {
        $this->visitors = $visitors;

        return $this;
    }

    /**
     * Get visitors
     *
     * @return \ARPCCoreBundle\Entity\Club
     */
    public function getVisitors()
    {
        return $this->visitors;
    }

    /**
     * Set field
     *
     * @param \ARPCCoreBundle\Entity\Club $field
     *
     * @return TeamEvent
     */
    public function setField(\ARPCCoreBundle\Entity\Club $field = null)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \ARPCCoreBundle\Entity\Club
     */
    public function getField()
    {
        return $this->field;
    }
}
