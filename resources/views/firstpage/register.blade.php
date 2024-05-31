<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex h-full">
    <div class=" bg-black flex justify-center items-center w-2/5">
        <img src="img/logo.png" class="" alt="">
    </div>
    <div class="flex justify-center py-10 items-center w-3/5  px-10">
        <div class="w-4/5">
            <p class="font-bold text-3xl">Daftarkan akun SYNCPOS untuk</p>
            <p class="font-bold text-3xl mb-10">posyandu Anda</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <p>Nama Fasyankes</p>
                <input name="nama_fasyankes" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Alamat</p>
                <input name="alamat" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Provinsi</p>
                <input name="provinsi" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Kabupaten</p>
                <input name="kabupaten" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Kecamatan</p>
                <input name="kecamatan" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Kelurahan</p>
                <input name="kelurahan" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Nomor Telepon</p>
                <div class="flex mb-3">
                    <div class="px-3 flex items-center bg-slate-300 rounded-md mr-3"> +62</div>
                    <input name="no_telp" class="w-full border-2 rounded-lg p-1" type="number">
                </div>
                <p>Email</p>
                <input name="email" class="w-full border-2 mb-3 rounded-lg p-1" type="text">
                <p>Kata Sandi</p>
                <input name="password" class="w-full border-2 mb-3 rounded-lg p-1" type="password">
                <p>Konfirmasi Kata Sandi</p>
                <input name="passwordConfirm" class="w-full border-2 mb-3 rounded-lg p-1" type="password">
                <button type="submit">
                    <div class="text bg-yellow-400 text-center p-2 text-lg mt-3 rounded-xl">Register</div>
                </button>
            </form>
        </div>
    </div>
</body>
</html>