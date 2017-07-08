<?php

namespace ethbnb\Request\User;

class UserRequest
{
    /**
     * @var int $userId
     */
    private $userId;

    /**
     * @var string $format
     */
    private $format;

    /**
     * @var string $locale
     */
    private $locale;

    /**
     * @var string $currency
     */
    private $currency;

    /**
     * @param int $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
        $this->format = "v1_legacy_show";
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            '_format' => $this->format,
            'locale' => $this->locale,
            'currency' => $this->currency
        ];
    }
}