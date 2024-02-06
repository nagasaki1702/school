<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
// use Livewire\Attributes\Computed;を追記する必要がある
use Livewire\Attributes\Computed;


class PostList extends Component
{

    #[Computed()]
    public function posts()
    {
        return Post::take(5)->get();
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
