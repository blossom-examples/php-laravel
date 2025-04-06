<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'content',
    'author',
    'category',
  ];

  /**
   * Get a random joke.
   *
   * @return \App\Models\Joke|null
   */
  public static function random()
  {
    return static::inRandomOrder()->first();
  }
}