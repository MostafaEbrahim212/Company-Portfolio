@extends('layouts.admin')
@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6">{{ __('messages.inbox') }}</h1>
<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full text-start border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-3">{{ __('messages.name') }}</th>
                <th class="p-3">{{ __('messages.email') }}</th>
                <th class="p-3">{{ __('messages.date') }}</th>
                <th class="p-3">{{ __('messages.status') }}</th>
                <th class="p-3 text-end">{{ __('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $m)
            <tr class="border-b hover:bg-gray-50 {{ $m->is_read ? 'text-gray-500' : 'font-bold bg-gray-50' }}">
                <td class="p-3">{{ $m->name }}</td>
                <td class="p-3">{{ $m->email }}</td>
                <td class="p-3">{{ $m->created_at->format('M d, Y h:i A') }}</td>
                <td class="p-3">
                    @if($m->is_read)
                        <span class="px-2 py-1 bg-gray-200 text-gray-700 text-xs rounded-full">{{ app()->getLocale() == 'ar' ? 'مقروء' : 'Read' }}</span>
                    @else
                        <span class="px-2 py-1 bg-primary text-white text-xs rounded-full">{{ app()->getLocale() == 'ar' ? 'جديد' : 'New' }}</span>
                    @endif
                </td>
                <td class="p-3 text-end">
                    <a href="{{ route('admin.messages.show', $m) }}" class="text-primary hover:underline me-3">{{ app()->getLocale() == 'ar' ? 'مقروء' : 'Read' }}</a>
                    <button data-url="{{ route('admin.messages.destroy', $m) }}" class="text-red-500 hover:underline ajax-delete">{{ __('messages.delete') }}</button>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-6 text-center text-gray-500">{{ app()->getLocale() == 'ar' ? 'لا توجد رسائل.' : 'No messages found.' }}</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection