<?php

namespace ethbnb\Response\Listing\Listing;

use JMS\Serializer\Annotation as JMS;

class Photo
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
     * @var string $picture
     */
    private $picture;

    /**
     * @JMS\Type("integer")
     *
     * @var int $sortOrder
     */
    private $sortOrder;

    /**
     * @JMS\Type("string")
     *
     * @var string $caption
     */
    private $caption;

    /**
     * @JMS\Type("string")
     *
     * @var string $large
     */
    private $large;

    /**
     * @JMS\Type("string")
     *
     * @var string $largeCover
     */
    private $largeCover;

    /**
     * @JMS\Type("string")
     *
     * @var string $medium
     */
    private $medium;

    /**
     * @JMS\Type("string")
     *
     * @var string $miniSquare
     */
    private $miniSquare;

    /**
     * @JMS\Type("string")
     *
     * @var string $email
     */
    private $small;

    /**
     * @JMS\Type("string")
     *
     * @var string $thumbnail
     */
    private $thumbnail;

    /**
     * @JMS\Type("string")
     *
     * @var string $xLarge
     */
    private $xLarge;

    /**
     * @JMS\Type("string")
     *
     * @var string $xLargeCover
     */
    private $xLargeCover;

    /**
     * @JMS\Type("string")
     *
     * @var string $xMedium
     */
    private $xMedium;

    /**
     * @JMS\Type("string")
     *
     * @var string $xSmall
     */
    private $xSmall;

    /**
     * @JMS\Type("string")
     *
     * @var string $xlPicture
     */
    private $xlPicture;

    /**
     * @JMS\Type("string")
     *
     * @var string $xxLarge
     */
    private $xxLarge;

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
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param int $sortOrder
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * @param string $large
     */
    public function setLarge($large)
    {
        $this->large = $large;
    }

    /**
     * @return string
     */
    public function getLargeCover()
    {
        return $this->largeCover;
    }

    /**
     * @param string $largeCover
     */
    public function setLargeCover($largeCover)
    {
        $this->largeCover = $largeCover;
    }

    /**
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param string $medium
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
    }

    /**
     * @return string
     */
    public function getMiniSquare()
    {
        return $this->miniSquare;
    }

    /**
     * @param string $miniSquare
     */
    public function setMiniSquare($miniSquare)
    {
        $this->miniSquare = $miniSquare;
    }

    /**
     * @return string
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * @param string $small
     */
    public function setSmall($small)
    {
        $this->small = $small;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string
     */
    public function getXLarge()
    {
        return $this->xLarge;
    }

    /**
     * @param string $xLarge
     */
    public function setXLarge($xLarge)
    {
        $this->xLarge = $xLarge;
    }

    /**
     * @return string
     */
    public function getXLargeCover()
    {
        return $this->xLargeCover;
    }

    /**
     * @param string $xLargeCover
     */
    public function setXLargeCover($xLargeCover)
    {
        $this->xLargeCover = $xLargeCover;
    }

    /**
     * @return string
     */
    public function getXMedium()
    {
        return $this->xMedium;
    }

    /**
     * @param string $xMedium
     */
    public function setXMedium($xMedium)
    {
        $this->xMedium = $xMedium;
    }

    /**
     * @return string
     */
    public function getXSmall()
    {
        return $this->xSmall;
    }

    /**
     * @param string $xSmall
     */
    public function setXSmall($xSmall)
    {
        $this->xSmall = $xSmall;
    }

    /**
     * @return string
     */
    public function getXlPicture()
    {
        return $this->xlPicture;
    }

    /**
     * @param string $xlPicture
     */
    public function setXlPicture($xlPicture)
    {
        $this->xlPicture = $xlPicture;
    }

    /**
     * @return string
     */
    public function getXxLarge()
    {
        return $this->xxLarge;
    }

    /**
     * @param string $xxLarge
     */
    public function setXxLarge($xxLarge)
    {
        $this->xxLarge = $xxLarge;
    }
}
