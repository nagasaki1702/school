<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view ('home',[
            'featuredPosts' => Post::where('published_at', '<=', Carbon::now())->take(3)->get(),
            'latestPosts' => Post::take(9)->get()
        ]);
    }
}
