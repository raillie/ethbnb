<?php

namespac ethbnb\Response\User\User;

use ethbnb\Response\User\Review\RecentReview;
use JMS\Serializer\Annotation as JMS;

class User
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
     * @var string $acceptanceRate
     */
    private $acceptanceRate;

    /**
     * @JMS\Type("string")
     *
     * @var string $createdAt @TODO
     */
    private $createdAt;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $identityVerified
     */
    private $identityVerified;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $isSuperhost
     */
    private $isSuperhost;

    /**
     * @JMS\Type("string")
     *
     * @var string $pictureLargeUrl
     */
    private $pictureLargeUrl;

    /**
     * @JMS\Type("integer")
     *
     * @var int $publiclyVisibleWishlistsCount
     */
    private $publiclyVisibleWishlistsCount;

    /**
     * @JMS\Type("integer")
     *
     * @var int $recommendationCount
     */
    private $recommendationCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $responseRate
     */
    private $responseRate;

    /**
     * @JMS\Type("string")
     *
     * @var string $responseTime
     */
    private $responseTime;

    /**
     * @JMS\Type("integer")
     *
     * @var int $revieweeCount
     */
    private $revieweeCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $thumbnailMediumUrl
     */
    private $thumbnailMediumUrl;

    /**
     * @JMS\Type("integer")
     *
     * @var int $wishlistsCount
     */
    private $wishlistsCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $neighborhood
     */
    private $neighborhood;

    /**
     * @JMS\Type("array")
     *
     * @var array $verificationLabels
     */
    private $verificationLabels;

    /**
     * @JMS\Type("array")
     *
     * @var array $verifications
     */
    private $verifications;

    /**
     * @JMS\Type("string")
     *
     * @var string $about
     */
    private $about;

    /**
     * @JMS\Type("integer")
     *
     * @var int $friendsCount
     */
    private $friendsCount;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $isGeneratedUser
     */
    private $isGeneratedUser;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingsCount
     */
    private $listingsCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $location
     */
    private $location;

    /**
     * @JMS\Type("todo")
     *
     * @TODO
     */
    private $recentRecommendation;

    /**
     * @JMS\Type("AirbnbSDK\Response\User\Review\RecentReview")
     *
     * @var RecentReview $recentReview
     */
    private $recentReview;

    /**
     * @JMS\Type("string")
     *
     * @var string $work
     */
    private $school;

    /**
     * @JMS\Type("integer")
     *
     * @var int $work
     */
    private $totalListingsCount;

    /**
     * @JMS\Type("string")
     *
     * @var string $work
     */
    private $work;

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
    public function getAcceptanceRate()
    {
        return $this->acceptanceRate;
    }

    /**
     * @param string $acceptanceRate
     */
    public function setAcceptanceRate($acceptanceRate)
    {
        $this->acceptanceRate = $acceptanceRate;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return boolean
     */
    public function isIdentityVerified()
    {
        return $this->identityVerified;
    }

    /**
     * @param boolean $identityVerified
     */
    public function setIdentityVerified($identityVerified)
    {
        $this->identityVerified = $identityVerified;
    }

    /**
     * @return boolean
     */
    public function isIsSuperhost()
    {
        return $this->isSuperhost;
    }

    /**
     * @param boolean $isSuperhost
     */
    public function setIsSuperhost($isSuperhost)
    {
        $this->isSuperhost = $isSuperhost;
    }

    /**
     * @return string
     */
    public function getPictureLargeUrl()
    {
        return $this->pictureLargeUrl;
    }

    /**
     * @param string $pictureLargeUrl
     */
    public function setPictureLargeUrl($pictureLargeUrl)
    {
        $this->pictureLargeUrl = $pictureLargeUrl;
    }

    /**
     * @return int
     */
    public function getPubliclyVisibleWishlistsCount()
    {
        return $this->publiclyVisibleWishlistsCount;
    }

    /**
     * @param int $publiclyVisibleWishlistsCount
     */
    public function setPubliclyVisibleWishlistsCount($publiclyVisibleWishlistsCount)
    {
        $this->publiclyVisibleWishlistsCount = $publiclyVisibleWishlistsCount;
    }

    /**
     * @return int
     */
    public function getRecommendationCount()
    {
        return $this->recommendationCount;
    }

    /**
     * @param int $recommendationCount
     */
    public function setRecommendationCount($recommendationCount)
    {
        $this->recommendationCount = $recommendationCount;
    }

    /**
     * @return string
     */
    public function getResponseRate()
    {
        return $this->responseRate;
    }

    /**
     * @param string $responseRate
     */
    public function setResponseRate($responseRate)
    {
        $this->responseRate = $responseRate;
    }

    /**
     * @return string
     */
    public function getResponseTime()
    {
        return $this->responseTime;
    }

    /**
     * @param string $responseTime
     */
    public function setResponseTime($responseTime)
    {
        $this->responseTime = $responseTime;
    }

    /**
     * @return int
     */
    public function getRevieweeCount()
    {
        return $this->revieweeCount;
    }

    /**
     * @param int $revieweeCount
     */
    public function setRevieweeCount($revieweeCount)
    {
        $this->revieweeCount = $revieweeCount;
    }

    /**
     * @return string
     */
    public function getThumbnailMediumUrl()
    {
        return $this->thumbnailMediumUrl;
    }

    /**
     * @param string $thumbnailMediumUrl
     */
    public function setThumbnailMediumUrl($thumbnailMediumUrl)
    {
        $this->thumbnailMediumUrl = $thumbnailMediumUrl;
    }

    /**
     * @return int
     */
    public function getWishlistsCount()
    {
        return $this->wishlistsCount;
    }

    /**
     * @param int $wishlistsCount
     */
    public function setWishlistsCount($wishlistsCount)
    {
        $this->wishlistsCount = $wishlistsCount;
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
     * @return array
     */
    public function getVerificationLabels()
    {
        return $this->verificationLabels;
    }

    /**
     * @param array $verificationLabels
     */
    public function setVerificationLabels($verificationLabels)
    {
        $this->verificationLabels = $verificationLabels;
    }

    /**
     * @return array
     */
    public function getVerifications()
    {
        return $this->verifications;
    }

    /**
     * @param array $verifications
     */
    public function setVerifications($verifications)
    {
        $this->verifications = $verifications;
    }

    /**
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param string $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * @return int
     */
    public function getFriendsCount()
    {
        return $this->friendsCount;
    }

    /**
     * @param int $friendsCount
     */
    public function setFriendsCount($friendsCount)
    {
        $this->friendsCount = $friendsCount;
    }

    /**
     * @return boolean
     */
    public function isIsGeneratedUser()
    {
        return $this->isGeneratedUser;
    }

    /**
     * @param boolean $isGeneratedUser
     */
    public function setIsGeneratedUser($isGeneratedUser)
    {
        $this->isGeneratedUser = $isGeneratedUser;
    }

    /**
     * @return int
     */
    public function getListingsCount()
    {
        return $this->listingsCount;
    }

    /**
     * @param int $listingsCount
     */
    public function setListingsCount($listingsCount)
    {
        $this->listingsCount = $listingsCount;
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
     * @return mixed
     */
    public function getRecentRecommendation()
    {
        return $this->recentRecommendation;
    }

    /**
     * @param mixed $recentRecommendation
     */
    public function setRecentRecommendation($recentRecommendation)
    {
        $this->recentRecommendation = $recentRecommendation;
    }

    /**
     * @return RecentReview
     */
    public function getRecentReview()
    {
        return $this->recentReview;
    }

    /**
     * @param RecentReview $recentReview
     */
    public function setRecentReview($recentReview)
    {
        $this->recentReview = $recentReview;
    }

    /**
     * @return string
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param string $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * @return int
     */
    public function getTotalListingsCount()
    {
        return $this->totalListingsCount;
    }

    /**
     * @param int $totalListingsCount
     */
    public function setTotalListingsCount($totalListingsCount)
    {
        $this->totalListingsCount = $totalListingsCount;
    }

    /**
     * @return string
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * @param string $work
     */
    public function setWork($work)
    {
        $this->work = $work;
    }
}
