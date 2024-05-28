<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables library -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- Include DataTables CSS (optional) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
    
<nav class="bg-white border-gray-200 shadow-cyan-300 shadow-lg">
    <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-5 bg-black">
      <a href="#" class="flex items-center space-x-3">
          <img src="img/logo.png" class="h-11" alt="Logo" />
      </a>
      <div class="w-full md:w-auto">
        <div class="flex flex-wrap items-center gap-2">
          <a href="#" class="flex items-center space-x-3">
            <img src="img/user_icon.png" class="h-9" alt="Logo" />
          </a>
          <div class="font-regular text-xl flex flex-col text-white p-4 md:p-0 mt-4 md:mt-0">
            <h2>Posyandu KarangGayam 2</h2>
          </div>
        </div>
      </div>
    </div>
</nav>

@yield('content')
</body>
</html>