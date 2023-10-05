<?php

namespace App\Repositories;

use App\DTO\CreateCitieDTO;
use stdClass;
use App\Models\Citie;
use App\Repositories\CitieRepositoryInterface;

class CitieEloquentORM implements CitieRepositoryInterface
{
    public function __construct(protected Citie $model)
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

    public function create(CreateCitieDTO $dto): stdClass
    {
        $type_user = $this->model->create((array) $dto);

        return (object) $type_user->toArray();
    }

    public function findOne(string $name, int $state_id): stdClass|null
    {
        $citie = $this->model
                        ->where('name', '=', $name)
                        ->where('state_id', '=', $state_id)
                        ->first();

        if (!$citie) {
            return null;
        }

        return (object) $citie->toArray();
    }


}
