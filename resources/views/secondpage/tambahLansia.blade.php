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
                    <div>
                        <p class="text-3xl font-bold mb-3">Data Pasien</p>
                        <div class="p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                            <p class="mb-7 font-medium text-xl">Identitas Pasien</p>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">NIK</p>
                                <input value="{{ $pasien['nik'] }}" type="text" disabled value="NIK" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Nama</p>
                                <input value="{{ $pasien['nama'] }}" type="text" disabled value="Nama" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Status</p>
                                <input value="{{ $pasien['status'] }}" type="text" disabled value="Status" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Jenis Kelamin</p>
                                <input value="{{ $pasien['jenis_kelamin'] }}" type="text" disabled value="Jenis Kelamin" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Tanggal Lahir</p>
                                <input value="{{ $pasien['tanggal_lahir'] }}" type="date" disabled value="Tanggal Lahir" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Alamat</p>
                                <input value="{{ $pasien['alamat'] }}" type="text" disabled value="Alamat" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                        <div class="flex justify-between mb-5" >  
                            <p class="text-3xl font-bold">Pemeriksaan</p>
                            <button id="btn-form-pemeriksaan" class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg" onclick="tampilForm()">Tambah Pemeriksaan</button>
                        </div>
                        <div id="form-pemeriksaan" class="hidden mb-5">
                            <form action="">
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Berat Badan</p>
                                    <input type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Tinggi Badan</p>
                                    <input  type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class="text-gray-400">Tekanan Darah</p>
                                    <input name="tekanan_darah" type="number" class="border-2 py-1 px-4 rounded-lg w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class="text-gray-400">Denyut Nadi</p>
                                    <input name="denyut_nadi" type="number" class="border-2 py-1 px-4 rounded-lg w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class="text-gray-400">Assesmen</p>
                                    <input name="assesment" type="text" class="border-2 py-1 px-4 rounded-lg w-5/6">
                                </div>
                                <div class="flex justify-end">
                                    <button id="btn-form-pemeriksaan" class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg">Simpan Pemeriksaan</button>
                                </div>
                            </form>
                        </div>
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Pemeriksaan</th>
                                    <th>Fasyankes</th>
                                    <th>Umur</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Tekanan Darah</th>
                                    <th>Denyut Nadi</th>
                                    <th>Assesmen</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($dataCheckup as $data)
                                <tr>
                                    <td>{{ Carbon\Carbon::parse($data['createdAt'])->format('d-m-Y') }}</td>
                                    <td>{{ $data['fasyankes_id'] }}</td>
                                    <td>{{ $data['umur'] ." Bulan" }}</td>
                                    <td>{{ $data['berat_badan'] }}</td>
                                    <td>{{ $data['tinggi_badan'] }}</td>
                                    <td>{{ $data['tekanan_darah'] }}</td>
                                    <td>{{ $data['denyut_nadi'] }}</td>
                                    <td>{{ $data['assesment'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
            var form = document.getElementById("form-pemeriksaan");

            if (btnText == "Tambah Pemeriksaan") {
                form.classList.remove("hidden");
                form.classList.add("block");

                btn.classList.remove("bg-green-500");
                btn.classList.add("bg-red-700");
                document.getElementById("btn-form-pemeriksaan").innerText = "X"
            } else {
                form.classList.remove("block");
                form.classList.add("hidden");

                btn.classList.remove("bg-red-700");
                btn.classList.add("bg-green-500");
                document.getElementById("btn-form-pemeriksaan").innerText = "Tambah Pemeriksaan"
            }
        }
    </script>
@endsection