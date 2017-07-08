<?php

namespace ethbnb\Response\Listing\Listing;

use ethbnb\Response\Listing\Listing\User\User as ChildUser;
use JMS\Serializer\Annotation as JMS;

class User
{
    /**
     * @JMS\Type("ethbnb\Response\Listing\Listing\User\User")
     *
     * @var ChildUser $user
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