<?php
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $projects = Project::where('is_featured', true)->with('category')->take(6)->get();
        $posts = Post::where('is_published', true)->orderBy('published_at', 'desc')->take(3)->get();
        $testimonials = Testimonial::where('is_active', true)->get();
        
        return view('home', compact('projects', 'posts', 'testimonials'));
    }
}