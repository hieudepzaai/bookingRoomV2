<?php

namespace App\Repository;

interface CrudRepositoryInterface
{

    public function create($data);
    public function get($id);
    public function getAll();
    public function delete($id);
    public function update($id ,  $data);
    public function paginate($per_page );

}
