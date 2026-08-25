<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreProjectRequest extends FormRequest {
    public function authorize(): bool { return true; }
        protected function prepareForValidation() {
        if ($this->has('title')) {
            $this->merge(['slug' => \Illuminate\Support\Str::slug($this->title) . '-' . time()]);
        }
    }
    public function rules(): array {
        return [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug',
            'description' => 'required|string',
            'description_ar' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'client' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'is_featured' => 'boolean',
        ];
    }
}