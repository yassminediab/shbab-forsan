<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\PageSetting;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $page_setting = PageSetting::where('page_name', 'blogs')->first();

        return view('frontend.blogs', [
            'blogs' => Blog::paginate(6),
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'recentPosts' => Blog::latest()->limit(3)->get(),
            'pageSetting' => $page_setting
        ]);
    }

    public function show($id)
    {
        $page_setting = PageSetting::where('page_name', 'blogs')->first();
        return view('frontend.blog_details', [
            'blog' => Blog::findOrFail($id),
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'recentPosts' => Blog::latest()->limit(3)->get(),
            'pageSetting' => $page_setting
        ]);
    }
}
