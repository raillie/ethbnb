<?php

namespace ethbnb\Response\Search;

use ethbnb\Response\ResponseInterface;
use ethbnb\Response\Search\Metadata\Metadata;
use ethbnb\Response\Search\SearchResults\SearchResult;
use JMS\Serializer\Annotation as JMS;

class SearchResponse implements ResponseInterface
{
    /**
     * @JMS\Type("ethbnb\Response\Search\Metadata\Metadata")
     *
     * @var Metadata $metadata
     */
    private $metadata;

    /**
     * @JMS\Type("array<ethbnb\Response\Search\SearchResults\SearchResult>")
     *
     * @var SearchResult[] $searchResults
     */
    private $searchResults;

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
     * @return SearchResult
     */
    public function getSearchResults()
    {
        return $this->searchResults;
    }

    /**
     * @param SearchResult $searchResults
     */
    public function setSearchResults($searchResults)
    {
        $this->searchResults = $searchResults;
    }
}
