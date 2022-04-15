<?php

namespace App\Repository\Category;

use App\Models\PostCategory;

class PostCategoryRepository implements PostCategoryRepositoryInterface
{
    protected $model;
    public function __construct(PostCategory $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function delete($id)
    {
        return $this->model->delete($id);
    }
}
