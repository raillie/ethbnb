<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class Metadata
{
    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\Geography")
     *
     * @var Geography $geography
     */
    private $geography;

    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\Search")
     *
     * @var Search $search
     */
    private $search;

    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\Pagination")
     *
     * @var Pagination $pagination
     */
    private $pagination;

    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\Facets")
     *
     * @var Facets $facets
     */
    private $facets;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingsCount
     */
    private $listingsCount;

    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\UrgencyCommitment")
     *
     * @var UrgencyCommitment $urgencyCommitment
     */
    private $urgencyCommitment;

    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\PriceHistogram")
     *
     * @var PriceHistogram $priceHistogram
     */
    private $priceHistogram;

    /**
     * @JMS\Type("array")
     *
     * @var array $searchFeedItems
     */
    private $searchFeedItems;

    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\AveragePricePerRoomType")
     *
     * @var AveragePricePerRoomType $avgPricePerRoomType
     */
    private $avgPricePerRoomType;

    /**
     * @return Geography
     */
    public function getGeography()
    {
        return $this->geography;
    }

    /**
     * @param Geography $geography
     */
    public function setGeography($geography)
    {
        $this->geography = $geography;
    }

    /**
     * @return Search
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param Search $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     */
    public function setPagination($pagination)
    {
        $this->pagination = $pagination;
    }

    /**
     * @return Facets
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * @param Facets $facets
     */
    public function setFacets($facets)
    {
        $this->facets = $facets;
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
     * @return UrgencyCommitment
     */
    public function getUrgencyCommitment()
    {
        return $this->urgencyCommitment;
    }

    /**
     * @param UrgencyCommitment $urgencyCommitment
     */
    public function setUrgencyCommitment($urgencyCommitment)
    {
        $this->urgencyCommitment = $urgencyCommitment;
    }

    /**
     * @return PriceHistogram
     */
    public function getPriceHistogram()
    {
        return $this->priceHistogram;
    }

    /**
     * @param PriceHistogram $priceHistogram
     */
    public function setPriceHistogram($priceHistogram)
    {
        $this->priceHistogram = $priceHistogram;
    }

    /**
     * @return array
     */
    public function getSearchFeedItems()
    {
        return $this->searchFeedItems;
    }

    /**
     * @param array $searchFeedItems
     */
    public function setSearchFeedItems($searchFeedItems)
    {
        $this->searchFeedItems = $searchFeedItems;
    }

    /**
     * @return AveragePricePerRoomType
     */
    public function getAvgPricePerRoomType()
    {
        return $this->avgPricePerRoomType;
    }

    /**
     * @param AveragePricePerRoomType $avgPricePerRoomType
     */
    public function setAvgPricePerRoomType($avgPricePerRoomType)
    {
        $this->avgPricePerRoomType = $avgPricePerRoomType;
    }
}
