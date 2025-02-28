<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $news = App\Models\News::orderBy('created_at', 'desc')->limit(3)->get();
  // dd($news);
  return view('welcome', [
    'news' => $news
  ]);
});
