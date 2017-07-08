<?php

namespace ethbnb\Response\User;

use ethbnb\Response\ResponseInterface;
use AirbnbSDK\Response\User\User\User;
use JMS\Serializer\Annotation as JMS;

class UserResponse implements ResponseInterface
{
    /**
     * @JMS\Type("ethbnb\Response\User\User\User")
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
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}