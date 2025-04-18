@extends('layouts.app')

@section('content')
  <div class="w-full max-w-4xl mx-auto">
    <!-- Hero Section -->
    <div class="text-center mb-12 bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-lg shadow-sm">
    <h1 class="text-4xl font-bold text-gray-800 mb-2">Let Your Apps Blossom</h1>
    <p class="text-xl text-gray-600 mb-6 max-w-3xl mx-auto">Deploy any application to your own servers. Save time and
      money with Blossom's simple deployment platform.</p>
    <div class="flex justify-center gap-4 mb-6">
      <a href="https://docs.blossom-cloud.com"
      class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
      📖 Documentation
      </a>
      <a href="https://www.blossom-cloud.com/quickstarts"
      class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
      🚀 Quickstarts
      </a>
    </div>
    <a href="https://blossom-cloud.com" target="_blank"
      class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center">
      Learn more about Blossom
      <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
      </svg>
    </a>
    </div>

    <!-- Demo Section -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8">
    <h2 class="text-2xl font-semibold mb-4 text-center">Laravel Demo</h2>
    <p class="text-gray-600 mb-6 text-center">This simple <a href="https://laravel.com/" target="_blank"
      class="text-indigo-600 hover:text-indigo-800 font-medium">Laravel</a> app demonstrates how easy it is to deploy
      PHP applications on <a href="https://blossom-cloud.com" target="_blank"
      class="text-indigo-600 hover:text-indigo-800 font-medium">Blossom</a>.</p>

    <!-- Random Joke Section -->
    <h2 class="text-2xl font-semibold mb-6 text-center">Random Joke</h2>

    @if($joke)
    <div class="mb-6">
      <p class="text-lg text-gray-800 mb-4">{{ $joke->content }}</p>
      <p class="text-sm text-gray-500">By {{ $joke->author }}</p>
      <p class="text-xs text-gray-400 mt-1">Category: {{ $joke->category }}</p>
    </div>

    <div class="flex justify-center space-x-4">
      <a href="{{ route('jokes.random') }}"
      class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded transition-colors">Get Another
      Joke</a>
      <a href="{{ route('jokes.index') }}"
      class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded transition-colors">View All
      Jokes</a>
    </div>
  @else
  <p class="text-gray-600 mb-6">No jokes yet. Be the first to add one!</p>
  <a href="{{ route('jokes.create') }}"
    class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded transition-colors">Add a
    Joke</a>
@endif
    </div>

    <!-- Cost Savings Section -->
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
    <h2 class="text-2xl font-semibold mb-4">Discover Your Savings 💵</h2>
    <p class="text-gray-600 mb-6">See how much you can save with the cost calculator. Compare deployment costs and
      optimize your budget.</p>
    <a href="https://www.blossom-cloud.com/pricing/calculator"
      class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
      💰 Calculate Savings
    </a>
    </div>
  </div>
@endsection