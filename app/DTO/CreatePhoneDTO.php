<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateUser;

class CreatePhoneDTO
{
    public function __construct(
        public string $fixed,
        public string $mobile,
        public string $user_id
    ) {}

    public static function makeFromRequest(StoreUpdateUser $request): self
    {
        return new self(
            $request->fixed,
            $request->mobile,
            $request->user_id
        );
    }
}
