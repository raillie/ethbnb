<?php

namespace ethbnb\Response\Listing\Listing\Review;

use JMS\Serializer\Annotation as JMS;

class RecentReview
{
    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\Review\Review")
     *
     * @var Review $review
     */
    private $review;

    /**
     * @return Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param Review $review
     */
    public function setReview($review)
    {
        $this->review = $review;
    }
}
