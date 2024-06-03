<?php

namespace App\Domain\ValueObject\Interface;

use App\Domain\ValueObject\Exception\ValueObjectValidationException;

interface ValueObject
{
    /**
     * @throws ValueObjectValidationException
     */
    public function ensureThatIsValid(): void;
}
