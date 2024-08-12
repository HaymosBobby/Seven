<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        //
        $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid login credentiials.'], 400);
        }

        $token = $user->createToken('user')->plainTextToken;
        return response()->json(['message' => 'Login successful', 'data' => compact('user', 'token')], 200);
    }
}
