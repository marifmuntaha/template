<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')){
            try {
                $validator = Validator::make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required'
                ], [
                    'email.required' => 'Kolom email tidak boleh kosong.',
                    'email.email' => 'Email tidak valid, harap periksa kembali',
                    'password.required' => 'Kolom password tidak boleh kosong'
                ]);
                if ($validator->fails()){
                    throw new \Exception(Arr::first(Arr::flatten($validator->getMessageBag()->get('*'))));
                }
                else {
                    $credentials = ['email' => $request->email, 'password' => $request->password];
                    if (Auth::attempt($credentials, $request->remember)) {
                        $result = ["version" => 1, "message" => 'Berhasil masuk, anda akan dialihkan dalam 2 detik.',"success" => true,"results" => [
                            'redirect' => route('home'),
                            'timeout' => 2000
                        ]];
                    }
                    else {
                        throw new \Exception('Email Pengguna dan Kata Sandi Tidak Tepat!');
                    }
                }
            }
            catch (\Exception $e){
                $result = ["version" => 1, "message" => $e->getMessage(),"success" => false,"results" => null];
            }
            return response()->json($result);
        }
        else {
            return view('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
