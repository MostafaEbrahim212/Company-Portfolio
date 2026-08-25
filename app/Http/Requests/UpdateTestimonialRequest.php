<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateTestimonialRequest extends FormRequest {
    public function authorize(): bool { return true; }
    public function rules(): array {
        return [
            'client_name' => 'required|string|max:255',
            'client_name_ar' => 'nullable|string|max:255',
            'client_role' => 'nullable|string|max:255',
            'client_role_ar' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'company_ar' => 'nullable|string|max:255',
            'review' => 'required|string',
            'review_ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_active' => 'boolean',
        ];
    }
}