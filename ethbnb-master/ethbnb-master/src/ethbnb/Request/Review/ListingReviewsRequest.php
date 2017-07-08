<?php

namespace ethbnb\Request\Review;

class ListingReviewsRequest
{
    /**
     * @var int $listingId
     */
    private $listingId;

    /**
     * @var string $role
     */
    private $role;

    /**
     * @var string $locale
     */
    private $locale;

    /**
     * @var string $currency
     */
    private $currency;

    /**
     * @var string $format
     */
    private $format;

    /**
     * @var int $limit
     */
    private $limit;

    /**
     * @var int $offset
     */
    private $offset;

    /**
     * @param int $listingId
     * @param string $role
     * @param string $format
     */
    public function __construct($listingId, $role = "all", $format = "for_mobile_client")
    {
        $this->listingId = $listingId;
        $this->role = $role;
        $this->format = $format;
    }

    /**
     * @return int
     */
    public function getListingId()
    {
        return $this->listingId;
    }

    /**
     * @param int $listingId
     */
    public function setListingId($listingId)
    {
        $this->listingId = $listingId;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
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
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'listing_id' => $this->listingId,
            'role' => $this->role,
            'locale' => $this->locale,
            'currency' => $this->currency,
            '_format' => $this->format,
            '_limit' => $this->limit,
            '_offset' => $this->offset
        ];
    }
}
