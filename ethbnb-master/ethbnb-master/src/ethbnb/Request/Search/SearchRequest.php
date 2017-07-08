<?php

namespace ethbnb\Request\Search;

class SearchRequest
{
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
     * @var int $guests
     */
    private $guests;

    /**
     * @var bool $ib
     */
    private $ib;

    /**
     * @var bool $ibAddPhotoFlow
     */
    private $ibAddPhotoFlow;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var int $minBathrooms
     */
    private $minBathrooms;

    /**
     * @var int $minBedrooms
     */
    private $minBedrooms;

    /**
     * @var int $minBeds
     */
    private $minBeds;

    /**
     * @var int $priceMin
     */
    private $priceMin;

    /**
     * @var int $priceMax
     */
    private $priceMax;

    /**
     * @var int $minNumPicUrls
     */
    private $minNumPicUrls;

    /**
     * @var int $sort
     */
    private $sort;

    /**
     * @var bool $fetchFacets
     */
    private $fetchFacets;

    /**
     * @var float $userLat
     */
    private $userLat;

    /**
     * @var float $userLng
     */
    private $userLng;

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
     * @return int
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param int $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @return boolean
     */
    public function isIb()
    {
        return $this->ib;
    }

    /**
     * @param boolean $ib
     */
    public function setIb($ib)
    {
        $this->ib = $ib;
    }

    /**
     * @return boolean
     */
    public function isIbAddPhotoFlow()
    {
        return $this->ibAddPhotoFlow;
    }

    /**
     * @param boolean $ibAddPhotoFlow
     */
    public function setIbAddPhotoFlow($ibAddPhotoFlow)
    {
        $this->ibAddPhotoFlow = $ibAddPhotoFlow;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getMinBathrooms()
    {
        return $this->minBathrooms;
    }

    /**
     * @param int $minBathrooms
     */
    public function setMinBathrooms($minBathrooms)
    {
        $this->minBathrooms = $minBathrooms;
    }

    /**
     * @return int
     */
    public function getMinBedrooms()
    {
        return $this->minBedrooms;
    }

    /**
     * @param int $minBedrooms
     */
    public function setMinBedrooms($minBedrooms)
    {
        $this->minBedrooms = $minBedrooms;
    }

    /**
     * @return int
     */
    public function getMinBeds()
    {
        return $this->minBeds;
    }

    /**
     * @param int $minBeds
     */
    public function setMinBeds($minBeds)
    {
        $this->minBeds = $minBeds;
    }

    /**
     * @return int
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * @param int $priceMin
     */
    public function setPriceMin($priceMin)
    {
        $this->priceMin = $priceMin;
    }

    /**
     * @return int
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }

    /**
     * @param int $priceMax
     */
    public function setPriceMax($priceMax)
    {
        $this->priceMax = $priceMax;
    }

    /**
     * @return int
     */
    public function getMinNumPicUrls()
    {
        return $this->minNumPicUrls;
    }

    /**
     * @param int $minNumPicUrls
     */
    public function setMinNumPicUrls($minNumPicUrls)
    {
        $this->minNumPicUrls = $minNumPicUrls;
    }

    /**
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param int $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return boolean
     */
    public function getFetchFacets()
    {
        return $this->fetchFacets;
    }

    /**
     * @param boolean $fetchFacets
     */
    public function setFetchFacets($fetchFacets)
    {
        $this->fetchFacets = $fetchFacets;
    }

    /**
     * @return float
     */
    public function getUserLat()
    {
        return $this->userLat;
    }

    /**
     * @param float $userLat
     */
    public function setUserLat($userLat)
    {
        $this->userLat = $userLat;
    }

    /**
     * @return float
     */
    public function getUserLng()
    {
        return $this->userLng;
    }

    /**
     * @param float $userLng
     */
    public function setUserLng($userLng)
    {
        $this->userLng = $userLng;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'locale' => $this->locale,
            'currency' => $this->currency,
            '_format' => $this->format,
            '_limit' => $this->limit,
            '_offset' => $this->offset,
            'guests' => $this->guests,
            'ib' => $this->ib,
            'ib_add_photo_flow' => $this->ibAddPhotoFlow,
            'location' => $this->location,
            'min_bathrooms' => $this->minBathrooms,
            'min_bedrooms' => $this->minBedrooms,
            'min_beds' => $this->minBeds,
            'price_min' => $this->priceMin,
            'price_max' => $this->priceMax,
            'min_num_pic_urls' => $this->minNumPicUrls,
            'sort' => $this->sort,
            'fetch_facets' => $this->fetchFacets,
            'user_lat' => $this->userLat,
            'user_lng' => $this->userLng
        ];
    }
}