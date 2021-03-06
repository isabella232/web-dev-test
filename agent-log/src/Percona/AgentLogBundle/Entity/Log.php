<?php

namespace Percona\AgentLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="agent_log")
 * @ORM\Entity(repositoryClass="Percona\AgentLogBundle\Entity\LogRepository")
 */
class Log
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_log_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_id", type="integer")
     */

    /**
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="log")
     * @ORM\JoinColumn(name="agent_id", referencedColumnName="agent_id")
     */
    private $agent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ts", type="datetime")
     */
    private $ts;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=50)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="msg", type="string", length=2000)
     */
    private $msg;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd", type="string", length=1000)
     */
    private $cmd;


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
     * Set ts
     *
     * @param \DateTime $ts
     * @return Log
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    
        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime 
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Log
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set service
     *
     * @param string $service
     * @return Log
     */
    public function setService($service)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set msg
     *
     * @param string $msg
     * @return Log
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    
        return $this;
    }

    /**
     * Get msg
     *
     * @return string 
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set cmd
     *
     * @param string $cmd
     * @return Log
     */
    public function setCmd($cmd)
    {
        $this->cmd = $cmd;
    
        return $this;
    }

    /**
     * Get cmd
     *
     * @return string 
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * Set agent
     *
     * @param \Percona\AgentLogBundle\Entity\Agent $agent
     * @return Log
     */
    public function setAgent(\Percona\AgentLogBundle\Entity\Agent $agent = null)
    {
        $this->agent = $agent;
    
        return $this;
    }

    /**
     * Get agent
     *
     * @return \Percona\AgentLogBundle\Entity\Agent 
     */
    public function getAgent()
    {
        return $this->agent;
    }
}
