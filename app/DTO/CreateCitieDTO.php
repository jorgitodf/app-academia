<?php

namespace App\DTO;

class CreateCitieDTO
{
    public function __construct(
        public string $name,
        public int $state_id
    ) {}

    public static function makeFromRequest(array $request): self
    {
        return new self(
            $request['name'],
            $request['state_id']
        );
    }
}
