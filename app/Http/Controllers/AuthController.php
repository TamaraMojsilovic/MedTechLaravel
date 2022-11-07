<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $korisnik = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json(['Korisnik je registrovan.' => $korisnik]);
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $korisnik = User::where('email', $request->email)->first();

        if (!$korisnik || !Hash::check($request->password, $korisnik->password)) {
            return response()->json('Pokušajte ponovo.');
        } else {
            $token = $korisnik->createToken('TokenLogin')->plainTextToken;

            return response()->json([
                'Korisnik: ' => $korisnik,
                'Token: ' => $token
            ]);
        }
    }



    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json('Korisnik je odjavljen.');
    }
}
