<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class UrgencyCommitment
{
    /**
     * @JMS\Type("boolean")
     *
     * @var bool $showPercentListingsLeftMessage
     */
    private $showPercentListingsLeftMessage;

    /**
     * @JMS\Type("string")
     *
     * @var string $listingsLeftAsPercent
     */
    private $listingsLeftAsPercent;

    /**
     * @return boolean
     */
    public function isShowPercentListingsLeftMessage()
    {
        return $this->showPercentListingsLeftMessage;
    }

    /**
     * @param boolean $showPercentListingsLeftMessage
     */
    public function setShowPercentListingsLeftMessage($showPercentListingsLeftMessage)
    {
        $this->showPercentListingsLeftMessage = $showPercentListingsLeftMessage;
    }

    /**
     * @return string
     */
    public function getListingsLeftAsPercent()
    {
        return $this->listingsLeftAsPercent;
    }

    /**
     * @param string $listingsLeftAsPercent
     */
    public function setListingsLeftAsPercent($listingsLeftAsPercent)
    {
        $this->listingsLeftAsPercent = $listingsLeftAsPercent;
    }
}
