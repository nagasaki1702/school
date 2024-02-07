<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
// use Livewire\Attributes\Computed;を追記する必要がある
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Livewire\On;



class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc'; 

    #[Url()]
    public $search ='';

    // protected $listeners = ['search' => 'updateSearch'];


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
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()
            ->orderBy('published_at', $this->sort)
            ->where('title', 'like', "%{$this->search}%")
            ->paginate(3);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
