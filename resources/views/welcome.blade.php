<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body class="bg-gray-100 h-screen flex justify-center items-center bg-gray-300">
    <div class="flex flex-col items-center justify-center h-96 bg-white p-8 rounded-lg shadow-md max-w-md w-full">
      <h2 class="text-2xl font-bold mb-4">Who Are You?</h2>
      <form method="POST" action="{{ route('check-name' )}}">
        @csrf
        <div class="mb-4 w-96">
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Please Your Name">
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-black text-gray-300 px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300 w-72">Start</button>
          </div>
      </form>

      <div class="mt-10">
        @if(@isset($message))
          <p class="text-black text-xl font-semibold">{{$message}}</p>
        @endif
      </div>
    </div>
  </body>
</html>