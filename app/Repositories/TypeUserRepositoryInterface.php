<?php

namespace App\Repositories;

use App\DTO\CreateTypeUserDTO;
use App\DTO\UpdateTypeUserDTO;
use stdClass;

interface TypeUserRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function findOne(int $id): stdClass|null;
    public function create(CreateTypeUserDTO $dto): stdClass;
    public function update(UpdateTypeUserDTO $dto): stdClass|null;
}
