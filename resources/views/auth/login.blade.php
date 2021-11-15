@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div>
    <h1 class="text-5xl text-center pt-24 mb-5">Login</h1>

    <form action="" method="POST" class="mt-4 flex flex-col items-center">
      @csrf

      <input type="email" placeholder="Email" name="email" id="email" class="rounded mb-2 py-1 px-4" />

      <input type="password" placeholder="Password" name="password" id="password" class="rounded mb-2 py-1 px-4" />

      @error('message')
        <p class="text-red-600 my-2 text-sm">* {{ $message }}</p>
      @enderror

      <button type="submit" class="rounded py-1 px-4 bg-gray-800 text-white hover:bg-gray-700">Send</button>
    </form>
  </div>
@endsection
