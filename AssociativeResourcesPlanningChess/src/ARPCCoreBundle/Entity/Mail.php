<?php

namespace ARPCCoreBundle\Entity;

class Mail
{
    /**
    * @var string
    */
    private $to;
    
    /**
    * @var string
    */
    private $from;
    
    /**
    * @var string
    */
    private $subject;
    
    /**
    * @var string
    */
    private $body;
    
    
    /**
     * Set to
     *
     * @param string $to
     *
     * @return Mail
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }
    
    /**
     * Set from
     *
     * @param string $from
     *
     * @return Mail
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }
    
    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $subject;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * Set body
     *
     * @param string $body
     *
     * @return Mail
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
    
}
