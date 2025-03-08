<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class Home extends Component
{
  public function render()
  {
    $news = News::limit(3)->get();
    return view('livewire.home', compact(
      'news'
    ));
  }
}
