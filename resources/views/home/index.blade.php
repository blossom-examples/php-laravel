@extends('layouts.app')

@section('content')
  <div class="w-full max-w-4xl mx-auto text-center">
    <header class="mb-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">PHP Laravel Demo</h1>
    <p class="text-xl text-gray-600 mb-4">A modern web application ready for your next big idea</p>
    <a href="https://blossom-cloud.com" target="_blank"
      class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
      <span>Deploy on Blossom</span>
      <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
      </svg>
    </a>
    </header>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
    <!-- Quick Start Card -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4">Quick Start</h2>
      <div class="text-left space-y-4">
      <p class="text-gray-600">Your Laravel application includes:</p>
      <ul class="list-disc list-inside space-y-2 text-gray-600">
        <li>Modern Tailwind CSS styling</li>
        <li>Blade templating engine</li>
        <li>Eloquent ORM</li>
        <li>Ready for production deployment</li>
      </ul>
      </div>
    </div>

    <!-- Resources Card -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4">Next Steps</h2>
      <div class="text-left space-y-4">
      <p class="text-gray-600">Helpful resources to get started:</p>
      <ul class="list-disc list-inside space-y-2 text-gray-600">
        <li><a href="https://laravel.com/docs" target="_blank" class="text-blue-600 hover:text-blue-800">Laravel
          Documentation</a></li>
        <li><a href="https://tailwindcss.com" target="_blank" class="text-blue-600 hover:text-blue-800">Tailwind CSS
          Docs</a></li>
        <li><a href="https://laravel.com/api" target="_blank" class="text-blue-600 hover:text-blue-800">Laravel
          API</a></li>
        <li><a href="https://laracasts.com" target="_blank" class="text-blue-600 hover:text-blue-800">Laracasts</a>
        </li>
      </ul>
      </div>
    </div>
    </div>

    <!-- Random Joke Section -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8">
    <h2 class="text-2xl font-semibold mb-6">Random Joke</h2>

    @if($joke)
    <div class="mb-6">
      <p class="text-lg text-gray-800 mb-4">{{ $joke->content }}</p>
      <p class="text-sm text-gray-500">By {{ $joke->author }}</p>
      <p class="text-xs text-gray-400 mt-1">Category: {{ $joke->category }}</p>
    </div>

    <div class="flex justify-center space-x-4">
      <a href="{{ route('jokes.random') }}"
      class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition-colors">Get Another
      Joke</a>
      <a href="{{ route('jokes.index') }}"
      class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded transition-colors">View All
      Jokes</a>
    </div>
  @else
  <p class="text-gray-600 mb-6">No jokes yet. Be the first to add one!</p>
  <a href="{{ route('jokes.create') }}"
    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition-colors">Add a Joke</a>
@endif
    </div>
  </div>
@endsection