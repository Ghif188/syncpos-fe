<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class AksesApiController extends Controller
{
    public function index(){
        $auth = Session::get('auth');
        $response = Http::withToken($auth['token'])->get(config('services.api.url').'data-integrasi');
        return view('secondpage.aksesAPI',[
            'response'=>$response
        ]);
    }
}
