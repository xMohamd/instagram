<?php

namespace App\Http\Controllers\API;

use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function __construct(private UserRepository $userRepository)
    {
    }

    public function findByUsername($username)
    {
        return response()->json($this->userRepository->findByUsername($username));
    }
}
