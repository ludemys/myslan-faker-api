<?php

namespace App\Domain\User\ValueObject;

use App\Domain\ValueObject\Exception\ValueObjectValidationException;
use App\Domain\ValueObject\Interface\ValueObject;

readonly class Username implements ValueObject
{
    /**
     * @throws ValueObjectValidationException
     */
    public function __construct(
        private string $value,
    ) {
        $this->ensureThatIsValid();
    }

    public function ensureThatIsValid(): void
    {
        if (!is_string($this->value)) {
            throw new ValueObjectValidationException();
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
