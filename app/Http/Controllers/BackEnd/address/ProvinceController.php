<?php

namespace App\Http\Controllers\BackEnd\address;

use App\Http\Controllers\Controller;
use App\Repository\address\province\ProvinceRepository;
use App\Repository\address\province\ProvinceRepositoryInterface;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    //
    protected $repo;
    public function __construct(ProvinceRepositoryInterface $provinceRepository)
    {
        $this->repo = $provinceRepository;
    }
    public function getAll() {
        return $this->repo->getAll();
    }
    public function getByName(Request $request) {
        return $this->repo->getByName($request->name);
    }

}
