<?php

namespace ethbnb\Response\Listing;

use ethbnb\Response\Listing\Listing\Listing;
use ethbnb\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

class ListingResponse implements ResponseInterface
{
    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\Listing")
     *
     * @var Listing $listing
     */
    private $listing;

    /**
     * @return Listing
     */
    public function getListing()
    {
        return $this->listing;
    }

    /**
     * @param Listing $listing
     */
    public function setListing($listing)
    {
        $this->listing = $listing;
    }
}
