<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class JokesController extends Controller
{
  /**
   * Display a listing of the jokes.
   */
  public function index()
  {
    $jokes = Joke::latest()->get();
    return view('jokes.index', compact('jokes'));
  }

  /**
   * Display the specified joke.
   */
  public function show(Joke $joke)
  {
    return view('jokes.show', compact('joke'));
  }

  /**
   * Show the form for creating a new joke.
   */
  public function create()
  {
    return view('jokes.create');
  }

  /**
   * Store a newly created joke in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'content' => 'required|min:10|max:500',
      'author' => 'required|min:2|max:100',
      'category' => 'required|in:general,dad jokes,knock-knock,one-liners,puns',
    ]);

    Joke::create($validated);

    return redirect()->route('jokes.index')
      ->with('success', 'Joke was successfully created.');
  }

  /**
   * Show the form for editing the specified joke.
   */
  public function edit(Joke $joke)
  {
    return view('jokes.edit', compact('joke'));
  }

  /**
   * Update the specified joke in storage.
   */
  public function update(Request $request, Joke $joke)
  {
    $validated = $request->validate([
      'content' => 'required|min:10|max:500',
      'author' => 'required|min:2|max:100',
      'category' => 'required|in:general,dad jokes,knock-knock,one-liners,puns',
    ]);

    $joke->update($validated);

    return redirect()->route('jokes.index')
      ->with('success', 'Joke was successfully updated.');
  }

  /**
   * Remove the specified joke from storage.
   */
  public function destroy(Joke $joke)
  {
    $joke->delete();

    return redirect()->route('jokes.index')
      ->with('success', 'Joke was successfully deleted.');
  }

  /**
   * Display a random joke.
   */
  public function random()
  {
    $joke = Joke::random();
    return view('jokes.show', compact('joke'));
  }
}