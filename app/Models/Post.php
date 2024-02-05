<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
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

    // 150文字以上は表示させないよ！
    public function getExcerpt(){
        return Str::limit(strip_tags($this->body), 150);
    }

    // 読むのにかかる時間を表示させる（ネットで一般的に読むのにかかる時間を計算して）
    // １分未満の時は１分と表示させる
    public function getReadingTime()
    {
        $mins = round(str_word_count($this->body) / 250);
        return ($mins < 1) ? 1 : $mins;
    }

}
