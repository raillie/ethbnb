<?php

namespace ethbnb\Response\Listing;

use ethbnb\Response\Listing\Listing\Listing;
use ethbnb\Response\Listing\Metadata\Metadata;
use ethbnb\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

class ListingsResponse implements ResponseInterface
{
    /**
     * @JMS\Type("ethbnb\Response\Listing\Metadata\Metadata")
     *
     * @var Metadata $metadata;
     */
    private $metadata;

    /**
     * @JMS\Type("array<ethbnb\Response\Listing\Listing\Listing>")
     *
     * @var Listing[] $listings
     */
    private $listings;

    /**
     * @return Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param Metadata $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return Listing[]
     */
    public function getListings()
    {
        return $this->listings;
    }

    /**
     * @param $listings
     */
    public function setListings($listings)
    {
        $this->listings = $listings;
    }
}