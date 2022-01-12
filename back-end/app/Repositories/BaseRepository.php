<?php

namespace App\Repositories;


abstract class BaseRepository
{
    protected $model;

    protected function __construct(Object $model)
    {
        $this->model = $model;
    }

    public function all($pages): Object
    {
       return $this->model->paginate($pages['per_page']);
    }

    public function find($id): Object
    {
        return $this->model->find($id);
    }

    public function save(array $attributes): Object
    {
        return $this->model->create($attributes);
    }

    public function update(Object $item, array $attributes): bool
    {
        return $item->update($attributes);
    }

    public function delete($item)
    {
        $item->delete();
    }
}
