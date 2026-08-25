@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">{{ __('messages.edit') }}</h2>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="ajax-form">
        @method('PUT')
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.title_en') }}</label>
                <input type="text" name="title" value="{{ $project->title }}" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.title_ar') }}</label>
                <input type="text" name="title_ar" value="{{ $project->title_ar }}" class="border rounded w-full py-2 px-3" required>
            </div>
        </div>
        <div class="mb-4">
            <label class="block font-bold mb-1">{{ __('messages.category') }}</label>
            <select name="category_id" class="border rounded w-full py-2 px-3">
                @foreach($categories as $c) 
                    <option value="{{ $c->id }}" {{ $project->category_id == $c->id ? 'selected' : '' }}>{{ $c->name }}</option> 
                @endforeach
            </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.description_en') }}</label>
                <textarea name="description" class="border rounded w-full py-2 px-3 h-32" required>{{ $project->description }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.description_ar') }}</label>
                <textarea name="description_ar" class="border rounded w-full py-2 px-3 h-32" required>{{ $project->description_ar }}</textarea>
            </div>
        </div>
        <div class="mb-4">
            <label class="block font-bold mb-1">Image (Leave blank to keep current)</label>
            <input type="file" name="image" class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4 flex items-center">
            <input type="checkbox" name="is_featured" value="1" {{ $project->is_featured ? 'checked' : '' }} class="me-2">
            <label class="font-bold">{{ app()->getLocale() == 'ar' ? 'مميز' : 'Featured' }}</label>
        </div>
        <button type="submit" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-primary">{{ __('messages.update') }}</button>
    </form>
</div>
@endsection