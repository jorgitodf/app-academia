<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateUser;

class CreateAdressDTO
{
    public function __construct(
        public int $public_place_id,
        public string $description,
        public string $complement,
        public string $number,
        public string $zip_code,
        public string $neighborhood,
        public string $citie,
        public string $state
    ) {}

    public static function makeFromRequest(StoreUpdateUser $request): self
    {
        return new self(
            $request->public_place_id,
            $request->description,
            $request->complement,
            $request->number,
            $request->zip_code,
            $request->neighborhood,
            $request->citie,
            $request->state
        );
    }
}
