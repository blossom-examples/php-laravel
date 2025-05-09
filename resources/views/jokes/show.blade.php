@extends('layouts.app')

@section('content')
  <div class="w-full max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-md p-8 mb-8">
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">Random Joke</h1>
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
    </div>

    <div class="text-center">
    <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700">Back to Home</a>
    </div>
  </div>
@endsection