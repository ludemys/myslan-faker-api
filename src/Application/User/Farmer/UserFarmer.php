<?php

namespace App\Application\User\Farmer;

use App\Application\User\Generator\UsernameFromNameGenerator;
use App\Domain\Seed\Interface\Seeder;
use App\Domain\User\Interface\UserFarmer as UserFarmerInterface;
use App\Domain\User\Model\User;
use App\Domain\User\ValueObject\Username;

class UserFarmer implements UserFarmerInterface
{
    public function __construct(
        private Seeder $randomNameSeeder,
        private UsernameFromNameGenerator $usernameFromNameGenerator,
    ) {
    }

    public function farm(): User
    {
        $name = $this->randomNameSeeder->getSeed();
        $username = $this->usernameFromNameGenerator->generateUsernameFromName($name);

        return new User(
            $name,
            $username
        );
    }
}
