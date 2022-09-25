<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserOAuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OAuthController extends Controller
{
    //register user
    public function register(UserOAuthRequest $request)
    {
        $params = $request->validated();
        $user = User::create($this->hashPassword($params));
        return response()->json(['date' => $this->generateToken($user)]);
    }

    //login user
    public function login(UserOAuthRequest $request)
    {
        $params = $request->validated();
        if (!auth()->attempt($params)) {
            return response()->json(['error' => 'User Not Fount!']);
        }
        return response()->json(['date' => $this->generateToken(auth()->user())]);
    }

    //Hashing password
    public function hashPassword(array $password, string $column = null)
    {
        $password[$column ?? 'password'] = Hash::make($password[$column ?? 'password']);
        return  $password;
    }

    //Genrate token
    public function generateToken(object $item)
    {
        return $item->createToken('token')->accessToken;
    }
}
