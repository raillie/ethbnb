<?php

namespace ethbnb\Response\Search\SearchResults\Listing;

use JMS\Serializer\Annotation as JMS;

class User
{
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
     * @var bool $isSuperhost
     */
    private $isSuperhost;

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
}
