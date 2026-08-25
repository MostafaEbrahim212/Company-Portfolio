@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">{{ __('messages.create') }}</h2>
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="ajax-form ajax-reload">
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.title_en') }}</label>
                <input type="text" name="title" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.title_ar') }}</label>
                <input type="text" name="title_ar" class="border rounded w-full py-2 px-3" required>
            </div>
        </div>
        <div class="mb-4">
            <label class="block font-bold mb-1">{{ __('messages.category') }}</label>
            <select name="category_id" class="border rounded w-full py-2 px-3">
                @foreach($categories as $c) <option value="{{ $c->id }}">{{ $c->name }}</option> @endforeach
            </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.content_en') }}</label>
                <textarea name="content" class="border rounded w-full py-2 px-3 h-64" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1">{{ __('messages.content_ar') }}</label>
                <textarea name="content_ar" class="border rounded w-full py-2 px-3 h-64" required></textarea>
            </div>
        </div>
        <div class="mb-4">
            <label class="block font-bold mb-1">{{ __('messages.image') }}</label>
            <input type="file" name="image" class="border rounded w-full py-2 px-3" required>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4 flex items-center">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" value="1" class="me-2" checked>
                <label class="font-bold text-gray-700">Publish Now?</label>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-1 text-sm text-gray-600">Publish Date (Optional)</label>
                <input type="datetime-local" name="published_at" class="border rounded w-full py-2 px-3 text-sm">
            </div>
        </div>
        <button type="submit" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-primary">{{ __('messages.save') }}</button>
    </form>
</div>
@endsection