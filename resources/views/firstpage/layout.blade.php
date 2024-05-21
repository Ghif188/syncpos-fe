<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex h-screen">
    <div class=" bg-black flex justify-center items-center w-2/5">
        <img src="img/logo.png" class="" alt="">
    </div>
    <div class="flex justify-center text-xl py-10 items-center w-3/5 px-10">
        @yield('content')
    </div>
</body>
</html>