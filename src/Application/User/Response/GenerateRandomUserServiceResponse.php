<?php

namespace App\Application\User\Response;

use App\Domain\User\Model\User;

readonly class GenerateRandomUserServiceResponse implements \JsonSerializable
{
    public function __construct(
        private User $user,
    ) {
    }


    public function jsonSerialize(): array
    {
        return [
            'name' => $this->user->getName()->getValue(),
            'username' => $this->user->getUsername()->getValue(),
        ];
    }
}