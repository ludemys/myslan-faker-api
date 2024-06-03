<?php

namespace App\Domain\User\Model;

use App\Domain\User\ValueObject\Username;
use App\Domain\ValueObject\ValueObject\Name;

class User
{
    public function __construct(
        private readonly Name $name,
        private readonly Username $username,
    ) {
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function getUsername(): Username
    {
        return $this->username;
    }
}
