<?php

namespace ethbnb\Response\Search\SearchResults\Listing;

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
     * @JMS\Type("todo")
     *
     * @var @TODO
     */
    private $distance;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $instantBookable
     */
    private $instantBookable;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $isNewListing
     */
    private $isNewListing;

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
     * @var string $name
     */
    private $name;

    /**
     * @JMS\Type("string")
     *
     * @var string $neighborhood
     */
    private $neighborhood;

    /**
     * @JMS\Type("integer")
     *
     * @var int $personCapacity
     */
    private $personCapacity;

    /**
     * @JMS\Type("integer")
     *
     * @var int $pictureCount
     */
    private $pictureCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $pictureUrl
     */
    private $pictureUrl;

    /**
     * @JMS\Type("array")
     *
     * @var array $pictureUrls
     */
    private $pictureUrls;

    /**
     * @JMS\Type("ethbnb\Response\Search\SearchResults\Listing\User")
     *
     * @var User $primaryHost
     */
    private $primaryHost;

    /**
     * @JMS\Type("string")
     *
     * @var string $propertyType
     */
    private $propertyType;

    /**
     * @JMS\Type("integer")
     *
     * @var int $propertyTypeId
     */
    private $propertyTypeId;

    /**
     * @JMS\Type("string")
     *
     * @var string $publicAddress
     */
    private $publicAddress;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewsCount
     */
    private $reviewsCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $roomType
     */
    private $roomType;

    /**
     * @JMS\Type("string")
     *
     * @var string $roomTypeCategory
     */
    private $roomTypeCategory;

    /**
     * @JMS\Type("float")
     *
     * @var float $starRating
     */
    private $starRating;

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
     * @JMS\Type("ethbnb\Response\Search\SearchResults\Listing\User")
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
     * @JMS\Type("array")
     *
     * @var array $xlPictureUrls
     */
    private $xlPictureUrls;

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
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
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
     * @return boolean
     */
    public function isIsNewListing()
    {
        return $this->isNewListing;
    }

    /**
     * @param boolean $isNewListing
     */
    public function setIsNewListing($isNewListing)
    {
        $this->isNewListing = $isNewListing;
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
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @param string $neighborhood
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * @return int
     */
    public function getPersonCapacity()
    {
        return $this->personCapacity;
    }

    /**
     * @param int $personCapacity
     */
    public function setPersonCapacity($personCapacity)
    {
        $this->personCapacity = $personCapacity;
    }

    /**
     * @return int
     */
    public function getPictureCount()
    {
        return $this->pictureCount;
    }

    /**
     * @param int $pictureCount
     */
    public function setPictureCount($pictureCount)
    {
        $this->pictureCount = $pictureCount;
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
     * @return array
     */
    public function getPictureUrls()
    {
        return $this->pictureUrls;
    }

    /**
     * @param array $pictureUrls
     */
    public function setPictureUrls($pictureUrls)
    {
        $this->pictureUrls = $pictureUrls;
    }

    /**
     * @return User
     */
    public function getPrimaryHost()
    {
        return $this->primaryHost;
    }

    /**
     * @param User $primaryHost
     */
    public function setPrimaryHost($primaryHost)
    {
        $this->primaryHost = $primaryHost;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * @param string $propertyType
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;
    }

    /**
     * @return int
     */
    public function getPropertyTypeId()
    {
        return $this->propertyTypeId;
    }

    /**
     * @param int $propertyTypeId
     */
    public function setPropertyTypeId($propertyTypeId)
    {
        $this->propertyTypeId = $propertyTypeId;
    }

    /**
     * @return string
     */
    public function getPublicAddress()
    {
        return $this->publicAddress;
    }

    /**
     * @param string $publicAddress
     */
    public function setPublicAddress($publicAddress)
    {
        $this->publicAddress = $publicAddress;
    }

    /**
     * @return int
     */
    public function getReviewsCount()
    {
        return $this->reviewsCount;
    }

    /**
     * @param int $reviewsCount
     */
    public function setReviewsCount($reviewsCount)
    {
        $this->reviewsCount = $reviewsCount;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return string
     */
    public function getRoomTypeCategory()
    {
        return $this->roomTypeCategory;
    }

    /**
     * @param string $roomTypeCategory
     */
    public function setRoomTypeCategory($roomTypeCategory)
    {
        $this->roomTypeCategory = $roomTypeCategory;
    }

    /**
     * @return float
     */
    public function getStarRating()
    {
        return $this->starRating;
    }

    /**
     * @param float $starRating
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
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

    /**
     * @return array
     */
    public function getXlPictureUrls()
    {
        return $this->xlPictureUrls;
    }

    /**
     * @param array $xlPictureUrls
     */
    public function setXlPictureUrls($xlPictureUrls)
    {
        $this->xlPictureUrls = $xlPictureUrls;
    }
}
