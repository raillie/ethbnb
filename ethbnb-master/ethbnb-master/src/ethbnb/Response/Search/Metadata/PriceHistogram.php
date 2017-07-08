<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class PriceHistogram
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $averagePrice
     */
    private $averagePrice;

    /**
     * @JMS\Type("array")
     *
     * @var array $histogram
     */
    private $histogram;

    /**
     * @return int
     */
    public function getAveragePrice()
    {
        return $this->averagePrice;
    }

    /**
     * @param int $averagePrice
     */
    public function setAveragePrice($averagePrice)
    {
        $this->averagePrice = $averagePrice;
    }

    /**
     * @return array
     */
    public function getHistogram()
    {
        return $this->histogram;
    }

    /**
     * @param array $histogram
     */
    public function setHistogram($histogram)
    {
        $this->histogram = $histogram;
    }
}
