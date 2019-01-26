<?php
/**
 * Created by PhpStorm.
 * User: Katarina
 * Date: 1/26/2019
 * Time: 6:13 PM
 */
namespace App\Repository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    private function validateData(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'balance' => 'required|numeric',
            'password' => 'required|alpha_num|min:6'
        ]);
    }

    public function messages()
    {
        return [
            'email.email' => 'Email must be a valid email address.',
            'email.unique'  => 'This email is already taken.',
            'password.min'=>'Password must contain at least 6 characters.',
        ];
    }

    public function saveUser(Request $request){
        $this->validateData($request);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'balance'=>$request['balance'],
            'password' => Hash::make($request['password'])
        ]);
        return $user;
    }
}