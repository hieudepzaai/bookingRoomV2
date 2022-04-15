<?php

namespace App\Repository\address\street;

use App\Models\Street;

class StreetRepository implements  StreetRepositoryInterface
{
    protected $model;
    public function __construct(Street $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }


    public function getStreetByName($name)
    {
//        return $this->model->where('name' , 'like' , $name.'%')->limit(20)->get();
        return $this->model->select(['id','name'])->whereRaw("MATCH(name) AGAINST( ? IN BOOLEAN MODE)" ,$name)->limit(100)->get();


    }
}
