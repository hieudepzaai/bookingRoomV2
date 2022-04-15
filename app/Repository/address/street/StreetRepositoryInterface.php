<?php

namespace App\Repository\address\street;

interface StreetRepositoryInterface
{
    public function getById($id);
    public function getStreetByName($name);

}
