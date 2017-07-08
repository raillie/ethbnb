<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class Ratio
{
    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("Entire home/apt")
     *
     * @var float $entireHomeApt
     */
    private $entireHomeApt;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("Private room")
     *
     * @var float $privateRoom
     */
    private $privateRoom;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("Shared room")
     *
     * @var float $sharedRoom
     */
    private $sharedRoom;

    /**
     * @return float
     */
    public function getEntireHomeApt()
    {
        return $this->entireHomeApt;
    }

    /**
     * @param float $entireHomeApt
     */
    public function setEntireHomeApt($entireHomeApt)
    {
        $this->entireHomeApt = $entireHomeApt;
    }

    /**
     * @return float
     */
    public function getPrivateRoom()
    {
        return $this->privateRoom;
    }

    /**
     * @param float $privateRoom
     */
    public function setPrivateRoom($privateRoom)
    {
        $this->privateRoom = $privateRoom;
    }

    /**
     * @return float
     */
    public function getSharedRoom()
    {
        return $this->sharedRoom;
    }

    /**
     * @param float $sharedRoom
     */
    public function setSharedRoom($sharedRoom)
    {
        $this->sharedRoom = $sharedRoom;
    }
}
