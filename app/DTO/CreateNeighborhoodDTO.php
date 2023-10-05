<?php

namespace App\DTO;

class CreateNeighborhoodDTO
{
    public function __construct(
        public string $neighborhood,
        public int $citie_id
    ) {}

    public static function makeFromRequest(array $request): self
    {
        return new self(
            $request['neighborhood'],
            $request['citie_id']
        );
    }
}
