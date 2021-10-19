<?php

namespace App\Repository;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;

interface EloquentRepositoryInterface
{
    public function all(array $columns = ['*'], array $relations = []): Collection;

    public function allTrashed(array $columns = ['*'], array $relations = []): Collection;

    public function paginate($parPage = 15, array $relations = []): Paginator;

    public function findBy($field, $value, array $columns = ['*']);

    public function findById(int $modelId, array $columns = ['*']);

    public function findTrashedById(int $modelId, array $columns = ['*']);

    public function update(int $modelId, array $payload = []);

    public function deleteById(int $modelId);

    public function permanentlyDeleteById(int $modelId);

    public function restoreById(int $modelId);
}
