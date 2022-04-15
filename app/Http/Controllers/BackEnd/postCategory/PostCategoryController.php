<?php

namespace App\Http\Controllers\BackEnd\postCategory;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Repository\Category\PostCategoryRepositoryInterface;

class PostCategoryController extends Controller
{
    protected $repo;
    public function __construct(PostCategoryRepositoryInterface $repository)
    {
        $this->repo = $repository;
    }
    public function getAll() {
        return $this->repo->getAll();
    }

}
