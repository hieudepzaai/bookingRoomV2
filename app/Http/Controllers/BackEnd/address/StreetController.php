<?php

namespace App\Http\Controllers\BackEnd\address;

use App\Http\Controllers\Controller;
use App\Repository\address\street\StreetRepositoryInterface;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    protected $repo;
    public function __construct(StreetRepositoryInterface $streetRepository)
    {
        $this->repo = $streetRepository;
    }
    public function getStreetByName(Request $request) {
        return $this->repo->getStreetByName($request->name);
    }
}
