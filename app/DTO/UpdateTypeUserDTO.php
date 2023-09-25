<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateTypeUser;

class UpdateTypeUserDTO
{
    public function __construct(public int $id, public string $type)
    {}

    public static function makeFromRequest(StoreUpdateTypeUser $request): self
    {
        return new self($request->id, $request->type);
    }
}
