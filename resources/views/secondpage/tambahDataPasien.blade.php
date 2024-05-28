@extends('secondpage.layout')


@section('content')
    <div class="m-4">
        <div class="w-sceen flex flex-wrap justify-center">
            <div class="w-2/3 flex flex-wrap justify-center">
                <div class="w-full">
                    <div class="flex justify-between mb-3">  
                        <p class="text-3xl font-bold">TAMBAH PASIEN</p>
                        <a href={{route('navbar')}} class="bg-red-700 font-medium text-white h-min w-1/6 p-2 text-center color-white rounded-lg">Batal Tambah Pasien</a>
                    </div>
                    <div>
                        <form action="" method="post">   
                            <div class="p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                                <p class="mb-7 font-medium text-xl">Identitas Pasien</p>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">NIK</p>
                                    <input type="text" value="NIK" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Nama</p>
                                    <input type="text" value="Nama" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Status</p>
                                    <select name="status" id="" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                        <option value="balita">Balita</option>
                                        <option value="lansia">Lansia</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Jenis Kelamin</p>
                                    <select name="status" id="" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                        <option value="balita">Laki - Laki</option>
                                        <option value="lansia">Perempuan</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Tanggal Lahir</p>
                                    <input type="date" value="Tanggal Lahir" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Alamat</p>
                                    <input type="text" value="Alamat" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt-5 p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                        <div class="flex justify-between mb-5" >  
                            <p class="text-3xl font-bold">Pemeriksaan</p>
                        </div>
                        <div id="form-pemeriksaan" class="mb-5">
                            <form action="" method="post">      
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Umur</p>
                                    <input type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Berat Badan</p>
                                    <input type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Tinggi Badan</p>
                                    <input  type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Lingkar Kepala</p>
                                    <input  type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button id="btn-form-pemeriksaan" class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg">Simpan Pemeriksaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection