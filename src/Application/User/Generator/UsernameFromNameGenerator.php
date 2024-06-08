<?php

namespace App\Application\User\Generator;

use App\Domain\User\ValueObject\Username;
use App\Domain\ValueObject\ValueObject\Name;

class UsernameFromNameGenerator
{
    public function generateUsernameFromName(Name $name): Username
    {
        $nameLength = strlen($name->getValue());
        $username = $this->getUsername($name, $nameLength);

        return new Username($username);
    }

    public function getUsername(Name $name, int $nameLength): string
    {
        $nameSplitInHalf = str_split($name->getValue(), ($nameLength / 2) + 1);
        $randomNumber = rand(100, 999);

        return implode('_', $nameSplitInHalf).'_'.$randomNumber;
    }
}
