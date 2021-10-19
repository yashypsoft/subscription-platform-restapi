<?php

namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    protected  $model;

    public function __construct(Model  $model)
    {
        $this->model = $model;
    }

    public function all(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->get($columns);
    }

    public function allTrashed(array $columns = ['*'], array $relations = []): Collection{
        return $this->model->allTrashed($relations)->get($columns);
    }

    public function paginate($parPage = 15, array $relations = [],$column = ['*']): Paginator{
        return $this->model::paginate($parPage,$column);
    }

    public function findBy($field, $value, array $columns = ['*']){

    }

    public function findById(int $modelId, array $columns = ['*']){

    }

    public function findTrashedById(int $modelId, array $columns = ['*']){

    }

    public function update(int $modelId, array $payload = []){

    }

    public function deleteById(int $modelId){

    }

    public function permanentlyDeleteById(int $modelId){

    }

    public function restoreById(int $modelId){
        
    }
    
}
