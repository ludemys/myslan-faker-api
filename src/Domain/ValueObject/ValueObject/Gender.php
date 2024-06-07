<?php

namespace App\Domain\ValueObject\ValueObject;

use App\Domain\ValueObject\Interface\ValueObject;

class Gender implements ValueObject
{
    private const GENDERS = [
        'male',
        'female',
    ];

    public function __construct(
        private string $value,
    ) {
        $this->ensureThatIsValid();
    }

    public function ensureThatIsValid(): void
    {
        // TODO: Implement ensureThatIsValid() method.
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
