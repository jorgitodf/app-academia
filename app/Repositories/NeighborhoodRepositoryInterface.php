<?php

namespace App\Repositories;

use App\DTO\CreateNeighborhoodDTO;
use stdClass;

interface NeighborhoodRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function create(CreateNeighborhoodDTO $dto): stdClass;
    public function findOne(string $neighborhood, int $citie_id): stdClass|null;
}
