<?php

namespace App\Repository\address\province;

interface ProvinceRepositoryInterface
{
//    public function create($data);
    public function getById($id);
    public function getAll();
    public function getByName($name);
}
