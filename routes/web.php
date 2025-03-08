<?php

use App\Livewire\DetailNews;
use App\Livewire\Home;
use App\Livewire\ListNews;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $news = App\Models\News::orderBy('created_at', 'desc')->limit(3)->get();
  // dd($news);
  return view('welcome', [
    'news' => $news
  ]);
});


Route::get('/', Home::class)->name('home');
Route::get('/kategori/{slug}', ListNews::class)->name('list_news');
Route::get('/{slug}', DetailNews::class)
  ->name('detail_news');
