<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class Search
{
    /**
     * @JMS\Type("string")
     *
     * @var string $priceType
     */
    private $priceType;

    /**
     * @JMS\Type("integer")
     *
     * @var int $priceRangeMinNative
     */
    private $priceRangeMinNative;

    /**
     * @JMS\Type("integer")
     *
     * @var int $priceRangeMaxNative
     */
    private $priceRangeMaxNative;

    /**
     * @JMS\Type("string")
     *
     * @var string $nativeCurrency
     */
    private $nativeCurrency;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $isLastMinuteEligible
     */
    private $isLastMinuteEligible;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $lastMinuteShowDistSort
     */
    private $lastMinuteShowDistSort;

    /**
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @param string $priceType
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
    }

    /**
     * @return int
     */
    public function getPriceRangeMinNative()
    {
        return $this->priceRangeMinNative;
    }

    /**
     * @param int $priceRangeMinNative
     */
    public function setPriceRangeMinNative($priceRangeMinNative)
    {
        $this->priceRangeMinNative = $priceRangeMinNative;
    }

    /**
     * @return int
     */
    public function getPriceRangeMaxNative()
    {
        return $this->priceRangeMaxNative;
    }

    /**
     * @param int $priceRangeMaxNative
     */
    public function setPriceRangeMaxNative($priceRangeMaxNative)
    {
        $this->priceRangeMaxNative = $priceRangeMaxNative;
    }

    /**
     * @return string
     */
    public function getNativeCurrency()
    {
        return $this->nativeCurrency;
    }

    /**
     * @param string $nativeCurrency
     */
    public function setNativeCurrency($nativeCurrency)
    {
        $this->nativeCurrency = $nativeCurrency;
    }

    /**
     * @return boolean
     */
    public function isIsLastMinuteEligible()
    {
        return $this->isLastMinuteEligible;
    }

    /**
     * @param boolean $isLastMinuteEligible
     */
    public function setIsLastMinuteEligible($isLastMinuteEligible)
    {
        $this->isLastMinuteEligible = $isLastMinuteEligible;
    }

    /**
     * @return boolean
     */
    public function isLastMinuteShowDistSort()
    {
        return $this->lastMinuteShowDistSort;
    }

    /**
     * @param boolean $lastMinuteShowDistSort
     */
    public function setLastMinuteShowDistSort($lastMinuteShowDistSort)
    {
        $this->lastMinuteShowDistSort = $lastMinuteShowDistSort;
    }
}
