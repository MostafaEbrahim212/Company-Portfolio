@extends('layouts.admin')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">{{ __('messages.testimonials') }}</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="bg-primary text-white px-4 py-2 rounded shadow hover:bg-primary">{{ __('messages.create') }}</a>
</div>
<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full text-start border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-3">{{ app()->getLocale() == 'ar' ? 'العميل' : 'Client Name' }}</th>
                <th class="p-3">{{ app()->getLocale() == 'ar' ? 'الشركة' : 'Company' }}</th>
                <th class="p-3">{{ app()->getLocale() == 'ar' ? 'نشط' : 'Active' }}</th>
                <th class="p-3 text-end">{{ __('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $t)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ app()->getLocale() == 'ar' ? ($t->client_name_ar ?? $t->client_name) : $t->client_name }}</td>
                <td class="p-3">{{ app()->getLocale() == 'ar' ? ($t->company_ar ?? $t->company) : $t->company }}</td>
                <td class="p-3">{{ $t->is_active ? (app()->getLocale() == 'ar' ? 'نعم' : 'Yes') : (app()->getLocale() == 'ar' ? 'لا' : 'No') }}</td>
                <td class="p-3 text-end">
                    <a href="{{ route('admin.testimonials.edit', $t) }}" class="text-primary hover:underline me-2">{{ __('messages.edit') }}</a>
                    <button data-url="{{ route('admin.testimonials.destroy', $t) }}" class="text-red-500 hover:underline ajax-delete">{{ __('messages.delete') }}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection