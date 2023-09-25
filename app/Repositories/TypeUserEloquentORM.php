<?php

namespace App\Repositories;

use App\Repositories\TypeUserRepositoryInterface;
use stdClass;
use App\DTO\CreateTypeUserDTO;
use App\DTO\UpdateTypeUserDTO;
use App\Models\TypeUser;

class TypeUserEloquentORM implements TypeUserRepositoryInterface
{
    public function __construct(protected TypeUser $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->where(function($query) use ($filter) {
                        if ($filter) {
                            $query->where('type_user', $filter);
                        }
                    })
                    ->get()
                    ->toArray();
    }

    public function findOne(int $id): stdClass|null
    {
        $type_user = $this->model->find($id);

        if (!$type_user) {
            return null;
        }

        return (object) $type_user->toArray();
    }

    public function create(CreateTypeUserDTO $dto): stdClass
    {
        $type_user = $this->model->create((array) $dto);

        return (object) $type_user->toArray();
    }

    public function update(UpdateTypeUserDTO $dto): stdClass|null
    {
        $type_user = $this->model->find($dto->id);

        if (!$type_user) {
            return null;
        }

        $type_user->update((array) $dto);

        return (object) $type_user->toArray();
    }

    public function paginate(int $page = 1, int $totalPerPage = 4, string $filter = null): PaginationInterface
    {
        $result =  $this->model
                        ->where(function($query) use ($filter) {
                            if ($filter) {
                                $query->where('type_user', $filter);
                            }
                        })
                        ->paginate($totalPerPage, ['*'], 'page');

        return new PaginationPresenter($result);
    }
}
