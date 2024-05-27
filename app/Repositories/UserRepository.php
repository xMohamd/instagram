<?php

namespace App\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\User;

class UserRepository implements RepositoryContract
{
    public function all()
    {
        throw new \Exception('Method not implemented');
    }

    public function paginate($perPage = 10)
    {
        throw new \Exception('Method not implemented');
    }

    public function find($id)
    {
        throw new \Exception('Method not implemented');
    }

    public function create(array $data)
    {
        throw new \Exception('Method not implemented');
    }

    public function update(array $data, $id)
    {
        throw new \Exception('Method not implemented');
    }

    public function delete($id)
    {
        throw new \Exception('Method not implemented');
    }

    public function findByUsername($username)
    {
        return User::where('username', 'LIKE', $username . '%')->get();
    }
}
