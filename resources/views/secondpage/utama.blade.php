@extends('secondpage.layout')


@section('content')
    <div class="m-4">
        <a href="#" class="underline font-regular text-lg">Akses Kode API</a>
        <div class="w-sceen flex flex-wrap justify-center">
            <div class="w-2/3 flex flex-wrap justify-center">
                <div class="w-full">
                    <div class="flex justify-between mb-3">  
                        <p class="text-3xl font-bold">CARI NIK</p>
                        <button class="bg-green-500 font-medium text-white h-min w-1/6 p-2 text-center color-white rounded-lg">Tambah Pasien</button>
                    </div>
                    <div class="flex justify-between mb-10">
                        <input type="text" class="w-5/6 border-2 mr-3 p-1 rounded-lg">
                        <button class="bg-yellow-400 w-1/6 h-min p-2 text-center color-white rounded-lg">Cari</button>
                    </div>
                    <div>
                        <p class="text-3xl font-bold mb-3">Data Pasien</p>
                        <div class="p-5 bg-neutral-100 rounded-lg">
                            <p class="mb-7 font-medium text-xl">Identitas Pasien</p>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">NIK</p>
                                <input type="text" disabled value="NIK" class=" border-2 py-1 px-4 rounded-lg text-lg w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">NIK</p>
                                <input type="text" disabled value="NIK" class=" border-2 py-1 px-4 rounded-lg text-lg w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">NIK</p>
                                <input type="text" disabled value="NIK" class=" border-2 py-1 px-4 rounded-lg text-lg w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">NIK</p>
                                <input type="text" disabled value="NIK" class=" border-2 py-1 px-4 rounded-lg text-lg w-5/6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection