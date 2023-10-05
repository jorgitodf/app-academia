<?php

namespace App\Repositories;

use App\DTO\CreateCitieDTO;
use stdClass;

interface CitieRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function create(CreateCitieDTO $dto): stdClass;
    public function findOne(string $name, int $state_id): stdClass|null;
}
