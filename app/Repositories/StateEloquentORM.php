<?php

namespace App\Repositories;

use App\Models\State;
use App\Repositories\StateRepositoryInterface;


class StateEloquentORM implements StateRepositoryInterface

{
    public function __construct(protected State $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->all()
                    ->toArray();
    }
}
