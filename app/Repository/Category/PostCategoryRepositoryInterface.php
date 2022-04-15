<?php

namespace App\Repository\Category;

interface PostCategoryRepositoryInterface
{
    public function getById($id);
    public function getAll();
    public function create($data);
    public function delete($id);
}
