@extends('layouts.app')
@section('meta_title', app()->getLocale() == 'ar' ? ($post->title_ar ?? $post->title) : $post->title)
@section('meta_description', app()->getLocale() == 'ar' ? ($post->excerpt_ar ?? $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content_ar ?? $post->content), 150)) : ($post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 150)))
@section('meta_image', $post->image ? asset('storage/' . $post->image) : (isset($settings['og_image']) ? asset('storage/' . $settings['og_image']) : ''))
@section('meta_type', 'article')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-20 mt-10">
    <div class="text-center mb-12" data-aos="fade-up">
        <div class="inline-flex items-center text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">
            <svg class="w-5 h-5 me-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            {{ $post->published_at ? $post->published_at->format('F d, Y') : (app()->getLocale() == 'ar' ? 'مسودة' : 'Draft') }}
        </div>
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-8">{{ app()->getLocale() == 'ar' ? ($post->title_ar ?? $post->title) : $post->title }}</h1>
    </div>

    @if($post->image)
    <div class="rounded-2xl overflow-hidden shadow-2xl mb-16" data-aos="zoom-in">
        <img src="{{ asset('storage/'.$post->image) }}" class="w-full object-cover">
    </div>
    @endif
    
    <div class="prose prose-xl max-w-none text-gray-800 leading-loose mx-auto" data-aos="fade-up">
        {!! app()->getLocale() == 'ar' ? ($post->content_ar ?? $post->content)) : ($post->content) !!}
    </div>
    
    <div class="mt-20 pt-10 border-t border-gray-200 text-center">
        <a href="{{ route('blog.index') }}" class="inline-block border-2 border-gray-300 text-gray-600 font-bold py-3 px-8 rounded-full hover:border-gray-900 hover:text-gray-900 transition">{{ app()->getLocale() == 'ar' ? '→ العودة للمدونة' : '← Back to Blog' }}</a>
    </div>
</div>
@endsection