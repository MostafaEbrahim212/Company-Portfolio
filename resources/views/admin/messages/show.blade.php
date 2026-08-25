@extends('layouts.admin')
@section('content')
<div class="mb-4">
    <a href="{{ route('admin.messages.index') }}" class="text-primary hover:underline">{{ app()->getLocale() == 'ar' ? '→ العودة للبريد' : '← Back to Inbox' }}</a>
</div>
<div class="bg-white rounded-xl shadow-lg p-8 max-w-3xl mx-auto border-t-4 border-primary">
    <div class="flex justify-between items-start border-b pb-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ $message->subject ?? 'No Subject' }}</h1>
            <p class="text-gray-500 mt-1">From: <span class="font-bold text-gray-800">{{ $message->name }}</span> ({{ $message->email }})</p>
        </div>
        <div class="text-gray-400 text-sm">
            {{ $message->created_at->format('M d, Y h:i A') }}
        </div>
    </div>
    <div class="prose max-w-none text-gray-800 leading-relaxed text-lg whitespace-pre-wrap">{{ $message->message }}</div>
</div>
@endsection