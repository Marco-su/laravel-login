<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- tailwind css --}}
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  {{-- Title --}}
  <title>@yield('title')</title>
</head>

<body class="bg-blue-100 text-gray-900">
  <nav class="flex py-5 px-12 bg-gray-800 text-white">
    <div>
      <span class="text-2xl font-bold">My Login</span>
    </div>

    <ul class="ml-auto flex items-center">
      @if (auth()->check())
        <li class="mr-4">
          <p class="text-xl">
            Welcome
            <span class="font-semibold">{{ auth()->user()->name }}</span>
          </p>
        </li>
        <li class="mr-4">
          <a href="{{ route('login.destroy') }}" class="font-semibold hover:text-blue-200">Logout</a>
        </li>

      @else

        <li class="mr-4">
          <a href="{{ route('login.index') }}" class="font-semibold hover:text-blue-200">Login</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold hover:text-blue-200">Register</a>
        </li>
      @endif
    </ul>
  </nav>

  @yield('content')
</body>

</html>
