<?php

namespace App\Http\Controllers\BackEnd\address;

use App\Http\Controllers\Controller;
use App\Repository\address\district\DistrictRepositoryInterface;
use function view;

class DistrictController extends Controller
{
    //
    protected $repo;
    public function __construct(DistrictRepositoryInterface $districtRepository)
    {
        $this->repo = $districtRepository;
    }
    public function index(){
        return view('backend.layout.mainLayout');
    }
    public function getAll() {
        return $this->repo->getAll();

    }
    public function getById($id) {
        return $this->repo->get($id);
    }
    public function getDistrictByProvinceId($id) {
        return $this->repo->getDistrictByProvinceId($id);
    }
}
