@extends('secondpage.layout')


@section('content')
    <div class="m-4">
        <div class="w-sceen flex flex-wrap justify-center">
            <div class="w-2/3 flex flex-wrap justify-center">
                <div class="w-full">
                    @if ($errors->any())
                    <div class="p-4 bg-red-300 my-2 rounded-xl">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="flex justify-between mb-3">  
                        <p class="text-3xl font-bold">TAMBAH PASIEN</p>
                        <a href={{route('dashboard')}} class="bg-red-700 font-medium text-white h-min w-1/6 p-2 text-center color-white rounded-lg">Batal Tambah Pasien</a>
                    </div>
                    <form action="{{ route('tambah-pasien') }}" method="post">   
                        @csrf
                        <div>
                            <div class="p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                                <p class="mb-7 font-medium text-xl">Identitas Pasien</p>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">NIK</p>
                                    <input required name="NIK" type="text" placeholder="NIK" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Nama</p>
                                    <input required name="nama" type="text" placeholder="nama" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Status</p>
                                    <select required name="status" id="status" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                        <option value="" disabled selected>pilih</option>
                                        <option value="balita">Balita</option>
                                        <option value="lansia">Lansia</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Jenis Kelamin</p>
                                    <select required name="jenis_kelamin" id="" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                        <option value="" disabled selected>pilih</option>
                                        <option value="l">Laki - Laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Tanggal Lahir</p>
                                    <input required name="tanggal_lahir" type="date" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Alamat</p>
                                    <input required name="alamat" type="text" placeholder="Alamat" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                            <div class="flex justify-between mb-5" >  
                                <p class="text-3xl font-bold">Pemeriksaan</p>
                            </div>
                            <div id="form-pemeriksaan" class="mb-5">
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Berat Badan</p>
                                    <input required name="berat_badan" type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div class="flex items-center justify-between mb-5">
                                    <p class=" text-gray-400 ">Tinggi Badan</p>
                                    <input required name="tinggi_badan" type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                </div>
                                <div id="balita-fields" class="hidden">
                                    <div class="flex items-center justify-between mb-5">
                                        <p class=" text-gray-400 ">Lingkar Kepala</p>
                                        <input name="lingkar_kepala" type="number" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                                    </div>
                                </div>
                                <div id="lansia-fields" class="hidden">
                                    <div class="flex items-center justify-between mb-5">
                                        <p class="text-gray-400">Tekanan Darah</p>
                                        <input name="tekanan_darah" type="text" class="border-2 py-1 px-4 rounded-lg w-5/6">
                                    </div>
                                    <div class="flex items-center justify-between mb-5">
                                        <p class="text-gray-400">Denyut Nadi</p>
                                        <input name="denyut_nadi" type="text" class="border-2 py-1 px-4 rounded-lg w-5/6">
                                    </div>
                                    <div class="flex items-center justify-between mb-5">
                                        <p class="text-gray-400">Assesmen</p>
                                        <input name="assesment" type="text" class="border-2 py-1 px-4 rounded-lg w-5/6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button type="submit" id="btn-form-pemeriksaan" class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg">Simpan Pemeriksaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#status').change(function(){
            var status = $(this).val();
            if (status == 'balita') {
                $('#balita-fields').removeClass('hidden').find('input').attr('required', true);
                $('#lansia-fields').addClass('hidden').find('input').attr('required', false);
            } else if (status == 'lansia') {
                $('#lansia-fields').removeClass('hidden').find('input').attr('required', true);
                $('#balita-fields').addClass('hidden').find('input').attr('required', false);
            }
        })
    </script>
@endsection