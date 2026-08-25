<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StorePostRequest extends FormRequest {
    public function authorize(): bool { return true; }
    protected function prepareForValidation() {
        $merge = [];
        if ($this->has('title')) {
            $merge['slug'] = \Illuminate\Support\Str::slug($this->title) . '-' . time();
        }
        if ($this->has('content')) {
            $merge['excerpt'] = \Illuminate\Support\Str::limit(strip_tags($this->content), 150);
        }
        if (!empty($merge)) {
            $this->merge($merge);
        }
    }
    public function rules(): array {
        return [
            'title' => 'required|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'content_ar' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}