<?php

namespace ethbnb\Response\Review;

use AirbnbSDK\Response\Listing\ListingResponse;
use ethbnb\Response\ResponseInterface;
use ethbnb\Response\Review\Listing\Listing;
use ethbnb\Response\Review\User\User;
use JMS\Serializer\Annotation as JMS;

class ReviewResponse implements ResponseInterface
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $id
     */
    private $id;

    /**
     * @JMS\Type("integer")
     *
     * @var int $authorId
     */
    private $authorId;

    /**
     * @JMS\Type("ethbnb\Response\Review\User\User")
     *
     * @var User $author
     */
    private $author;

    /**
     * @JMS\Type("integer")
     *
     * @var int $recipientId
     */
    private $recipientId;

    /**
     * @JMS\Type("ethbnb\Response\Review\User\User")
     *
     * @var User $recipient
     */
    private $recipient;

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
     * @JMS\Type("A\Response\Review\Listing\Listing")
     *
     * @var Listing $listing
     */
    private $listing;

    /**
     * @JMS\Type("string")
     *
     * @var string $response
     */
    private $response;

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
     * @return int
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return int
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param int $recipientId
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    /**
     * @return User
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param User $recipient
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
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
     * @return ListingResponse
     */
    public function getListing()
    {
        return $this->listing;
    }

    /**
     * @param ListingResponse $listing
     */
    public function setListing($listing)
    {
        $this->listing = $listing;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param string $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
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
}
