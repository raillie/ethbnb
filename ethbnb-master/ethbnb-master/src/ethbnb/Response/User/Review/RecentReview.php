<?php

namespace ethbnb\Response\User\Review;

use JMS\Serializer\Annotation as JMS;

class RecentReview
{
    /**
     * @JMS\Type("ethbnb\Response\User\Review\Review")
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
