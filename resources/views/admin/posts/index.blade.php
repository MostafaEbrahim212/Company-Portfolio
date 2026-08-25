@extends('layouts.admin')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">{{ __('messages.blog_posts') }}</h1>
    <a href="{{ route('admin.posts.create') }}" class="bg-primary text-white px-4 py-2 rounded shadow hover:bg-primary">{{ __('messages.create') }}</a>
</div>
<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full text-start border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-3">{{ __('messages.title') }}</th>
                <th class="p-3">{{ app()->getLocale() == 'ar' ? 'منشور' : 'Published' }}</th>
                <th class="p-3 text-end">{{ __('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $p)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ app()->getLocale() == 'ar' ? ($p->title_ar ?? $p->title) : $p->title }}</td>
                <td class="p-3">{{ $p->is_published ? (app()->getLocale() == 'ar' ? 'نعم' : 'Yes') : (app()->getLocale() == 'ar' ? 'لا' : 'No') }}</td>
                <td class="p-3 text-end">
                    <a href="{{ route('admin.posts.edit', $p) }}" class="text-primary hover:underline me-2">{{ __('messages.edit') }}</a>
                    <button data-url="{{ route('admin.posts.destroy', $p) }}" class="text-red-500 hover:underline ajax-delete">{{ __('messages.delete') }}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection