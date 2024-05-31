<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Dashboard extends Controller
{
    public function cariNik(Request $request){
        $auth = Session::get('auth');
        $response = Http::withToken($auth['token'])->get(config('services.api.url').'patient/'.$request->nik.'/checkup');
        $responseJson = $response->json();
        // dd($responseJson);
        if($responseJson['data']['status']=="balita"){
            return view('secondPage.tambahBalita', [
                "pasien"=>$responseJson['data'],
                "dataCheckup"=>$responseJson['data']['BalitaPemeriksaans'],
            ]);
        } else {
            return view('secondPage.tambahLansia', [
                "pasien"=>$responseJson['data'],
                "dataCheckup"=>$responseJson['data']['LansiaPemeriksaans'],
            ]);
        }
    }
}
