<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller {
    public function index(Request $request) {
        $categories = Category::all();
        
        $query = Project::with('category');
        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }
        $projects = $query->get();

        if ($request->ajax()) {
            return view('partials.projects_grid', compact('projects'))->render();
        }
        return view('portfolio.index', compact('categories', 'projects'));
    }
    public function show(Project $project) {
        return view('portfolio.show', compact('project'));
    }
}