<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreCategoryRequest extends FormRequest {
    public function authorize(): bool { return true; }
        protected function prepareForValidation() {
        if ($this->has('name')) {
            $this->merge(['slug' => \Illuminate\Support\Str::slug($this->name) . '-' . time()]);
        }
    }
    public function rules(): array {
        return [
            'name' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'description' => 'nullable|string',
        ];
    }
}