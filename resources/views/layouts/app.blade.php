<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">
  <div class="container mx-auto px-4 py-8">
    <header class="text-center mb-8">
      <h1 class="text-4xl font-bold text-gray-800 mb-2">
        <a href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
      </h1>
      <p class="text-gray-600 mb-4">A modern web application ready for your next big idea</p>
      <div class="flex justify-center items-center space-x-4">
        <a href="https://blossom-cloud.com" target="_blank"
          class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
          <span>Deploy on Blossom</span>
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
          </svg>
        </a>
        <a href="{{ route('jokes.index') }}" class="text-gray-600 hover:text-gray-900 transition-colors">All Jokes</a>
      </div>
    </header>

    <main>
      @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
      <span class="block sm:inline">{{ session('success') }}</span>
      </div>
    @endif

      @yield('content')
    </main>
  </div>
</body>

</html>