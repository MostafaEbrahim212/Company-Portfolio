<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.posts.index', compact('posts'));
    }
    public function create() {
        $categories = \App\Models\Category::all();
        return view('admin.posts.create', compact('categories'));
    }
    public function store(StorePostRequest $request) {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }
        $data['is_published'] = $request->has('is_published');
        $data['excerpt'] = $data['excerpt'] ?? \Illuminate\Support\Str::limit(strip_tags($data['content'] ?? ''), 150) ?: 'No excerpt provided.';
        Post::create($data);
        if ($request->ajax()) { return response()->json(['success' => 'Post created.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Post created.');
    }
    public function edit(Post $post) {
        $categories = \App\Models\Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }
    public function update(UpdatePostRequest $request, Post $post) {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($post->image) Storage::disk('public')->delete($post->image);
            $data['image'] = $request->file('image')->store('posts', 'public');
        }
        $data['is_published'] = $request->has('is_published');
        $data['excerpt'] = $data['excerpt'] ?? \Illuminate\Support\Str::limit(strip_tags($data['content'] ?? ''), 150) ?: 'No excerpt provided.';
        $post->update($data);
        if ($request->ajax()) { return response()->json(['success' => 'Post updated.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Post updated.');
    }
    public function destroy(Post $post) {
        if ($post->image) Storage::disk('public')->delete($post->image);
        $post->delete();
        if (request()->ajax()) { return response()->json(['success' => 'Post deleted.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Post deleted.');
    }
}