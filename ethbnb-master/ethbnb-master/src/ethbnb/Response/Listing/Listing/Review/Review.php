<?php

namespace ethbnb\Response\Listing\Listing\Review;

use JMS\Serializer\Annotation as JMS;

class Review
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $id
     */
    private $id;

    /**
     * @JMS\Type("string")
     *
     * @var string $comments
     */
    private $comments;

    /**
     * @JMS\Type("string")
     *
     * @var string $createdAt
     */
    private $createdAt;

    /**
     * @JMS\Type("integer")
     *
     * @var int $listingId
     */
    private $listingId;

    /**
     * @JMS\Type("integer")
     *
     * @var int $revieweeId
     */
    private $revieweeId;

    /**
     * @JMS\Type("integer")
     *
     * @var int $reviewerId
     */
    private $reviewerId;

    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\Review\Reviewer")
     *
     * @var User $reviewer
     */
    private $reviewer;

    /**
     * @JMS\Type("string")
     *
     * @var string $role
     */
    private $role;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getReviewerId()
    {
        return $this->reviewerId;
    }

    /**
     * @param int $reviewerId
     */
    public function setReviewerId($reviewerId)
    {
        $this->reviewerId = $reviewerId;
    }

    /**
     * @return User
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * @param User $reviewer
     */
    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getListingId()
    {
        return $this->listingId;
    }

    /**
     * @param int $listingId
     */
    public function setListingId($listingId)
    {
        $this->listingId = $listingId;
    }

    /**
     * @return int
     */
    public function getRevieweeId()
    {
        return $this->revieweeId;
    }

    /**
     * @param int $revieweeId
     */
    public function setRevieweeId($revieweeId)
    {
        $this->revieweeId = $revieweeId;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
}
