<?php

namespace ethbnb\API;

use AirbnbSDK\Request\Review\ListingReviewsRequest;
use ethbnb\Response\Review\ReviewsResponse;

class Reviews extends AbstractAPI
{
    const REVIEWS_RESPONSE_CLASS = ReviewsResponse::class;

    /**
     * @param ListingReviewsRequest $request
     * @return ReviewsResponse
     */
    public function allForListing(ListingReviewsRequest $request)
    {
        $parameters = $request->toArray();
        $reviewsResponse = $this->getRequest('reviews',
            self::REVIEWS_RESPONSE_CLASS, $parameters);
        return $reviewsResponse;
    }
}