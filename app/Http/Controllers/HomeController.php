<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Display the home page with a random joke.
   */
  public function index()
  {
    $joke = Joke::random();
    return view('home.index', compact('joke'));
  }
}