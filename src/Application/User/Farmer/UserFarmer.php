<?php

namespace App\Application\User\Farmer;

use App\Domain\Seed\Interface\Seeder;
use App\Domain\User\Interface\UserFarmer as UserFarmerInterface;
use App\Domain\User\Model\User;
use App\Domain\User\ValueObject\Username;

class UserFarmer implements UserFarmerInterface
{
    public function __construct(
        private Seeder $randomNameSeeder,
    ) {
    }

    public function farm(): User
    {
        $name = $this->randomNameSeeder->getSeed();
        $username = new Username('aaaaa');

        return new User(
            $name,
            $username
        );
    }
}
