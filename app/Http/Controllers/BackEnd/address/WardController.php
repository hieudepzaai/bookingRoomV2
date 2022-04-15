<?php

namespace App\Http\Controllers\BackEnd\address;

use App\Http\Controllers\Controller;
use App\Repository\address\ward\WardRepositoryInterface;

class WardController extends Controller
{
    //
    protected  $repo;
    public function __construct(WardRepositoryInterface $repository)
    {
        $this->repo = $repository;
    }
    public function getById($id){
        return $this->repo->getById($id);
    }
    public function getWardByDistrictId($id) {
        return $this->repo->getWardByDistrictId($id);
    }
}
