@extends('firstpage.layout')
@section('content')
<div>
    <p class="font-bold text-3xl mb-10">Selamat datang di portal SYNCPOS</p>
    <p>Portal integrasi rekam medis posyandu</p>
    <p>Pertama kali? Daftarkan akun posyandu terlebih dahulu!</p>
    <a href="{{route('register')}}">
        <div class="text border-yellow-400 text-center text-lg p-2 mt-10 border-2 rounded-xl">Buat Akun</div>
    </a>
    <a href="">
        <div class="text bg-yellow-400 text-center p-2 text-lg mt-3 rounded-xl">Masuk</div>
    </a>
    <a href="">
        <div class="mt-3 text-right text-base">lupa kata sandi</div>
    </a>
</div>
@endsection