<?php

namespace ethbnb\Response\Listing\Listing;

use JMS\Serializer\Annotation as JMS;

class ListingOccupancyInfo
{
    /**
     * @JMS\Type("boolean")
     *
     * @var bool $showOccupancyMessage
     */
    private $showOccupancyMessage;

    /**
     * @return bool
     */
    public function getShowOccupancyMessage()
    {
        return $this->showOccupancyMessage;
    }

    /**
     * @param bool $showOccupancyMessage
     */
    public function setShowOccupancyMessage($showOccupancyMessage)
    {
        $this->showOccupancyMessage = $showOccupancyMessage;
    }
}