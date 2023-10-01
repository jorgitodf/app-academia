<?php

namespace App\Repositories;

use App\DTO\CreateUserDTO;
use stdClass;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserEloquentORM implements UserRepositoryInterface
{
    public function __construct(protected User $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->where(function($query) use ($filter) {
                        if ($filter) {
                            $query->where('name', $filter);
                        }
                    })
                    ->get()
                    ->toArray();
    }

    public function create(CreateUserDTO $dto): stdClass
    {
        $type_user = $this->model->create((array) $dto);

        return (object) $type_user->toArray();
    }

}
