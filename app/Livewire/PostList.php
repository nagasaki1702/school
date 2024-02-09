<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc'; 

    #[Url()]
    public $search = '';

    #[Url()]
    public $category = ''; // カテゴリーのプロパティを追加

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc'; 
        // タブを押下したら、１ページ目に戻る機能
        $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()
            ->orderBy('published_at', $this->sort)
            ->when($this->category, function ($query) {
                $query->whereHas('categories', function ($subQuery) {
                    $subQuery->where('slug', $this->category);
                });
            })
            ->where(function ($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('body', 'like', "%{$this->search}%");
            })
            ->paginate(3);
    }

    #[Computed()]
    public function activeCategory()
    {
        return Category::where('slug', $this->category)->first();
    }

    public function render()
    {
        return view('livewire.post-list', ['posts' => $this->posts()]);
    }
}
