@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">{{ __('messages.edit') }}</h2>
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="ajax-form">
        @method('PUT')
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.title_en') }}</label>
                <input type="text" name="title" value="{{ $post->title }}" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.title_ar') }}</label>
                <input type="text" name="title_ar" value="{{ $post->title_ar }}" class="border rounded w-full py-2 px-3" required>
            </div>
        </div>
        <div class="mb-4">
            <label class="block font-bold mb-1">{{ __('messages.category') }}</label>
            <select name="category_id" class="border rounded w-full py-2 px-3">
                @foreach($categories as $c) 
                    <option value="{{ $c->id }}" {{ $post->category_id == $c->id ? 'selected' : '' }}>{{ $c->name }}</option> 
                @endforeach
            </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.content_en') }}</label>
                <textarea name="content" class="border rounded w-full py-2 px-3 h-64" required>{{ $post->content }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.content_ar') }}</label>
                <textarea name="content_ar" class="border rounded w-full py-2 px-3 h-64" required>{{ $post->content_ar }}</textarea>
            </div>
        </div>
        <div class="mb-4">
            <label class="block font-bold mb-1">Image (Leave blank to keep current)</label>
            <input type="file" name="image" class="border rounded w-full py-2 px-3">
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4 flex items-center">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" value="1" {{ $post->is_published ? 'checked' : '' }} class="me-2">
                <label class="font-bold text-gray-700">Publish Now?</label>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1 text-sm text-gray-600">Publish Date</label>
                <input type="datetime-local" name="published_at" value="{{ $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '' }}" class="border rounded w-full py-2 px-3 text-sm">
            </div>
        </div>
        <button type="submit" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-primary">{{ __('messages.update') }}</button>
    </form>
</div>
@endsection