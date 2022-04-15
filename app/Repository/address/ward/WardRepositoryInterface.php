<?php

namespace App\Repository\address\ward;

interface WardRepositoryInterface
{
    public function getById($id);
    public function getWardByDistrictId($id);

}
