@extends('secondpage.layout')

@section('content')
    <div class="flex justify-center m-4 mt-10">
        <p class="font-semibold text-3xl">Akses Kode API</p>
    </div>

    <div class="flex justify-center items-center">
        <div class="flex">
            {{-- link link --}}
            <div class="mx-auto flex justify-center items-center max-w-md ">
                <div class="container mx-auto bg-neutral-100 rounded-lg border-2 border-neutral-200 p-4">
                    <div class="p-4 flex items-center justify-between">
                        <div>
                            <h6>Organization ID</h6>
                            <p class="text-xl text-black underline">{{ session('auth')['data']['id'] }}</p>
                        </div>
                        <button id="copyButton" class="flex items-center text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 ml-4">
                            <img src="img/copy_icon.png" alt="copy icon">
                        </button>
                    </div>
                
                    <div class="p-4 flex items-center justify-between mt-4">
                        <div>
                            <h6>API Key</h6>
                            <div class="relative">
                                <a href="https://www.google.com/" class="text-xl text-black underline block overflow-x-auto whitespace-nowrap">{{ substr(session('auth')['token'], 0, 30) . '...' }}</a>
                            </div>
                        </div>
                        <button id="copyButton2" class="flex items-center text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 ml-4">
                            <img src="img/copy_icon.png" alt="copy icon">
                        </button>
                    </div>
                </div>
            </div>
            
            
            {{-- buat gambar --}}
            <div class="w-1/2 p-4">
                <img src="img/aksesAPI.png" alt="Deskripsi Gambar" class="w-full h-auto">
            </div>
        </div>
    </div>

    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            const link = document.querySelector('a').href;
            navigator.clipboard.writeText(link).then(() => {
                alert('Link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });

        document.getElementById('copyButton2').addEventListener('click', function() {
            const link = document.querySelector('a').href;
            navigator.clipboard.writeText(link).then(() => {
                alert('Link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    </script>

@endsection