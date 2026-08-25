@extends('layouts.admin')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">{{ __('messages.categories') }}</h1>
    <a href="{{ route('admin.categories.create') }}" class="bg-primary text-white px-4 py-2 rounded shadow hover:bg-primary">{{ __('messages.create') }}</a>
</div>
<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full text-start border-collapse">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="p-3">{{ __('messages.name') }}</th>
                <th class="p-3">{{ app()->getLocale() == 'ar' ? 'الرابط' : 'Slug' }}</th>
                <th class="p-3 text-end">{{ __('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ app()->getLocale() == 'ar' ? ($cat->name_ar ?? $cat->name) : $cat->name }}</td>
                <td class="p-3">{{ $cat->slug }}</td>
                <td class="p-3 text-end">
                    <a href="{{ route('admin.categories.edit', $cat) }}" class="text-primary hover:underline me-2">{{ __('messages.edit') }}</a>
                    <button data-url="{{ route('admin.categories.destroy', $cat) }}" class="text-red-500 hover:underline ajax-delete">{{ __('messages.delete') }}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection