@extends('firstpage.layout')
@section('content')
<div class="w-4/5">
    <p class="font-bold text-3xl">Daftarkan akun SYNCPOS untuk</p>
    <p class="font-bold text-3xl mb-10">posyandu Anda</p>
    <form action="">
        <p>Nama Posyandu</p>
        <input class="w-full" type="text">
        <p>Alamat Posyandu</p>
        <input class="w-full" type="text">
        <p>Lokasi</p>
        <input class="w-full" type="text">
        <p>Provinsi</p>
        <input class="w-full" type="text">
        <p>Kabupaten</p>
        <input class="w-full" type="text">
        <p>Kecamatan</p>
        <input class="w-full" type="text">
        <p>Kelurahan</p>
        <input class="w-full" type="text">
        <p>Nomor Telepon</p>
        <div class="flex">
            <p class=" h-full px-5 bg-slate-300 rounded-md mr-5">+62</p>
            <input class="w-full" type="text">
        </div>
        <p>Email</p>
        <input class="w-full" type="text">
        <p>Kata Sandi</p>
        <input class="w-full" type="password">
        <p>Konfirmasi Kata Sandi</p>
        <input class="w-full" type="text">
        <a href="">
            <div class="text bg-yellow-400 text-center p-2 text-lg mt-3 rounded-xl">Masuk</div>
        </a>
    </form>
</div>
@endsection