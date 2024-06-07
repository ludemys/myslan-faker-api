<?php

declare(strict_types=1);

namespace App\Domain\User\Interface;

use App\Domain\User\Model\User;

interface UserFarmer
{
    public function farm(): User;
}