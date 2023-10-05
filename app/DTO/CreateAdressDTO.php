<?php

namespace App\DTO;


class CreateAdressDTO
{
    public function __construct(
        public int $public_place_id,
        public string $description,
        public string $complement,
        public string $number,
        public string $zip_code,
        public int $user_id,
        public int $neighborhood_id
    ) {}

    public static function makeFromRequest(array $request): self
    {
        return new self(
            $request['public_place_id'],
            $request['description'],
            $request['complement'],
            $request['number'],
            $request['zip_code'],
            $request['user_id'],
            $request['neighborhood_id']
        );
    }
}
