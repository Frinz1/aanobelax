<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

use function Laravel\Prompts\confirm;

class AuthController extends Controller
{   
    public function get(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(['user' => $user], 200);
    }

    public function register(Request $request)
    {
        $data =   $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
            
        ]);

        $token = $user->createToken('sanctum-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        
        return response($response, 201);
    }   
    public function login(Request $request)
    {
        $data =   $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $data['email'])->first();
        
        if(!$user || !Hash::check($data['password'], $user->password))
        {
            return response([
                "message" => "Bad Credentials"
            ], 401);
        };

        $token = $user->createToken('sanctum-token')->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 200);
    }
    
 
}