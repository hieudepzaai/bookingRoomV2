<?php

namespace App\Repository\address\district;

use App\Models\District;
use Illuminate\Database\Eloquent\Model;

class DistrictRepository implements DistrictRepositoryInterface
{

    protected $model;
    public function __construct(District $model)
    {
        $this->model =  $model;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getAll()
    {
        return $this->model->limit(20)->get();
    }


    public function getDistrictByProvinceId($id)
    {

//        return $this->model->whereProvinceId( $id)->get();
        return cache()->remember('districts-cache-'.$id, 60*60*24 , function () use ($id) {
            return $this->model->whereProvinceId( $id)->get();
        });

    }
}
