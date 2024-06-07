<?php

namespace App\Domain\ValueObject\ValueObject;

use App\Domain\ValueObject\Exception\ValueObjectValidationException;
use App\Domain\ValueObject\Interface\ValueObject;

readonly class Name implements ValueObject
{
    /**
     * @throws ValueObjectValidationException
     */
    public function __construct(
        private string $value,
        private Gender $gender,
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

    public function getGender(): Gender
    {
        return $this->gender;
    }
}
