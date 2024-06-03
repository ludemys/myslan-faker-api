<?php

namespace App\Application\User\Service;
use App\Application\User\Response\GenerateRandomUserServiceResponse;
use App\Domain\User\Model\User;
use App\Domain\User\ValueObject\Username;
use App\Domain\ValueObject\ValueObject\Name;

class GenerateRandomUserService
{
    public function generate(): GenerateRandomUserServiceResponse
    {
        $user = new User(
            new Name('Lionel Andrés'),
            new Username('Messi Cuccittini'),
        );
        return new GenerateRandomUserServiceResponse($user);
    }
}