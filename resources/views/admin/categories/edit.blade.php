@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 max-w-lg mx-auto">
    <h2 class="text-2xl font-bold mb-4">{{ __('messages.edit') }}</h2>
    <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="ajax-form">
        @method('PUT')
        <div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
<div class="">
            <label class="block text-gray-700 font-bold mb-2">Name (EN)</label>
            <input type="text" name="name" value="{{ $category->name }}" class="border rounded w-full py-2 px-3" required>
        </div>
<div class="">
            <label class="block text-gray-700 font-bold mb-2">Name (AR)</label>
            <input type="text" name="name_ar" value="{{ $category->name_ar }}" class="border rounded w-full py-2 px-3" required>
        </div>
</div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">{{ app()->getLocale() == 'ar' ? 'الرابط' : 'Slug' }}</label>
            <input type="text" name="slug" value="{{ $category->slug }}" class="border rounded w-full py-2 px-3" required>
        </div>
        <button type="submit" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-primary">{{ __('messages.update') }}</button>
    </form>
</div>
@endsection