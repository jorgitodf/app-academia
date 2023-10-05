<?php

namespace App\Repositories;

use App\DTO\CreateNeighborhoodDTO;
use stdClass;
use App\Models\Neighborhood;
use App\Repositories\NeighborhoodRepositoryInterface;

class NeighborhoodEloquentORM implements NeighborhoodRepositoryInterface
{
    public function __construct(protected Neighborhood $model)
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

    public function create(CreateNeighborhoodDTO $dto): stdClass
    {
        $type_user = $this->model->create((array) $dto);

        return (object) $type_user->toArray();
    }

    public function findOne(string $neighborhood, int $citie_id): stdClass|null
    {
        $citie = $this->model
                        ->where('neighborhood', '=', $neighborhood)
                        ->where('citie_id', '=', $citie_id)
                        ->first();

        if (!$citie) {
            return null;
        }

        return (object) $citie->toArray();
    }


}
