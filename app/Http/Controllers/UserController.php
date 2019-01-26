<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function showForm(){
        return view("user");
    }

    public function saveUser(Request $request){
        $this->userRepository->saveUser($request);
    }
}
