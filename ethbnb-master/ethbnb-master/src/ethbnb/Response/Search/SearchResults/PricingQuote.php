<?php

namespace ethbnb\Response\Search\SearchResults;

use JMS\Serializer\Annotation as JMS;

class PricingQuote
{
    /**
     * @JMS\Type("boolean")
     *
     * @var bool $available
     */
    private $available;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $canInstantBook
     */
    private $canInstantBook;

    /**
     * @JMS\Type("string")
     *
     * @var string $checkIn
     */
    private $checkIn;

    /**
     * @JMS\Type("string")
     *
     * @var string $checkOut
     */
    private $checkOut;

    /**
     * @JMS\Type("integer")
     *
     * @var int $guests
     */
    private $guests;

    /**
     * @JMS\Type("string")
     *
     * @var string $price
     */
    private $price;

    /**
     * @JMS\Type("ethbnb\Response\Search\SearchResults\Rate")
     *
     * @var Rate $rate
     */
    private $rate;

    /**
     * @JMS\Type("string")
     *
     * @var string $rateType
     */
    private $rateType;

    /**
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return boolean
     */
    public function isCanInstantBook()
    {
        return $this->canInstantBook;
    }

    /**
     * @param boolean $canInstantBook
     */
    public function setCanInstantBook($canInstantBook)
    {
        $this->canInstantBook = $canInstantBook;
    }

    /**
     * @return mixed
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * @param mixed $checkIn
     */
    public function setCheckIn($checkIn)
    {
        $this->checkIn = $checkIn;
    }

    /**
     * @return mixed
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * @param mixed $checkOut
     */
    public function setCheckOut($checkOut)
    {
        $this->checkOut = $checkOut;
    }

    /**
     * @return mixed
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param mixed $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return RateResponse
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param RateResponse $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
        return $this->rateType;
    }

    /**
     * @param string $rateType
     */
    public function setRateType($rateType)
    {
        $this->rateType = $rateType;
    }
}
