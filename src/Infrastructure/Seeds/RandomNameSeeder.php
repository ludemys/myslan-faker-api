<?php

namespace App\Infrastructure\Seeds;

use App\Domain\Seed\Interface\Seeder;
use App\Domain\ValueObject\Exception\ValueObjectValidationException;
use App\Domain\ValueObject\ValueObject\Gender;
use App\Domain\ValueObject\ValueObject\Name;

class RandomNameSeeder implements Seeder
{
    private Name $seed;

    private function plant(): void
    {
        try {
            $seed = $this->pickRandomSeed();
            $gender = new Gender($seed['gender']);

            $this->seed = new Name(
                $seed['name'],
                $gender
            );
        } catch (ValueObjectValidationException) {}
    }

    public function getSeed(): Name
    {
        $this->plant();
        return $this->seed;
    }

    private function pickRandomSeed(): array
    {
        $raw = file_get_contents(__DIR__.'/NameSeeds.json');
        try {
            $allSeeds = json_decode($raw, true, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {}

        $randomKey = array_rand($allSeeds);
        return $allSeeds[$randomKey];
    }
}
