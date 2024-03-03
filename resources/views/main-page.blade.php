<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield( 'page_title', 'Main Page' )</title>
  @vite('resources/css/app.css')
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,500;1,600&family=Rubik+Broken+Fax&display=swap" rel="stylesheet">

  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            /* background: rgb(11,1,35);
            background: linear-gradient(82deg, rgba(11,1,35,1) 0%, rgba(36,3,33,1) 69%); */
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex flex-col justify-center items-center">
    @if(Request::is('main'))
    <div class="flex flex-col items-start justify-evenly h-3/5 w-full bg-white p-8 max-w-md  rounded-lg shadow-md">
            <h2 class="text-5xl font-bold mb-4">Hi, my {{$name}}</h2>
            <h3 class="text-2xl font-semibold mt-2">This is your safe place, my love. Rant here freely (≧∇≦)/</h3>
      
        <div>
            <h1 class="text-xl font-semibold text-black">Made by Paul ∩(·ω·)∩</h1>
        </div>
        <div>
            <button class="w-96 h-12 bg-black rounded-md">
                <a href="main-view" class="text-gray-300">Click here to start</a>
            </button>
        </div>
    </div>
    @endif

    <!-- Content -->
    <div class="flex-1 flex items-center justify-center h-96 w-full">
        @yield('content')
    </div>
  </body>
</html>