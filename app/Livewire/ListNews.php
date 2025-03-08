<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class ListNews extends Component
{
  use WithPagination;
  public $slug;

  public function mount($slug)
  {
    $this->slug = $slug;
  }

  public function render()
  {
    if ($this->slug == 'all') {
      $news = News::orderBy('created_at', 'desc')
        ->paginate(6);
    } else {
      $news = News::whereHas('category', function ($query) {
        $query->where('slug', $this->slug);
      })
        ->orderBy('created_at', 'desc')
        ->paginate(6);
    }
    $categories = Category::orderBy('category_name')->get();

    return view('livewire.list-news', compact(
      'news',
      'categories'
    ));
  }
}
