@extends('layouts.app')

@section('content')
  <div class="w-full max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Jokes Collection</h1>
    <a href="{{ route('jokes.create') }}"
      class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition-colors">Add New Joke</a>
    </div>

    @if($jokes->count() > 0)
    <div class="grid gap-6">
    @foreach($jokes as $joke)
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex justify-between items-start">
      <div>
      <p class="text-lg text-gray-800 mb-2">{{ $joke->content }}</p>
      <p class="text-sm text-gray-500">By {{ $joke->author }}</p>
      <p class="text-xs text-gray-400 mt-1">Category: {{ $joke->category }}</p>
      </div>
      <div class="flex space-x-2">
      <a href="{{ route('jokes.show', $joke) }}" class="text-blue-500 hover:text-blue-700">View</a>
      <a href="{{ route('jokes.edit', $joke) }}" class="text-green-500 hover:text-green-700">Edit</a>
      <form action="{{ route('jokes.destroy', $joke) }}" method="POST" class="inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="text-red-500 hover:text-red-700"
      onclick="return confirm('Are you sure?')">Delete</button>
      </form>
      </div>
      </div>
    </div>
  @endforeach
    </div>
  @else
  <div class="bg-white rounded-lg shadow-md p-6 text-center">
  <p class="text-gray-600">No jokes yet. Be the first to add one!</p>
  </div>
@endif

    <div class="mt-8 text-center">
    <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700">Back to Home</a>
    </div>
  </div>
@endsection