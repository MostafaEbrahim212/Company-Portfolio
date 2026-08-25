<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Category;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller {
    public function index() {
        $projects = Project::with('category')->get();
        return view('admin.projects.index', compact('projects'));
    }
    public function create() {
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
    }
    public function store(StoreProjectRequest $request) {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        $data['is_featured'] = $request->has('is_featured');
        Project::create($data);
        if ($request->ajax()) { return response()->json(['success' => 'Project created.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Project created.');
    }
    public function edit(Project $project) {
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }
    public function update(UpdateProjectRequest $request, Project $project) {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($project->image) Storage::disk('public')->delete($project->image);
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        $data['is_featured'] = $request->has('is_featured');
        $project->update($data);
        if ($request->ajax()) { return response()->json(['success' => 'Project updated.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Project updated.');
    }
    public function destroy(Project $project) {
        if ($project->image) Storage::disk('public')->delete($project->image);
        $project->delete();
        if (request()->ajax()) { return response()->json(['success' => 'Project deleted.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Project deleted.');
    }
}