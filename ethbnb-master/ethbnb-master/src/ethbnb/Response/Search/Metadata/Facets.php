<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class Facets
{
    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $neighborhoodFacet
     */
    private $neighborhoodFacet;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $topNeighborhoods
     */
    private $topNeighborhoods;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $bathrooms
     */
    private $bathrooms;

    /**
     * @JMS\Type("array<AirbnbSDK\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $bedrooms
     */
    private $bedrooms;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $beds
     */
    private $beds;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $availability
     */
    private $availability;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $roomType
     */
    private $roomType;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $propertyTypeId
     */
    private $propertyTypeId;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $hostingAmenityIds
     */
    private $hostingAmenityIds;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $topAmenities
     */
    private $topAmenities;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $languages
     */
    private $languages;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\Metadata\KeyValueCount>")
     *
     * @var KeyValueCount[] $cancelPolicy
     */
    private $cancelPolicy;

    /**
     * @return KeyValueCount[]
     */
    public function getNeighborhoodFacet()
    {
        return $this->neighborhoodFacet;
    }

    /**
     * @param KeyValueCount[] $neighborhoodFacet
     */
    public function setNeighborhoodFacet($neighborhoodFacet)
    {
        $this->neighborhoodFacet = $neighborhoodFacet;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getTopNeighborhoods()
    {
        return $this->topNeighborhoods;
    }

    /**
     * @param KeyValueCount[] $topNeighborhoods
     */
    public function setTopNeighborhoods($topNeighborhoods)
    {
        $this->topNeighborhoods = $topNeighborhoods;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * @param KeyValueCount[] $bathrooms
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * @param KeyValueCount[] $bedrooms
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * @param KeyValueCount[] $beds
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param KeyValueCount[] $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param KeyValueCount[] $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getPropertyTypeId()
    {
        return $this->propertyTypeId;
    }

    /**
     * @param KeyValueCount[] $propertyTypeId
     */
    public function setPropertyTypeId($propertyTypeId)
    {
        $this->propertyTypeId = $propertyTypeId;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getHostingAmenityIds()
    {
        return $this->hostingAmenityIds;
    }

    /**
     * @param KeyValueCount[] $hostingAmenityIds
     */
    public function setHostingAmenityIds($hostingAmenityIds)
    {
        $this->hostingAmenityIds = $hostingAmenityIds;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getTopAmenities()
    {
        return $this->topAmenities;
    }

    /**
     * @param KeyValueCount[] $topAmenities
     */
    public function setTopAmenities($topAmenities)
    {
        $this->topAmenities = $topAmenities;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param KeyValueCount[] $languages
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    /**
     * @return KeyValueCount[]
     */
    public function getCancelPolicy()
    {
        return $this->cancelPolicy;
    }

    /**
     * @param KeyValueCount[] $cancelPolicy
     */
    public function setCancelPolicy($cancelPolicy)
    {
        $this->cancelPolicy = $cancelPolicy;
    }
}
