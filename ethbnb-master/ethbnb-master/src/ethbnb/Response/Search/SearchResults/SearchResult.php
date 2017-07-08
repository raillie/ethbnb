<?php

namespace ethbnb\Response\Search\SearchResults;

use ethbnb\Response\Search\SearchResults\Listing\Listing;
use JMS\Serializer\Annotation as JMS;

class SearchResult
{
    /**
     * @JMS\Type("ethbnb\Response\Search\SearchResults\Listing\Listing")
     *
     * @var Listing $listings
     */
    private $listing;

    /**
     * @JMS\Type("ethbnb\Response\Search\SearchResults\PricingQuote")
     *
     * @var PricingQuote $pricingQuote
     */
    private $pricingQuote;

    /**
     * @JMS\Type("string")
     *
     * @var string $viewedAt
     */
    private $viewedAt;

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

    /**
     * @return PricingQuote
     */
    public function getPricingQuote()
    {
        return $this->pricingQuote;
    }

    /**
     * @param PricingQuote $pricingQuote
     */
    public function setPricingQuote($pricingQuote)
    {
        $this->pricingQuote = $pricingQuote;
    }

    /**
     * @return string
     */
    public function getViewedAt()
    {
        return $this->viewedAt;
    }

    /**
     * @param string $viewedAt
     */
    public function setViewedAt($viewedAt)
    {
        $this->viewedAt = $viewedAt;
    }
}
