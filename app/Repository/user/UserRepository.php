<?php

namespace App\Repository\user;

use App\Models\User;
use App\Repository\CrudRepositoryInterface;

class UserRepository implements CrudRepositoryInterface
{

    public function create($data): \Illuminate\Database\Eloquent\Model|User
    {
//        $this->model->create()
        return User::create($data);

    }

    public function get($id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|array|User|null
    {
        return User::find($id);
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }

    public function delete($id): int
    {
        return User::destroy($id);
    }

    public function update($id,  $data): bool
    {
        return User::find($id)->update($data);
    }

    public function paginate($per_page)
    {
        // TODO: Implement paginate() method.
    }
}
