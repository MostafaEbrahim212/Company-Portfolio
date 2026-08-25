<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller {
    public function index(Request $request) {
        $posts = Post::where('is_published', true)->orderBy('published_at', 'desc')->paginate(6);

        if ($request->ajax()) {
            return view('partials.blog_list', compact('posts'))->render();
        }
        return view('blog.index', compact('posts'));
    }
    public function show(Post $post) {
        return view('blog.show', compact('post'));
    }
}