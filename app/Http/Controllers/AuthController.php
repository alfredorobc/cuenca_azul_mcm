<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $rules = [
            'name' => 'required|min:1|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email'=>'required|email|unique:users|email|max:60',
            'password'=>'required|confirmed|min:6'
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ],400);
        }

        $user = User::create([
            'name' => $request->name,
            'username'=> $request->username,
            'email'=>strtolower($request->email),
            'password'=> Hash::make($request->password),
            'status' => 1
        ]);

        return response()->json([
            'status' => true,
            'message' => 'registro creado',
            'token' => $user->createToken('API TOKEN')->plainText
        ],200);

    }

    public function login(Request $request)
    {
        $rules = [
            'username' => 'required|min:3|max:20',
            'password'=>'required|string|min:6'
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ],400);
        }

        if(!Auth::attempt($request->only('username','password'))){
            return response()->json([
                'status' => false,
                'errors' => ['Unauthorized']
            ],401);
        }

        $user = User::where('username',$request->username)->first();

        return response()->json([
            'status' => true,
            'message' => 'Usuario logueado exitosamente',
            'data' => $user,
            'token' => $user->createToken('API TOKEN')->plainTextToken
        ],200);

    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Has cerrado sesión exitosamente.'
        ],200);
    }

}
