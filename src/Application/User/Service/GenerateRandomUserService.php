<?php

namespace App\Application\User\Service;

use App\Application\User\Farmer\UserFarmer;
use App\Application\User\Response\GenerateRandomUserServiceResponse;

class GenerateRandomUserService
{
    public function __construct(
        private UserFarmer $userFarmer,
    ) {
    }

    public function generate(): GenerateRandomUserServiceResponse
    {
        $user = $this->userFarmer->farm();

        return new GenerateRandomUserServiceResponse($user);
    }
}
