<?php

namespace App\Contracts;

use App\Contracts\RepositoryContract;
use App\Models\User;

class UserRepository implements RepositoryContract
{
    public function all()
    {
    }

    public function paginate($perPage = 10)
    {
    }

    public function find($id)
    {
    }

    public function create(array $data)
    {
    }

    public function update(array $data, $id)
    {
    }

    public function delete($id)
    {
    }

    public function findByUsername($username)
    {
        return User::where('username', 'LIKE', $username . '%')->get();
    }
}
