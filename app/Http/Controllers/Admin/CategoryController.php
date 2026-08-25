<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller {
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    public function create() {
        return view('admin.categories.create');
    }
    public function store(StoreCategoryRequest $request) {
        Category::create($request->validated());
        if ($request->ajax()) { return response()->json(['success' => 'Category created.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Category created.');
    }
    public function edit(Category $category) {
        return view('admin.categories.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, Category $category) {
        $category->update($request->validated());
        if ($request->ajax()) { return response()->json(['success' => 'Category updated.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Category updated.');
    }
    public function destroy(Category $category) {
        $category->delete();
        if (request()->ajax()) { return response()->json(['success' => 'Category deleted.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Category deleted.');
    }
}