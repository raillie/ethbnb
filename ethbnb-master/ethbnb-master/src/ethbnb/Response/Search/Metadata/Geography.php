<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class Geography
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $accuracy
     */
    private $accuracy;

    /**
     * @JMS\Type("integer")
     *
     * @var int $precision
     */
    private $precision;

    /**
     * @JMS\Type("string")
     *
     * @var string $countryCode
     */
    private $countryCode;

    /**
     * @JMS\Type("string")
     *
     * @var string $country
     */
    private $country;

    /**
     * @JMS\Type("string")
     *
     * @var string $stateShort
     */
    private $stateShort;

    /**
     * @JMS\Type("string")
     *
     * @var string $state
     */
    private $state;

    /**
     * @JMS\Type("string")
     *
     * @var string $city
     */
    private $city;

    /**
     * @JMS\Type("float")
     *
     * @var float $lat
     */
    private $lat;

    /**
     * @JMS\Type("float")
     *
     * @var float $lng
     */
    private $lng;

    /**
     * @return int
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * @param int $accuracy
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
    }

    /**
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @param int $precision
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getStateShort()
    {
        return $this->stateShort;
    }

    /**
     * @param string $stateShort
     */
    public function setStateShort($stateShort)
    {
        $this->stateShort = $stateShort;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }
}
