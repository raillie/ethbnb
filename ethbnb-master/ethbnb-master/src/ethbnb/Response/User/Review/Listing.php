<?php

namespace ethbnb\Response\User\Review;

use JMS\Serializer\Annotation as JMS;

class Listing
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $id
     */
    private $id;

    /**
     * @JMS\Type("string")
     *
     * @var string $city
     */
    private $city;

    /**
     * @JMS\Type("array")
     *
     * @var array $collectionIds
     */
    private $collectionIds;

    /**
     * @JMS\Type("string")
     *
     * @var string $country
     */
    private $country;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasDoubleBlindReviews
     */
    private $hasDoubleBlindReviews;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $instantBookable
     */
    private $instantBookable;

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
     * @JMS\Type("string")
     *
     * @var string $mediumUrl
     */
    private $mediumUrl;

    /**
     * @JMS\Type("string")
     *
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     *
     * @var string $nativeCurrency
     */
    private $nativeCurrency;

    /**
     * @JMS\Type("string")
     *
     * @var string $pictureUrl
     */
    private $pictureUrl;

    /**
     * @JMS\Type("integer")
     *
     * @var int $price
     */
    private $price;

    /**
     * @JMS\Type("string")
     *
     * @var string $priceFormatted
     */
    private $priceFormatted;

    /**
     * @JMS\Type("integer")
     *
     * @var int $priceNative
     */
    private $priceNative;

    /**
     * @JMS\Type("string")
     *
     * @var string $smartLocation
     */
    private $smartLocation;

    /**
     * @JMS\Type("string")
     *
     * @var string $thumbnailUrl
     */
    private $thumbnailUrl;

    /**
     * @JMS\Type("integer")
     *
     * @var int $userId
     */
    private $userId;

    /**
     * @JMS\Type("ethbnb\Response\User\Review\User")
     *
     * @var User $user
     */
    private $user;

    /**
     * @JMS\Type("string")
     *
     * @var string $xlPictureUrl
     */
    private $xlPictureUrl;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return array
     */
    public function getCollectionIds()
    {
        return $this->collectionIds;
    }

    /**
     * @param array $collectionIds
     */
    public function setCollectionIds($collectionIds)
    {
        $this->collectionIds = $collectionIds;
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
     * @return boolean
     */
    public function isHasDoubleBlindReviews()
    {
        return $this->hasDoubleBlindReviews;
    }

    /**
     * @param boolean $hasDoubleBlindReviews
     */
    public function setHasDoubleBlindReviews($hasDoubleBlindReviews)
    {
        $this->hasDoubleBlindReviews = $hasDoubleBlindReviews;
    }

    /**
     * @return boolean
     */
    public function isInstantBookable()
    {
        return $this->instantBookable;
    }

    /**
     * @param boolean $instantBookable
     */
    public function setInstantBookable($instantBookable)
    {
        $this->instantBookable = $instantBookable;
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

    /**
     * @return string
     */
    public function getMediumUrl()
    {
        return $this->mediumUrl;
    }

    /**
     * @param string $mediumUrl
     */
    public function setMediumUrl($mediumUrl)
    {
        $this->mediumUrl = $mediumUrl;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * @param string $pictureUrl
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPriceFormatted()
    {
        return $this->priceFormatted;
    }

    /**
     * @param string $priceFormatted
     */
    public function setPriceFormatted($priceFormatted)
    {
        $this->priceFormatted = $priceFormatted;
    }

    /**
     * @return int
     */
    public function getPriceNative()
    {
        return $this->priceNative;
    }

    /**
     * @param int $priceNative
     */
    public function setPriceNative($priceNative)
    {
        $this->priceNative = $priceNative;
    }

    /**
     * @return string
     */
    public function getSmartLocation()
    {
        return $this->smartLocation;
    }

    /**
     * @param string $smartLocation
     */
    public function setSmartLocation($smartLocation)
    {
        $this->smartLocation = $smartLocation;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $thumbnailUrl
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getXlPictureUrl()
    {
        return $this->xlPictureUrl;
    }

    /**
     * @param string $xlPictureUrl
     */
    public function setXlPictureUrl($xlPictureUrl)
    {
        $this->xlPictureUrl = $xlPictureUrl;
    }
}
