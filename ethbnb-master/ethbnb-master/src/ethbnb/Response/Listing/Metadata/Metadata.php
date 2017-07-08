<?php

namespace ethbnb\Response\Listing\Metadata;
use JMS\Serializer\Annotation as JMS;

class Metadata
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $listingCount
     */
    private $listingCount;

    /**
     * @return int
     */
    public function getListingCount()
    {
        return $this->listingCount;
    }

    /**
     * @param int $listingCount
     */
    public function setListingCount($listingCount)
    {
        $this->listingCount = $listingCount;
    }
}
