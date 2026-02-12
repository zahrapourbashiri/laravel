<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
           $bestPosts=Post::query()->orderBy('view_number','desc')->limit(5)->get();
           $categories = Category::all();
            $posts= Post::query()->take(10)->get();
            return view("website.articlesList",compact(["posts","categories","bestPosts"]));

    }
    public function article($id)
    {
        $post=Post::query()->find($id);
        $posts=Post::query()->take(5)->get();
        return view("website.article",compact(["post","posts"]));

    }
    public function about()
    {
        return view("website.about");
    }
    public function contactUs()
    {
        return view("website.contactus");
    }
}
