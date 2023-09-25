<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateTypeUser;

class CreateTypeUserDTO
{
    public function __construct(public string $type)
    {}

    public static function makeFromRequest(StoreUpdateTypeUser $request): self
    {
        return new self($request->type);
    }
}
