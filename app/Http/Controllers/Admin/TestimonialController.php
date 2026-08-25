<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller {
    public function index() {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }
    public function create() {
        return view('admin.testimonials.create');
    }
    public function store(StoreTestimonialRequest $request) {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }
        $data['is_active'] = $request->has('is_active');
        Testimonial::create($data);
        if ($request->ajax()) { return response()->json(['success' => 'Testimonial created.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Testimonial created.');
    }
    public function edit(Testimonial $testimonial) {
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial) {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($testimonial->image) Storage::disk('public')->delete($testimonial->image);
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }
        $data['is_active'] = $request->has('is_active');
        $testimonial->update($data);
        if ($request->ajax()) { return response()->json(['success' => 'Testimonial updated.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Testimonial updated.');
    }
    public function destroy(Testimonial $testimonial) {
        if ($testimonial->image) Storage::disk('public')->delete($testimonial->image);
        $testimonial->delete();
        if (request()->ajax()) { return response()->json(['success' => 'Testimonial deleted.']); } return redirect()->route('admin.' . explode('.', request()->route()->getName())[1] . '.index')->with('success', 'Testimonial deleted.');
    }
}