@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
<h2 class="text-2xl font-bold mb-4">{{ __('messages.edit') }}</h2>
<form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="ajax-form">
@method('PUT')
<div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
<div class=""><label class="block font-bold">Client Name (EN)</label><input type="text" name="client_name" value="{{ $testimonial->client_name }}" class="border rounded w-full p-2" required></div>
<div class=""><label class="block font-bold">Client Name (AR)</label><input type="text" name="client_name_ar" value="{{ $testimonial->client_name_ar }}" class="border rounded w-full p-2" required></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
<div class=""><label class="block font-bold">Client Role (EN)</label><input type="text" name="client_role" value="{{ $testimonial->client_role }}" class="border rounded w-full p-2"></div>
<div class=""><label class="block font-bold">Client Role (AR)</label><input type="text" name="client_role_ar" value="{{ $testimonial->client_role_ar }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
<div class=""><label class="block font-bold">Company (EN)</label><input type="text" name="company" value="{{ $testimonial->company }}" class="border rounded w-full p-2"></div>
<div class=""><label class="block font-bold">Company (AR)</label><input type="text" name="company_ar" value="{{ $testimonial->company_ar }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
<div class=""><label class="block font-bold">Review (EN)</label><textarea name="review" class="border rounded w-full p-2 h-32" required>{{ $testimonial->review }}</textarea></div>
<div class=""><label class="block font-bold">Review (AR)</label><textarea name="review_ar" class="border rounded w-full p-2 h-32" required>{{ $testimonial->review_ar }}</textarea></div>
</div>
<div class="mb-4"><label class="block font-bold">Image (leave empty to keep current)</label><input type="file" name="image" class="border rounded w-full p-2"></div>
<div class="mb-4"><label><input type="checkbox" name="is_active" value="1" {{ $testimonial->is_active ? 'checked' : '' }}> Active</label></div>
<button type="submit" class="bg-primary text-white p-2 px-4 rounded font-bold">{{ __('messages.update') }}</button>
</form>
</div>
@endsection