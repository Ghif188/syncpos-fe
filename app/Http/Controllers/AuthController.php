<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index(){
        return view('firstpage.welcome');
    }

    public function loginView(){
        return view('firstpage.login');
    }

    public function registerView(){
        return view('firstpage.register');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $response = Http::post(config('services.api.url').'fasyankes/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Check if the response was successful
        if ($response->successful()) {
            Session::put('auth', $response->json());

            return redirect('/dashboard');
        } else {
            // Handle the error, for example, by returning an error message
            return redirect()->back()->withErrors(['message' => 'Login failed. Please check your credentials and try again.']);
        }
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'nama_fasyankes' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'no_telp' => 'required',
        ]);

        $response = Http::post(config('services.api.url').'fasyankes/register', [
            'email' => $request->email,
            'password' => $request->password,
            'nama_fasyankes' => $request->nama_fasyankes,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'no_telp' => $request->no_telp
        ]);

        // Check if the response was successful
        if ($response->successful()) {
            return redirect('/login')->with('message', 'Sucessfully Register');
        } else {
            // Handle the error, for example, by returning an error message
            return redirect()->back()->withErrors(['message' => 'Login failed. Please check your credentials and try again.']);
        }
    }
}
