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
                        <div class="p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                            <p class="mb-7 font-medium text-xl">Identitas Pasien</p>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">NIK</p>
                                <input type="text" disabled value="NIK" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Nama</p>
                                <input type="text" disabled value="Nama" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Status</p>
                                <input type="text" disabled value="Status" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Jenis Kelamin</p>
                                <input type="text" disabled value="Jenis Kelamin" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Tanggal Lahir</p>
                                <input type="date" disabled value="Tanggal Lahir" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <p class=" text-gray-400 ">Alamat</p>
                                <input type="text" disabled value="Alamat" class=" border-2 py-1 px-4 rounded-lg  w-5/6">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 p-5 bg-neutral-100 rounded-lg border-2 border-neutral-200">
                        <div class="flex justify-between mb-5">  
                            <p class="text-3xl font-bold">Pemeriksaan</p>
                            <button class="bg-green-500 font-medium text-white h-min p-2 text-center color-white rounded-lg">Tambah Pemeriksaan</button>
                        </div>
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012-03-29</td>
                                    <td>$433,060</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#example").DataTable();
    </script>
@endsection