<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\AlignFormatter;

class BlogController extends Controller
{

    public function getIndex() {
        $posts = Post::paginate(5);
        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug) {
        // fetch from the DB based on slug
        $post = Post::where('slug', '=', $slug)->first();
        return view('blog.single')->withPost($post);
    }
}
