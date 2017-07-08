<?php

namespace ethbnb\Response\Review\Metadata;

use JMS\Serializer\Annotation as JMS;

class Metadata
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewsCount
     */
    private $reviewsCount;

    /**
     * @return int
     */
    public function getReviewsCount()
    {
        return $this->reviewsCount;
    }

    /**
     * @param int $reviewsCount
     */
    public function setReviewsCount($reviewsCount)
    {
        $this->reviewsCount = $reviewsCount;
    }
}
