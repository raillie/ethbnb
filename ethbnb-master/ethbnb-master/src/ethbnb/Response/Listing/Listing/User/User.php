<?php

namespace ethbnb\Response\Listing\Listing\User;

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
     * @var string $firstName
     */
    private $firstName;

    /**
     * @JMS\Type("boolean")
     *
     * @var bool $hasProfilePic
     */
    private $hasProfilePic;

    /**
     * @JMS\Type("string")
     *
     * @var string $pictureUrl
     */
    private $pictureUrl;

    /**
     * @JMS\Type("string")
     *
     * @var string $thumbnailUrl
     */
    private $thumbnailUrl;

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
     * @JMS\Type("integer")
     *
     * @var int $revieweeCount
     */
    private $revieweeCount;

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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return boolean
     */
    public function isHasProfilePic()
    {
        return $this->hasProfilePic;
    }

    /**
     * @param boolean $hasProfilePic
     */
    public function setHasProfilePic($hasProfilePic)
    {
        $this->hasProfilePic = $hasProfilePic;
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
     * @return mixed
     */
    public function getIdentityVerified()
    {
        return $this->identityVerified;
    }

    /**
     * @param mixed $identityVerified
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
}
