@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 max-w-lg mx-auto">
    <h2 class="text-2xl font-bold mb-4">{{ __('messages.create') }}</h2>
    <form action="{{ route('admin.categories.store') }}" method="POST" class="ajax-form ajax-reload">
        <div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
<div class="">
            <label class="block text-gray-700 font-bold mb-2">Name (EN)</label>
            <input type="text" name="name" class="border rounded w-full py-2 px-3" required>
        </div>
<div class="">
            <label class="block text-gray-700 font-bold mb-2">Name (AR)</label>
            <input type="text" name="name_ar" class="border rounded w-full py-2 px-3" required>
        </div>
</div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">{{ app()->getLocale() == 'ar' ? 'الرابط' : 'Slug' }}</label>
            <input type="text" name="slug" class="border rounded w-full py-2 px-3" required>
        </div>
        <button type="submit" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-primary">{{ __('messages.save') }}</button>
    </form>
</div>
@endsection