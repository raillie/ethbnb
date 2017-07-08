<?php

namespace ethbnb\Response\Listing\Listing;

use ethbnb\Response\Listing\Listing\Review\RecentReview;
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
     * @JMS\Type"ethbnb\Response\Listing\Listing\User")
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
     * @JMS\Type("string")
     *
     * @var string $address
     */
    private $address;

    /**
     * @JMS\Type("integer")
     *
     * @var int $bathrooms
     */
    private $bathrooms;

    /**
     * @JMS\Type("integer")
     *
     * @var int $bedrooms
     */
    private $bedrooms;

    /**
     * @JMS\Type("integer")
     *
     * @var int $beds
     */
    private $beds;

    /**
     * @JMS\Type("string")
     *
     * @var string $cancellationPolicy
     */
    private $cancellationPolicy;

    /**
     * @JMS\Type("string")
     *
     * @var string $countryCode
     */
    private $countryCode;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasAvailability
     */
    private $hasAvailability;

    /**
     * @JMS\Type("array<ethbnb\Response\Listing\Listing\User\User>")
     *
     * @var User{] $hosts
     */
    private $hosts;

    /**
     * @JMS\Type("string")
     *
     * @var string $listingNativeCurrency
     */
    private $listingNativeCurrency;

    /**
     * @JMS\Type("string")
     *
     * @var string $market
     */
    private $market;

    /**
     * @JMS\Type("integer")
     *
     * @var int $minNights
     */
    private $minNights;

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
     * @JMS\Type("array")
     *
     * @var array $pictureUrls
     */
    private $pictureUrls;

    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\User\User")
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
     * @JMS\Type("string")
     *
     * @var string $specialOffer
     */
    private $specialOffer;

    /**
     * @JMS\Type("string")
     *
     * @var string $state
     */
    private $state;

    /**
     * @JMS\Type("array")
     *
     * @var array $thumbnailUrls
     */
    private $thumbnailUrls;

    /**
     * @JMS\Type("array")
     *
     * @var array $xlPictureUrls
     */
    private $xlPictureUrls;

    /**
     * @JMS\Type("string")
     *
     * @var string $zipcode
     */
    private $zipcode;

    /**
     * @JMS\Type("string")
     *
     * @var string $bedType
     */
    private $bedType;

    /**
     * @JMS\Type("string")
     *
     * @var string $bedTypeCategory
     */
    private $bedTypeCategory;

    /**
     * @JMS\Type("string")
     *
     * @var string $currencySymbolLeft
     */
    private $currencySymbolLeft;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $forceMobileLegalModal
     */
    private $forceMobileLegalModal;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $requireGuestProfilePicture
     */
    private $requireGuestProfilePicture;

    /**
     * @JMS\Type("string")
     *
     * @var string $access
     */
    private $access;

    /**
     * @JMS\Type("array")
     *
     * @var array $amenities
     */
    private $amenities;

    /**
     * @JMS\Type("array")
     *
     * @var array $amenitiesIds
     */
    private $amenitiesIds;

    /**
     * @JMS\Type("string")
     *
     * @var string $calendarUpdatedAt
     */
    private $calendarUpdatedAt;

    /**
     * @JMS\Type("integer")
     *
     * @var int $cancelPolicy
     */
    private $cancelPolicy;

    /**
     * @JMS\Type("string")
     *
     * @var string $cancelPolicyShortStr
     */
    private $cancelPolicyShortStr;

    /**
     * @JMS\Type("integer")
     *
     * @var int $checkInTime
     */
    private $checkInTime;

    /**
     * @JMS\Type("integer")
     *
     * @var int $checkInTimeEndsAt
     */
    private $checkInTimeEndsAt;

    /**
     * @JMS\Type("integer")
     *
     * @var int $checkOutTime
     */
    private $checkOutTime;

    /**
     * @JMS\Type("integer")
     *
     * @var int $cleaningFeeNative
     */
    private $cleaningFeeNative;

    /**
     * @JMS\Type("string")
     *
     * @var string $currencySymbolRight
     */
    private $currencySymbolRight;

    /**
     * @JMS\Type("string")
     *
     * @var string $description
     */
    private $description;

    /**
     * @JMS\Type("string")
     *
     * @var string $descriptionLocale
     */
    private $descriptionLocale;

    /**
     * @JMS\Type("string")
     *
     * @var string $experienceOffered
     */
    private $experiencesOffered;

    /**
     * @JMS\Type("string")
     *
     * @var string $extraUserInfo
     */
    private $extraUserInfo;

    /**
     * @JMS\Type("integer")
     *
     * @var int $extrasPriceNative
     */
    private $extrasPriceNative;

    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\GuestControls")
     *
     * @var GuestControls $guestControls
     */
    private $guestControls;

    /**
     * @JMS\Type("integer")
     *
     * @var int $guestsIncluded
     */
    private $guestsIncluded;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasAgreedToLegalTerms
     */
    private $hasAgreedToLegalTerms;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasLicense
     */
    private $hasLicense;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasViewedCleaning
     */
    private $hasViewedCleaning;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasViewedIbPerfDashboardPanel
     */
    private $hasViewedIbPerfDashboardPanel;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasViewedTerms
     */
    private $hasViewedTerms;

    /**
     * @JMS\Type("string")
     *
     * @var string $houseRules
     */
    private $houseRules;

    /**
     * @JMS\Type("string")
     *
     * @var string $instantBookWelcomeMessage
     */
    private $instantBookWelcomeMessage;

    /**
     * @JMS\Type("string")
     *
     * @var string $interaction
     */
    private $interaction;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $isLocationExact
     */
    private $isLocationExact;

    /**
     * @JMS\Type("string")
     *
     * @var string $jurisdictionNames
     */
    private $jurisdictionNames;

    /**
     * @JMS\Type("string")
     *
     * @var string $jurisdictionRolloutNames
     */
    private $jurisdictionRolloutNames;

    /**
     * @JMS\Type("string")
     *
     * @var string $language
     */
    private $language;

    /**
     * @JMS\Type("string")
     *
     * @var string $license
     */
    private $license;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingCleaningFeeNative
     */
    private $listingCleaningFeeNative;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingMonthlyPriceNative
     */
    private $listingMonthlyPriceNative;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingPriceForExtraPersonNative
     */
    private $listingPriceForExtraPersonNative;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingSecurityDepositNative
     */
    private $listingSecurityDepositNative;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingWeekendPriceNative
     */
    private $listingWeekendPriceNative;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingWeeklyPriceNative
     */
    private $listingWeeklyPriceNative;

    /**
     * @JMS\Type("string")
     *
     * @var string $locale
     */
    private $locale;

    /**
     * @JMS\Type("string")
     *
     * @var string $mapImageUrl
     */
    private $mapImageUrl;

    /**
     * @JMS\Type("integer")
     *
     * @var int $maxNights
     */
    private $maxNights;

    /**
     * @JMS\Type("integer")
     *
     * @var int $maxNightsInputValue
     */
    private $maxNightsInputValue;

    /**
     * @JMS\Type("integer")
     *
     * @var int $minNightsInputValue
     */
    private $minNightsInputValue;

    /**
     * @JMS\Type("float")
     *
     * @var float $monthlyPriceFactor
     */
    private $monthlyPriceFactor;

    /**
     * @JMS\Type("integer")
     *
     * @var int $monthlyPriceNative
     */
    private $monthlyPriceNative;

    /**
     * @JMS\Type("string")
     *
     * @var string $neighborhoodOverview
     */
    private $neighborhoodOverview;

    /**
     * @JMS\Type("string")
     *
     * @var string $notes
     */
    private $notes;

    /**
     * @JMS\Type("array<ethbnb\Response\Listing\Listing\Photo>")
     *
     * @var Photo[] $photos
     */
    private $photos;

    /**
     * @JMS\Type("array")
     *
     * @var array $pictureCaptions
     */
    private $pictureCaptions;

    /**
     * @JMS\Type("integer")
     *
     * @var int $priceForExtraPersonNative
     */
    private $priceForExtraPersonNative;

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
     * @JMS\Type("boolean")
     *
     * @var bool $requireGuestPhoneVerification
     */
    private $requireGuestPhoneVerification;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $requiresLicense
     */
    private $requiresLicense;

    /**
     * @JMS\Type("string")
     *
     * @var string $securityDepositFormatted
     */
    private $securityDepositFormatted;

    /**
     * @JMS\Type("float")
     *
     * @var float $securityDepositNative
     */
    private $securityDepositNative;

    /**
     * @JMS\Type("float")
     *
     * @var float $securityPriceNative
     */
    private $securityPriceNative;

    /**
     * @JMS\Type("string")
     *
     * @var string $space
     */
    private $space;

    /**
     * @JMS\Type("string")
     *
     * @var string $squareFeet
     */
    private $squareFeet;

    /**
     * @JMS\Type("float")
     *
     * @var float $starRating
     */
    private $starRating;

    /**
     * @JMS\Type("string")
     *
     * @var string $summary
     */
    private $summary;

    /**
     * @JMS\Type("string")
     *
     * @var string $timeZoneName
     */
    private $timeZoneName;

    /**
     * @JMS\Type("string")
     *
     * @var string $transit
     */
    private $transit;

    /**
     * @JMS\Type("integer")
     *
     * @var int $weeklyPriceFactor
     */
    private $weeklyPriceFactor;

    /**
     * @JMS\Type("integer")
     *
     * @var int $weeklyPriceNative
     */
    private $weeklyPriceNative;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $inBuilding
     */
    private $inBuilding;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $inTotoArea
     */
    private $inTotoArea;

    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\Review\RecentReview")
     *
     * @var RecentReview $recentReview
     */
    private $recentReview;

    /**
     * @JMS\Type("string")
     *
     * @var string $totoOptIn
     */
    private $totoOptIn;

    /**
     * @JMS\Type("string")
     *
     * @var string $wirelessInfo
     */
    private $wirelessInfo;

    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\ListingOccupancyInfo")
     *
     * @var ListingOccupancyInfo $listingOccupancyInfo
     */
    private $listingOccupancyInfo;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewRatingAccuracy
     */
    private $reviewRatingAccuracy;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewRatingCheckin
     */
    private $reviewRatingCheckin;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewRatingCleanliness
     */
    private $reviewRatingCleanliness;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewRatingCommunication
     */
    private $reviewRatingCommunication;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewRatingLocation
     */
    private $reviewRatingLocation;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewRatingValue
     */
    private $reviewRatingValue;

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
     * @return UserResponse
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserResponse $user
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
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * @param int $bathrooms
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;
    }

    /**
     * @return int
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * @param int $bedrooms
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    }

    /**
     * @return int
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * @param int $beds
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
    }

    /**
     * @return string
     */
    public function getCancellationPolicy()
    {
        return $this->cancellationPolicy;
    }

    /**
     * @param string $cancellationPolicy
     */
    public function setCancellationPolicy($cancellationPolicy)
    {
        $this->cancellationPolicy = $cancellationPolicy;
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
     * @return boolean
     */
    public function isHasAvailability()
    {
        return $this->hasAvailability;
    }

    /**
     * @param boolean $hasAvailability
     */
    public function setHasAvailability($hasAvailability)
    {
        $this->hasAvailability = $hasAvailability;
    }

    /**
     * @return UserResponse
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * @param UserResponse $hosts
     */
    public function setHosts($hosts)
    {
        $this->hosts = $hosts;
    }

    /**
     * @return string
     */
    public function getListingNativeCurrency()
    {
        return $this->listingNativeCurrency;
    }

    /**
     * @param string $listingNativeCurrency
     */
    public function setListingNativeCurrency($listingNativeCurrency)
    {
        $this->listingNativeCurrency = $listingNativeCurrency;
    }

    /**
     * @return string
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param string $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return int
     */
    public function getMinNights()
    {
        return $this->minNights;
    }

    /**
     * @param int $minNights
     */
    public function setMinNights($minNights)
    {
        $this->minNights = $minNights;
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
     * @return UserResponse
     */
    public function getPrimaryHost()
    {
        return $this->primaryHost;
    }

    /**
     * @param UserResponse $primaryHost
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
     * @return string
     */
    public function getSpecialOffer()
    {
        return $this->specialOffer;
    }

    /**
     * @param string $specialOffer
     */
    public function setSpecialOffer($specialOffer)
    {
        $this->specialOffer = $specialOffer;
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
     * @return array
     */
    public function getThumbnailUrls()
    {
        return $this->thumbnailUrls;
    }

    /**
     * @param array $thumbnailUrls
     */
    public function setThumbnailUrls($thumbnailUrls)
    {
        $this->thumbnailUrls = $thumbnailUrls;
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

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getBedType()
    {
        return $this->bedType;
    }

    /**
     * @param string $bedType
     */
    public function setBedType($bedType)
    {
        $this->bedType = $bedType;
    }

    /**
     * @return string
     */
    public function getBedTypeCategory()
    {
        return $this->bedTypeCategory;
    }

    /**
     * @param string $bedTypeCategory
     */
    public function setBedTypeCategory($bedTypeCategory)
    {
        $this->bedTypeCategory = $bedTypeCategory;
    }

    /**
     * @return string
     */
    public function getCurrencySymbolLeft()
    {
        return $this->currencySymbolLeft;
    }

    /**
     * @param string $currencySymbolLeft
     */
    public function setCurrencySymbolLeft($currencySymbolLeft)
    {
        $this->currencySymbolLeft = $currencySymbolLeft;
    }

    /**
     * @return boolean
     */
    public function isForceMobileLegalModal()
    {
        return $this->forceMobileLegalModal;
    }

    /**
     * @param boolean $forceMobileLegalModal
     */
    public function setForceMobileLegalModal($forceMobileLegalModal)
    {
        $this->forceMobileLegalModal = $forceMobileLegalModal;
    }

    /**
     * @return boolean
     */
    public function isRequireGuestProfilePicture()
    {
        return $this->requireGuestProfilePicture;
    }

    /**
     * @param boolean $requireGuestProfilePicture
     */
    public function setRequireGuestProfilePicture($requireGuestProfilePicture)
    {
        $this->requireGuestProfilePicture = $requireGuestProfilePicture;
    }

    /**
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param string $access
     */
    public function setAccess($access)
    {
        $this->access = $access;
    }

    /**
     * @return array
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * @param array $amenities
     */
    public function setAmenities($amenities)
    {
        $this->amenities = $amenities;
    }

    /**
     * @return array
     */
    public function getAmenitiesIds()
    {
        return $this->amenitiesIds;
    }

    /**
     * @param array $amenitiesIds
     */
    public function setAmenitiesIds($amenitiesIds)
    {
        $this->amenitiesIds = $amenitiesIds;
    }

    /**
     * @return string
     */
    public function getCalendarUpdatedAt()
    {
        return $this->calendarUpdatedAt;
    }

    /**
     * @param string $calendarUpdatedAt
     */
    public function setCalendarUpdatedAt($calendarUpdatedAt)
    {
        $this->calendarUpdatedAt = $calendarUpdatedAt;
    }

    /**
     * @return int
     */
    public function getCancelPolicy()
    {
        return $this->cancelPolicy;
    }

    /**
     * @param int $cancelPolicy
     */
    public function setCancelPolicy($cancelPolicy)
    {
        $this->cancelPolicy = $cancelPolicy;
    }

    /**
     * @return string
     */
    public function getCancelPolicyShortStr()
    {
        return $this->cancelPolicyShortStr;
    }

    /**
     * @param string $cancelPolicyShortStr
     */
    public function setCancelPolicyShortStr($cancelPolicyShortStr)
    {
        $this->cancelPolicyShortStr = $cancelPolicyShortStr;
    }

    /**
     * @return int
     */
    public function getCheckInTime()
    {
        return $this->checkInTime;
    }

    /**
     * @param int $checkInTime
     */
    public function setCheckInTime($checkInTime)
    {
        $this->checkInTime = $checkInTime;
    }

    /**
     * @return int
     */
    public function getCheckInTimeEndsAt()
    {
        return $this->checkInTimeEndsAt;
    }

    /**
     * @param int $checkInTimeEndsAt
     */
    public function setCheckInTimeEndsAt($checkInTimeEndsAt)
    {
        $this->checkInTimeEndsAt = $checkInTimeEndsAt;
    }

    /**
     * @return int
     */
    public function getCheckOutTime()
    {
        return $this->checkOutTime;
    }

    /**
     * @param int $checkOutTime
     */
    public function setCheckOutTime($checkOutTime)
    {
        $this->checkOutTime = $checkOutTime;
    }

    /**
     * @return int
     */
    public function getCleaningFeeNative()
    {
        return $this->cleaningFeeNative;
    }

    /**
     * @param int $cleaningFeeNative
     */
    public function setCleaningFeeNative($cleaningFeeNative)
    {
        $this->cleaningFeeNative = $cleaningFeeNative;
    }

    /**
     * @return string
     */
    public function getCurrencySymbolRight()
    {
        return $this->currencySymbolRight;
    }

    /**
     * @param string $currencySymbolRight
     */
    public function setCurrencySymbolRight($currencySymbolRight)
    {
        $this->currencySymbolRight = $currencySymbolRight;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescriptionLocale()
    {
        return $this->descriptionLocale;
    }

    /**
     * @param string $descriptionLocale
     */
    public function setDescriptionLocale($descriptionLocale)
    {
        $this->descriptionLocale = $descriptionLocale;
    }

    /**
     * @return string
     */
    public function getExperiencesOffered()
    {
        return $this->experiencesOffered;
    }

    /**
     * @param string $experiencesOffered
     */
    public function setExperiencesOffered($experiencesOffered)
    {
        $this->experiencesOffered = $experiencesOffered;
    }

    /**
     * @return string
     */
    public function getExtraUserInfo()
    {
        return $this->extraUserInfo;
    }

    /**
     * @param string $extraUserInfo
     */
    public function setExtraUserInfo($extraUserInfo)
    {
        $this->extraUserInfo = $extraUserInfo;
    }

    /**
     * @return int
     */
    public function getExtrasPriceNative()
    {
        return $this->extrasPriceNative;
    }

    /**
     * @param int $extrasPriceNative
     */
    public function setExtrasPriceNative($extrasPriceNative)
    {
        $this->extrasPriceNative = $extrasPriceNative;
    }

    /**
     * @return GuestControlResponse
     */
    public function getGuestControls()
    {
        return $this->guestControls;
    }

    /**
     * @param GuestControlResponse $guestControls
     */
    public function setGuestControls($guestControls)
    {
        $this->guestControls = $guestControls;
    }

    /**
     * @return int
     */
    public function getGuestsIncluded()
    {
        return $this->guestsIncluded;
    }

    /**
     * @param int $guestsIncluded
     */
    public function setGuestsIncluded($guestsIncluded)
    {
        $this->guestsIncluded = $guestsIncluded;
    }

    /**
     * @return boolean
     */
    public function isHasAgreedToLegalTerms()
    {
        return $this->hasAgreedToLegalTerms;
    }

    /**
     * @param boolean $hasAgreedToLegalTerms
     */
    public function setHasAgreedToLegalTerms($hasAgreedToLegalTerms)
    {
        $this->hasAgreedToLegalTerms = $hasAgreedToLegalTerms;
    }

    /**
     * @return boolean
     */
    public function isHasLicense()
    {
        return $this->hasLicense;
    }

    /**
     * @param boolean $hasLicense
     */
    public function setHasLicense($hasLicense)
    {
        $this->hasLicense = $hasLicense;
    }

    /**
     * @return boolean
     */
    public function isHasViewedCleaning()
    {
        return $this->hasViewedCleaning;
    }

    /**
     * @param boolean $hasViewedCleaning
     */
    public function setHasViewedCleaning($hasViewedCleaning)
    {
        $this->hasViewedCleaning = $hasViewedCleaning;
    }

    /**
     * @return boolean
     */
    public function isHasViewedIbPerfDashboardPanel()
    {
        return $this->hasViewedIbPerfDashboardPanel;
    }

    /**
     * @param boolean $hasViewedIbPerfDashboardPanel
     */
    public function setHasViewedIbPerfDashboardPanel($hasViewedIbPerfDashboardPanel)
    {
        $this->hasViewedIbPerfDashboardPanel = $hasViewedIbPerfDashboardPanel;
    }

    /**
     * @return boolean
     */
    public function isHasViewedTerms()
    {
        return $this->hasViewedTerms;
    }

    /**
     * @param boolean $hasViewedTerms
     */
    public function setHasViewedTerms($hasViewedTerms)
    {
        $this->hasViewedTerms = $hasViewedTerms;
    }

    /**
     * @return string
     */
    public function getHouseRules()
    {
        return $this->houseRules;
    }

    /**
     * @param string $houseRules
     */
    public function setHouseRules($houseRules)
    {
        $this->houseRules = $houseRules;
    }

    /**
     * @return string
     */
    public function getInstantBookWelcomeMessage()
    {
        return $this->instantBookWelcomeMessage;
    }

    /**
     * @param string $instantBookWelcomeMessage
     */
    public function setInstantBookWelcomeMessage($instantBookWelcomeMessage)
    {
        $this->instantBookWelcomeMessage = $instantBookWelcomeMessage;
    }

    /**
     * @return string
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * @param string $interaction
     */
    public function setInteraction($interaction)
    {
        $this->interaction = $interaction;
    }

    /**
     * @return boolean
     */
    public function isIsLocationExact()
    {
        return $this->isLocationExact;
    }

    /**
     * @param boolean $isLocationExact
     */
    public function setIsLocationExact($isLocationExact)
    {
        $this->isLocationExact = $isLocationExact;
    }

    /**
     * @return string
     */
    public function getJurisdictionNames()
    {
        return $this->jurisdictionNames;
    }

    /**
     * @param string $jurisdictionNames
     */
    public function setJurisdictionNames($jurisdictionNames)
    {
        $this->jurisdictionNames = $jurisdictionNames;
    }

    /**
     * @return string
     */
    public function getJurisdictionRolloutNames()
    {
        return $this->jurisdictionRolloutNames;
    }

    /**
     * @param string $jurisdictionRolloutNames
     */
    public function setJurisdictionRolloutNames($jurisdictionRolloutNames)
    {
        $this->jurisdictionRolloutNames = $jurisdictionRolloutNames;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

    /**
     * @return int
     */
    public function getListingCleaningFeeNative()
    {
        return $this->listingCleaningFeeNative;
    }

    /**
     * @param int $listingCleaningFeeNative
     */
    public function setListingCleaningFeeNative($listingCleaningFeeNative)
    {
        $this->listingCleaningFeeNative = $listingCleaningFeeNative;
    }

    /**
     * @return int
     */
    public function getListingMonthlyPriceNative()
    {
        return $this->listingMonthlyPriceNative;
    }

    /**
     * @param int $listingMonthlyPriceNative
     */
    public function setListingMonthlyPriceNative($listingMonthlyPriceNative)
    {
        $this->listingMonthlyPriceNative = $listingMonthlyPriceNative;
    }

    /**
     * @return int
     */
    public function getListingPriceForExtraPersonNative()
    {
        return $this->listingPriceForExtraPersonNative;
    }

    /**
     * @param int $listingPriceForExtraPersonNative
     */
    public function setListingPriceForExtraPersonNative($listingPriceForExtraPersonNative)
    {
        $this->listingPriceForExtraPersonNative = $listingPriceForExtraPersonNative;
    }

    /**
     * @return int
     */
    public function getListingSecurityDepositNative()
    {
        return $this->listingSecurityDepositNative;
    }

    /**
     * @param int $listingSecurityDepositNative
     */
    public function setListingSecurityDepositNative($listingSecurityDepositNative)
    {
        $this->listingSecurityDepositNative = $listingSecurityDepositNative;
    }

    /**
     * @return int
     */
    public function getListingWeekendPriceNative()
    {
        return $this->listingWeekendPriceNative;
    }

    /**
     * @param int $listingWeekendPriceNative
     */
    public function setListingWeekendPriceNative($listingWeekendPriceNative)
    {
        $this->listingWeekendPriceNative = $listingWeekendPriceNative;
    }

    /**
     * @return int
     */
    public function getListingWeeklyPriceNative()
    {
        return $this->listingWeeklyPriceNative;
    }

    /**
     * @param int $listingWeeklyPriceNative
     */
    public function setListingWeeklyPriceNative($listingWeeklyPriceNative)
    {
        $this->listingWeeklyPriceNative = $listingWeeklyPriceNative;
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
    public function getMapImageUrl()
    {
        return $this->mapImageUrl;
    }

    /**
     * @param string $mapImageUrl
     */
    public function setMapImageUrl($mapImageUrl)
    {
        $this->mapImageUrl = $mapImageUrl;
    }

    /**
     * @return int
     */
    public function getMaxNights()
    {
        return $this->maxNights;
    }

    /**
     * @param int $maxNights
     */
    public function setMaxNights($maxNights)
    {
        $this->maxNights = $maxNights;
    }

    /**
     * @return int
     */
    public function getMaxNightsInputValue()
    {
        return $this->maxNightsInputValue;
    }

    /**
     * @param int $maxNightsInputValue
     */
    public function setMaxNightsInputValue($maxNightsInputValue)
    {
        $this->maxNightsInputValue = $maxNightsInputValue;
    }

    /**
     * @return int
     */
    public function getMinNightsInputValue()
    {
        return $this->minNightsInputValue;
    }

    /**
     * @param int $minNightsInputValue
     */
    public function setMinNightsInputValue($minNightsInputValue)
    {
        $this->minNightsInputValue = $minNightsInputValue;
    }

    /**
     * @return float
     */
    public function getMonthlyPriceFactor()
    {
        return $this->monthlyPriceFactor;
    }

    /**
     * @param float $monthlyPriceFactor
     */
    public function setMonthlyPriceFactor($monthlyPriceFactor)
    {
        $this->monthlyPriceFactor = $monthlyPriceFactor;
    }

    /**
     * @return int
     */
    public function getMonthlyPriceNative()
    {
        return $this->monthlyPriceNative;
    }

    /**
     * @param int $monthlyPriceNative
     */
    public function setMonthlyPriceNative($monthlyPriceNative)
    {
        $this->monthlyPriceNative = $monthlyPriceNative;
    }

    /**
     * @return string
     */
    public function getNeighborhoodOverview()
    {
        return $this->neighborhoodOverview;
    }

    /**
     * @param string $neighborhoodOverview
     */
    public function setNeighborhoodOverview($neighborhoodOverview)
    {
        $this->neighborhoodOverview = $neighborhoodOverview;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return PhotoResponse[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param PhotoResponse[] $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return array
     */
    public function getPictureCaptions()
    {
        return $this->pictureCaptions;
    }

    /**
     * @param array $pictureCaptions
     */
    public function setPictureCaptions($pictureCaptions)
    {
        $this->pictureCaptions = $pictureCaptions;
    }

    /**
     * @return int
     */
    public function getPriceForExtraPersonNative()
    {
        return $this->priceForExtraPersonNative;
    }

    /**
     * @param int $priceForExtraPersonNative
     */
    public function setPriceForExtraPersonNative($priceForExtraPersonNative)
    {
        $this->priceForExtraPersonNative = $priceForExtraPersonNative;
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
     * @return boolean
     */
    public function isRequireGuestPhoneVerification()
    {
        return $this->requireGuestPhoneVerification;
    }

    /**
     * @param boolean $requireGuestPhoneVerification
     */
    public function setRequireGuestPhoneVerification($requireGuestPhoneVerification)
    {
        $this->requireGuestPhoneVerification = $requireGuestPhoneVerification;
    }

    /**
     * @return boolean
     */
    public function isRequiresLicense()
    {
        return $this->requiresLicense;
    }

    /**
     * @param boolean $requiresLicense
     */
    public function setRequiresLicense($requiresLicense)
    {
        $this->requiresLicense = $requiresLicense;
    }

    /**
     * @return string
     */
    public function getSecurityDepositFormatted()
    {
        return $this->securityDepositFormatted;
    }

    /**
     * @param string $securityDepositFormatted
     */
    public function setSecurityDepositFormatted($securityDepositFormatted)
    {
        $this->securityDepositFormatted = $securityDepositFormatted;
    }

    /**
     * @return float
     */
    public function getSecurityDepositNative()
    {
        return $this->securityDepositNative;
    }

    /**
     * @param float $securityDepositNative
     */
    public function setSecurityDepositNative($securityDepositNative)
    {
        $this->securityDepositNative = $securityDepositNative;
    }

    /**
     * @return float
     */
    public function getSecurityPriceNative()
    {
        return $this->securityPriceNative;
    }

    /**
     * @param float $securityPriceNative
     */
    public function setSecurityPriceNative($securityPriceNative)
    {
        $this->securityPriceNative = $securityPriceNative;
    }

    /**
     * @return string
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param string $space
     */
    public function setSpace($space)
    {
        $this->space = $space;
    }

    /**
     * @return string
     */
    public function getSquareFeet()
    {
        return $this->squareFeet;
    }

    /**
     * @param string $squareFeet
     */
    public function setSquareFeet($squareFeet)
    {
        $this->squareFeet = $squareFeet;
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
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return string
     */
    public function getTimeZoneName()
    {
        return $this->timeZoneName;
    }

    /**
     * @param string $timeZoneName
     */
    public function setTimeZoneName($timeZoneName)
    {
        $this->timeZoneName = $timeZoneName;
    }

    /**
     * @return string
     */
    public function getTransit()
    {
        return $this->transit;
    }

    /**
     * @param string $transit
     */
    public function setTransit($transit)
    {
        $this->transit = $transit;
    }

    /**
     * @return int
     */
    public function getWeeklyPriceFactor()
    {
        return $this->weeklyPriceFactor;
    }

    /**
     * @param int $weeklyPriceFactor
     */
    public function setWeeklyPriceFactor($weeklyPriceFactor)
    {
        $this->weeklyPriceFactor = $weeklyPriceFactor;
    }

    /**
     * @return int
     */
    public function getWeeklyPriceNative()
    {
        return $this->weeklyPriceNative;
    }

    /**
     * @param int $weeklyPriceNative
     */
    public function setWeeklyPriceNative($weeklyPriceNative)
    {
        $this->weeklyPriceNative = $weeklyPriceNative;
    }

    /**
     * @return boolean
     */
    public function isInBuilding()
    {
        return $this->inBuilding;
    }

    /**
     * @param boolean $inBuilding
     */
    public function setInBuilding($inBuilding)
    {
        $this->inBuilding = $inBuilding;
    }

    /**
     * @return boolean
     */
    public function isInTotoArea()
    {
        return $this->inTotoArea;
    }

    /**
     * @param boolean $inTotoArea
     */
    public function setInTotoArea($inTotoArea)
    {
        $this->inTotoArea = $inTotoArea;
    }

    /**
     * @return RecentReviewResponse
     */
    public function getRecentReview()
    {
        return $this->recentReview;
    }

    /**
     * @param RecentReviewResponse $recentReview
     */
    public function setRecentReview($recentReview)
    {
        $this->recentReview = $recentReview;
    }

    /**
     * @return string
     */
    public function getTotoOptIn()
    {
        return $this->totoOptIn;
    }

    /**
     * @param string $totoOptIn
     */
    public function setTotoOptIn($totoOptIn)
    {
        $this->totoOptIn = $totoOptIn;
    }

    /**
     * @return string
     */
    public function getWirelessInfo()
    {
        return $this->wirelessInfo;
    }

    /**
     * @param string $wirelessInfo
     */
    public function setWirelessInfo($wirelessInfo)
    {
        $this->wirelessInfo = $wirelessInfo;
    }

    /**
     * @return ListingOccupancyInfoResponse
     */
    public function getListingOccupancyInfo()
    {
        return $this->listingOccupancyInfo;
    }

    /**
     * @param ListingOccupancyInfoResponse $listingOccupancyInfo
     */
    public function setListingOccupancyInfo($listingOccupancyInfo)
    {
        $this->listingOccupancyInfo = $listingOccupancyInfo;
    }

    /**
     * @return int
     */
    public function getReviewRatingAccuracy()
    {
        return $this->reviewRatingAccuracy;
    }

    /**
     * @param int $reviewRatingAccuracy
     */
    public function setReviewRatingAccuracy($reviewRatingAccuracy)
    {
        $this->reviewRatingAccuracy = $reviewRatingAccuracy;
    }

    /**
     * @return int
     */
    public function getReviewRatingCheckin()
    {
        return $this->reviewRatingCheckin;
    }

    /**
     * @param int $reviewRatingCheckin
     */
    public function setReviewRatingCheckin($reviewRatingCheckin)
    {
        $this->reviewRatingCheckin = $reviewRatingCheckin;
    }

    /**
     * @return int
     */
    public function getReviewRatingCleanliness()
    {
        return $this->reviewRatingCleanliness;
    }

    /**
     * @param int $reviewRatingCleanliness
     */
    public function setReviewRatingCleanliness($reviewRatingCleanliness)
    {
        $this->reviewRatingCleanliness = $reviewRatingCleanliness;
    }

    /**
     * @return int
     */
    public function getReviewRatingCommunication()
    {
        return $this->reviewRatingCommunication;
    }

    /**
     * @param int $reviewRatingCommunication
     */
    public function setReviewRatingCommunication($reviewRatingCommunication)
    {
        $this->reviewRatingCommunication = $reviewRatingCommunication;
    }

    /**
     * @return int
     */
    public function getReviewRatingLocation()
    {
        return $this->reviewRatingLocation;
    }

    /**
     * @param int $reviewRatingLocation
     */
    public function setReviewRatingLocation($reviewRatingLocation)
    {
        $this->reviewRatingLocation = $reviewRatingLocation;
    }

    /**
     * @return int
     */
    public function getReviewRatingValue()
    {
        return $this->reviewRatingValue;
    }

    /**
     * @param int $reviewRatingValue
     */
    public function setReviewRatingValue($reviewRatingValue)
    {
        $this->reviewRatingValue = $reviewRatingValue;
    }
}
