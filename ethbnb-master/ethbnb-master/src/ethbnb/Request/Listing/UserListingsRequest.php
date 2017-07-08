<?php

namespace ethbnb\Request\Listing;

class UserListingsRequest
{
    /**
     * @var string $format
     */
    private $format;

    /**
     * @var string $locale
     */
    private $locale;

    /**
     * @var string $source
     */
    private $source;

    /**
     * @var int $numberOfGuests
     */
    private $numberOfGuests;

    /**
     * @var int $userId
     */
    private $userId;

    /**
     * @param int $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
        $this->format = "v1_legacy_for_p3";
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
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getNumberOfGuests()
    {
        return $this->numberOfGuests;
    }

    /**
     * @param int $numberOfGuests
     */
    public function setNumberOfGuests($numberOfGuests)
    {
        $this->numberOfGuests = $numberOfGuests;
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
     * @return array
     */
    public function toArray()
    {
        return [
            '_format' => $this->format,
            'locale' => $this->locale,
            '_source' => $this->source,
            'number_of_guests' => $this->numberOfGuests,
            'user_id' => $this->userId
        ];
    }
}
