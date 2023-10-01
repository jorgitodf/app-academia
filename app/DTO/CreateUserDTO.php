<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateUser;

class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $birth_date,
        public string $profession,
        public string $cpf,
        public string $gender,
        public string $photo,
        public string $email,
        public string $password,
        public int $type_user_id
    ) {}

    public static function makeFromRequest(StoreUpdateUser $request): self
    {
        return new self(
            $request->name,
            $request->birth_date,
            $request->profession,
            $request->cpf,
            $request->gender,
            $request->photo,
            $request->email,
            $request->password,
            $request->type_user_id
        );
    }
}
