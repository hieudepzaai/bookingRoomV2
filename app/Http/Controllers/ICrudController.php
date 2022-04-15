<?php

namespace App\Http\Controllers;

interface ICrudController
{
    public function GetById($id);
    public function GetAll();
    public function Create();
    public function Delete($id);
    public function Update($id);
}
