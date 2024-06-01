<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Dashboard extends Controller
{
    public function index(){
        return view('secondpage.cariNik');
    }

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

    public function tambahPasienView(){
        return view('secondpage.tambahDataPasien');
    }

    public function tambahPasien(Request $request){
        $request->validate([
            'NIK' => 'required|min:16|max:16',
            'nama' => 'required|max:255',
            'status' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
        ]);

        // dd($request);

        $auth = Session::get('auth');
        $responsePasien = Http::withToken($auth['token'])->post(config('services.api.url').'patient', [
            'nik' => $request->NIK,
            'nama' => $request->nama,
            'status' => $request->status,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat
        ]);
        // dd($responsePasien->json());

        // Check if the response was successful
        if ($responsePasien->successful()) {
            // dd($request);
            $responsePasien;
            if($request->status == 'balita'){
                $request->validate([
                    'lingkar_kepala' => 'required'
                ]);
                $responseCheckup = Http::withToken($auth['token'])->post(config('services.api.url').'checkup/balita', [
                    'berat_badan' => (int) $request->berat_badan,
                    'tinggi_badan' => (int) $request->tinggi_badan,
                    'lingkar_kepala' => (int) $request->lingkar_kepala,
                    'nik' => $request->NIK
                ]);
            } else {
                $request->validate([
                    'tekanan_darah' => 'required',
                    'denyut_nadi' => 'required',
                    'assesment' => 'required'
                ]);
                $responseCheckup = Http::withToken($auth['token'])->post(config('services.api.url').'checkup/lansia', [
                    'berat_badan' => (int) $request->berat_badan,
                    'tinggi_badan' => (int) $request->tinggi_badan,
                    'tekanan_darah' => $request->tekanan_darah,
                    'denyut_nadi' => $request->denyut_nadi,
                    'assesment' => $request->assesment,
                    'nik' => $request->NIK
                ]);
            }
            // dd($responseCheckup->json());
            if ($responseCheckup->successful()) {
                return redirect()->route('cari-nik', ['nik' => $request->NIK])->with('message', 'Successfully Registered');
            } else {
                return redirect()->back()->withErrors(['message' => 'Creating Checkup Failed']);
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'Creating Pasien Failed']);
        }
    }

    public function checkupBalita(Request $request){
        $request->validate([
            'nik' => 'required|min:16|max:16',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'lingkar_kepala' => 'required|numeric'
        ]);

        $auth = Session::get('auth');
        $response = Http::withToken($auth['token'])->post(config('services.api.url').'checkup/balita', [
            'berat_badan' => (int) $request->berat_badan,
            'tinggi_badan' => (int) $request->tinggi_badan,
            'lingkar_kepala' => (int) $request->lingkar_kepala,
            'nik' => $request->nik
        ]);

        if ($response->successful()) {
            return redirect()->route('cari-nik', ['nik' => $request->nik])->with('message', 'Successfully Checkup');
        } else {
            return redirect()->back()->withErrors(['message' => 'Creating Checkup Failed']);
        }
    }

    public function checkupLansia(Request $request){
        $request->validate([
            'nik' => 'required|min:16|max:16',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'tekanan_darah' => 'required',
            'denyut_nadi' => 'required',
            'assesment' => 'required'
        ]);

        $auth = Session::get('auth');
        $response = Http::withToken($auth['token'])->post(config('services.api.url').'checkup/lansia', [
            'berat_badan' => (int) $request->berat_badan,
            'tinggi_badan' => (int) $request->tinggi_badan,
            'tekanan_darah' => $request->tekanan_darah,
            'denyut_nadi' => $request->denyut_nadi,
            'assesment' => $request->assesment,
            'nik' => $request->nik
        ]);

        if ($response->successful()) {
            return redirect()->route('cari-nik', ['nik' => $request->nik])->with('message', 'Successfully Checkup');
        } else {
            return redirect()->back()->withErrors(['message' => 'Creating Checkup Failed']);
        }
    }
}
