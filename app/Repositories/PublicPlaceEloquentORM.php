<?php

namespace App\Repositories;

use App\Models\PublicPlace;
use App\Repositories\PublicPlaceRepositoryInterface;

class PublicPlaceEloquentORM implements PublicPlaceRepositoryInterface

{
    public function __construct(protected PublicPlace $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->all()
                    ->toArray();
    }

}
