<?php

namespace ethbnb\API;

use ethbnb\Request\User\UserRequest;
use ethbnb\Response\User\UserResponse;

class Users extends AbstractAPI
{
    const USER_RESPONSE_CLASS = UserResponse::class;

    /**
     * @param UserRequest $request
     * @return UserResponse
     */
    public function view(UserRequest $request)
    {
        $parameters = $request->toArray();
        $userResponse = $this->getRequest('users/' . $request->getUserId(),
            self::USER_RESPONSE_CLASS, $parameters);
        return $userResponse;
    }
}
