@extends('secondpage.layout')


@section('content')
    <div class="m-4">
        <a href={{route('akses-api')}} class="underline font-regular text-lg">Akses Kode API</a>
        <div class="w-sceen flex flex-wrap justify-center">
            <div class="w-2/3 flex flex-wrap justify-center">
                <div class="w-full">
                    <div class="flex justify-between mb-3">  
                        <p class="text-3xl font-bold">CARI NIK</p>
                        <a href={{route('tambah-pasien-view')}} class="bg-green-500 font-medium text-white h-min w-1/6 p-2 text-center color-white rounded-lg">Tambah Pasien</a>
                    </div>
                    <form action="{{ route('cari-nik') }}" method="GET">
                        @csrf
                        <div class="flex justify-between mb-10">
                            <input name="nik" type="text" class="w-5/6 border-2 mr-3 p-1 rounded-lg">
                            <button type="submit" class="bg-yellow-400 w-1/6 h-min p-2 text-center color-white rounded-lg">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection