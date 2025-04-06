<?php

namespace Database\Seeders;

use App\Models\Joke;
use Illuminate\Database\Seeder;

class JokeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Skip if we already have jokes
    if (Joke::count() > 0) {
      return;
    }

    $jokes = [
      [
        'content' => 'Why don\'t scientists trust atoms? Because they make up everything!',
        'author' => 'Science Enthusiast',
        'category' => 'puns',
      ],
      [
        'content' => 'What do you call a fake noodle? An impasta!',
        'author' => 'Pasta Lover',
        'category' => 'puns',
      ],
      [
        'content' => 'Why did the scarecrow win an award? Because he was outstanding in his field!',
        'author' => 'Farm Humor',
        'category' => 'dad jokes',
      ],
      [
        'content' => 'What do you call a bear with no teeth? A gummy bear!',
        'author' => 'Wildlife Joker',
        'category' => 'dad jokes',
      ],
      [
        'content' => 'Knock, knock. Who\'s there? Lettuce. Lettuce who? Lettuce in, it\'s cold out here!',
        'author' => 'Vegetable Fan',
        'category' => 'knock-knock',
      ],
      [
        'content' => 'I\'m reading a book on anti-gravity. It\'s impossible to put down!',
        'author' => 'Physics Buff',
        'category' => 'one-liners',
      ],
      [
        'content' => 'I used to play piano by ear, but now I use my hands.',
        'author' => 'Music Enthusiast',
        'category' => 'one-liners',
      ],
      [
        'content' => 'Why don\'t eggs tell jokes? They\'d crack up!',
        'author' => 'Breakfast Club',
        'category' => 'dad jokes',
      ],
      [
        'content' => 'What do you call a bear with no teeth and no fur? A gummy bear!',
        'author' => 'Wildlife Joker',
        'category' => 'dad jokes',
      ],
      [
        'content' => 'I\'m on a seafood diet. I see food and I eat it!',
        'author' => 'Foodie',
        'category' => 'one-liners',
      ],
    ];

    foreach ($jokes as $joke) {
      Joke::create($joke);
    }
  }
}