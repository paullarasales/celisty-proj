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
    <div class="flex flex-col items-center justify-evenly h-3/5 w-full bg-white p-8 max-w-md  rounded-lg shadow-md">
      <h1 class="text-3xl font-bold">Celisty's Rants</h1>
      @if ($rant->isEmpty())
        <div class="flex items-center justify-center flex-col">
          <p class="text-2xl font-semibold tracking-wide">There is no rant from Celisty</p>
          <img style="height: 300px; width: 300px;"src="{{ 'images/cat-sleeping.gif '}}" alt="">
        </div>
      @else
        @foreach ($rant as $rants)
          <div>
            <h1>{{$rants->title}}</h1>
          </div>
        @endforeach
      @endif
    </div>
  </body>
</html>