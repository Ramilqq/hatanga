<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Tour;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index()
    {   
        $posts = Post::leftJoin('categories', 'posts.category_id', '=', 'categories.id')
            ->select(
                'posts.id as id',
                'posts.title as title',
                'posts.excerpt as excerpt',
                'posts.image as image',
                'posts.status as status',
                'posts.created_at as created_at',
                'posts.slug as slug',
                'categories.id as category_id',
                'categories.name as category_name',
                'categories.slug as category_slug',
                )
        ->limit(6)->get()->toArray();

        $tours = Tour::get()->toArray();
        
        $advantages = Advantage::get()->toArray();

        $slider = [
            str_replace('\\', '/', setting('site.slide_1')),
            setting('site.slide_1')
        ];
        //dd($slider);
        return view('web.index', [
            'posts' => $posts,
            'tours' => $tours,
            'advantages' => $advantages,
        ]);
    }
}
