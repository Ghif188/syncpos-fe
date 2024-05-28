@extends('firstpage.layout')
@section('content')
<div class="text-base w-4/5">
    <p class="font-bold text-3xl mb-10">Masuk ke portal SYNCPOS</p>
    <form action="" method="POST">
        <p>Email</p>
        <input class="w-full border-2 mb-3 rounded-lg p-1" type="email">
        <div class="flex justify-between">
            <div class="">Kata Sandi</div>
            <a href="">
                <div class="text-yellow-400 ">
                    Lupa kata sandi?
                </div>
            </a>
        </div>
        <input class="w-full border-2 mb-3 rounded-lg p-1" type="password">
        <a href="">
            <div class="text bg-yellow-400 text-center p-2 text-lg mt-3 rounded-xl">Masuk</div>
        </a>
    </form>
    <div class=" flex justify-center mt-3">
        <p>Belum punya akun?</p>
        <a href="{{route('register')}}">
            <div class="text-base text-yellow-400 ml-1">Daftar</div>
        </a>
    </div>
</div>
@endsection