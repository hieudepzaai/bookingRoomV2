<?php

namespace App\Repository\address\district;

use App\Repository\CrudRepositoryInterface;

interface DistrictRepositoryInterface
{
    public function create($data);
    public function get($id);
    public function getAll();
    public function getDistrictByProvinceId($id);
}
