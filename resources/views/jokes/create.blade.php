@extends('layouts.app')

@section('content')
  <div class="w-full max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Add New Joke</h1>

    <div class="bg-white rounded-lg shadow-md p-6">
    <form action="{{ route('jokes.store') }}" method="POST">
      @csrf

      @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
      <h2 class="font-bold">{{ $errors->count() }} {{ Str::plural('error', $errors->count()) }} prohibited this joke
      from being saved:</h2>
      <ul class="list-disc list-inside">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>
      </div>
    @endif

      <div class="mb-4">
      <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Joke Content</label>
      <textarea name="content" id="content" rows="5"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('content') }}</textarea>
      </div>

      <div class="mb-4">
      <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
      <input type="text" name="author" id="author" value="{{ old('author') }}"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="mb-6">
      <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
      <select name="category" id="category"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option value="general" {{ old('category') == 'general' ? 'selected' : '' }}>General</option>
        <option value="dad jokes" {{ old('category') == 'dad jokes' ? 'selected' : '' }}>Dad Jokes</option>
        <option value="knock-knock" {{ old('category') == 'knock-knock' ? 'selected' : '' }}>Knock-Knock</option>
        <option value="one-liners" {{ old('category') == 'one-liners' ? 'selected' : '' }}>One-Liners</option>
        <option value="puns" {{ old('category') == 'puns' ? 'selected' : '' }}>Puns</option>
      </select>
      </div>

      <div class="flex items-center justify-between">
      <button type="submit"
        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
        Joke</button>
      <a href="{{ route('jokes.index') }}" class="text-blue-500 hover:text-blue-700">Back to Jokes</a>
      </div>
    </form>
    </div>
  </div>
@endsection