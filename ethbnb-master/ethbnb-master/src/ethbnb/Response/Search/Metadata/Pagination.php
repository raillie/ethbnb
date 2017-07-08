<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class Pagination
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $nextOffset
     */
    private $nextOffset;

    /**
     * @JMS\Type("integer")
     *
     * @var int $resultCount
     */
    private $resultCount;

    /**
     * @return int
     */
    public function getNextOffset()
    {
        return $this->nextOffset;
    }

    /**
     * @param int $nextOffset
     */
    public function setNextOffset($nextOffset)
    {
        $this->nextOffset = $nextOffset;
    }

    /**
     * @return int
     */
    public function getResultCount()
    {
        return $this->resultCount;
    }

    /**
     * @param int $resultCount
     */
    public function setResultCount($resultCount)
    {
        $this->resultCount = $resultCount;
    }
}
