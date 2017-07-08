<?php

namespace ethbnb\Response\Listing\Listing\Review;

use JMS\Serializer\Annotation as JMS;

class Reviewer
{
    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\Review\User")
     *
     * @var User $user
     */
    private $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
