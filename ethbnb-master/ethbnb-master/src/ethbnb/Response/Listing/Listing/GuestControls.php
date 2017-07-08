<?php

namespace ethbnb\Response\Listing\Listing;
use JMS\Serializer\Annotation as JMS;

class GuestControls
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $id
     */
    private $id;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $allowsChildren
     */
    private $allowsChildren;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $allowsInfants
     */
    private $allowsInfants;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $allowsPets
     */
    private $allowsPets;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $allowsSmoking
     */
    private $allowsSmoking;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $allowsEvents
     */
    private $allowsEvents;

    /**
     * @JMS\Type("string")
     *
     * @var string $hostCheckInTimeMessage
     */
    private $hostCheckInTimeMessage;

    /**
     * @JMS\Type("array")
     *
     * @var array $structuredHouseRules
     */
    private $structuredHouseRules;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return boolean
     */
    public function isAllowsChildren()
    {
        return $this->allowsChildren;
    }

    /**
     * @param boolean $allowsChildren
     */
    public function setAllowsChildren($allowsChildren)
    {
        $this->allowsChildren = $allowsChildren;
    }

    /**
     * @return boolean
     */
    public function isAllowsInfants()
    {
        return $this->allowsInfants;
    }

    /**
     * @param boolean $allowsInfants
     */
    public function setAllowsInfants($allowsInfants)
    {
        $this->allowsInfants = $allowsInfants;
    }

    /**
     * @return boolean
     */
    public function isAllowsPets()
    {
        return $this->allowsPets;
    }

    /**
     * @param boolean $allowsPets
     */
    public function setAllowsPets($allowsPets)
    {
        $this->allowsPets = $allowsPets;
    }

    /**
     * @return boolean
     */
    public function isAllowsSmoking()
    {
        return $this->allowsSmoking;
    }

    /**
     * @param boolean $allowsSmoking
     */
    public function setAllowsSmoking($allowsSmoking)
    {
        $this->allowsSmoking = $allowsSmoking;
    }

    /**
     * @return boolean
     */
    public function isAllowsEvents()
    {
        return $this->allowsEvents;
    }

    /**
     * @param boolean $allowsEvents
     */
    public function setAllowsEvents($allowsEvents)
    {
        $this->allowsEvents = $allowsEvents;
    }

    /**
     * @return string
     */
    public function getHostCheckInTimeMessage()
    {
        return $this->hostCheckInTimeMessage;
    }

    /**
     * @param string $hostCheckInTimeMessage
     */
    public function setHostCheckInTimeMessage($hostCheckInTimeMessage)
    {
        $this->hostCheckInTimeMessage = $hostCheckInTimeMessage;
    }

    /**
     * @return array
     */
    public function getStructuredHouseRules()
    {
        return $this->structuredHouseRules;
    }

    /**
     * @param array $structuredHouseRules
     */
    public function setStructuredHouseRules($structuredHouseRules)
    {
        $this->structuredHouseRules = $structuredHouseRules;
    }
}
