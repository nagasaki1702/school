<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    #[Reactive]
    public Post $post;


    public function toggleLike()
    {
        if (is_null($this->post)) {
            // $post が null の場合は何もしない
            return;
        }
    
        // 以降のコードは変更なし
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }
    
        $user = auth()->user();
    
        if ($user->hasLiked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }
    
        $user->likes()->attach($this->post);
    }

        public function render()
    {
        return view('livewire.like-button');
    }
}
