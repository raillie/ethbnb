<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class AveragePricePerRoomType
{
    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\Ratio")
     *
     * @var Ratio $ratio
     */
    private $ratio;

    /**
     * @JMS\Type("string")
     *
     * @var string $avgPrice
     */
    private $avgPrice;

    /**
     * @return Ratio
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * @param Ratio $ratio
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
    }

    /**
     * @return string
     */
    public function getAvgPrice()
    {
        return $this->avgPrice;
    }

    /**
     * @param string $avgPrice
     */
    public function setAvgPrice($avgPrice)
    {
        $this->avgPrice = $avgPrice;
    }
}
