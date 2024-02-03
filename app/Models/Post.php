<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Post extends Model
{
    use HasFactory;

// scopeってつけたら、コントローラーで使えるんじゃ！
// そして、Modelってこういうふうにクエリを書いて使用するんじゃ！
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }

}
