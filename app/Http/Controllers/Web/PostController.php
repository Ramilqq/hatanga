<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PostController extends Controller
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
            ->paginate(10)->toArray();
        $categories = Category::where('parent_id', null)->get()->toArray();
        //dd($categories);
        return view('web.post', [
            'posts' => $posts['data'],
            'links' => $posts['links'],
            'categories' => $categories,
        ]);
    }

    public function category($category)
    {   
        $category = Category::where('slug', $category)->first()->toArray();

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
        ->where('categories.slug', $category['slug'])
        ->paginate(10)->toArray();
        
        $categories = Category::where('parent_id', $category['id'])->get()->toArray();
        
        $breadcrumb = [
            'Хатанга для туриста' => 'post',
            $category['name'] => ''
        ];

        //dd($category);
        return view('web.post', [
            'posts' => $posts['data'],
            'links' => $posts['links'],
            'categories' => $categories,
            'breadcrumb' => $breadcrumb,
        ]);
    }

    public function get($category, $slug='')
    {
        $posts = Post::where('slug', $slug)->first();
        return view('web.post_single', [
            'post' => $posts
        ]);
    }

    public function comment(Request $request)
    {
        //
    }
}
