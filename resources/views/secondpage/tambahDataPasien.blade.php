@extends('secondpage.layout')


@section('content')
    <div class="m-4">
        <div class="w-sceen flex flex-wrap justify-center">
            <div class="w-2/3 flex flex-wrap justify-center">
                <div class="w-full">
                    <div class="flex justify-between mb-3">  
                        <p class="text-3xl font-bold">CARI NIK</p>
                        <button class="bg-red-700 font-medium text-white h-min w-1/6 p-2 text-center color-white rounded-lg">Batal Tambah Pasien</button>
                    </div>
                    <div>
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
                    </div>
                    <div class="mt-5 p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                        <div class="flex justify-between mb-5" >  
                            <p class="text-3xl font-bold">Pemeriksaan</p>
                            <button id="btn-form-pemeriksaan" class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg" onclick="tampilForm()">Tambah Pemeriksaan</button>
                        </div>
                        <div id="form-pemeriksaan" class="mb-5">
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
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button id="btn-form-pemeriksaan" class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg">Simpan Pemeriksaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#example").DataTable();
        function tampilForm() {
            var btn = document.getElementById("btn-form-pemeriksaan");
            let btnText = btn.innerText;
            var form = document.getElementById("form-pemeriksaan");+
            if (btnText == "Tambah Pemeriksaan") {
                form.classList.remove("hidden");
                form.classList.add("block");

                btn.classList.remove("bg-green-500");
                btn.classList.add("bg-red-700");
                btnText = "Batalkan X"
            } else {
                form.classList.remove("block");
                form.classList.add("hidden");

                btn.classList.remove("bg-red-700");
                btn.classList.add("bg-green-500");
                btnText = "Tambah Pemeriksaan"
            }
        }
    </script>
@endsection