<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Post;
use App\Models\Message;

class DashboardController extends Controller {
    public function index() {
        $stats = [
            'projects' => Project::count(),
            'posts' => Post::count(),
            'messages' => Message::count(),
            'unread_messages' => Message::where('is_read', false)->count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }
}