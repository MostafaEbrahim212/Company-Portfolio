@extends('layouts.app')
@section('meta_title', app()->getLocale() == 'ar' ? ($project->title_ar ?? $project->title) : $project->title)
@section('meta_description', app()->getLocale() == 'ar' ? \Illuminate\Support\Str::limit(strip_tags($project->description_ar ?? $project->description), 150) : \Illuminate\Support\Str::limit(strip_tags($project->description), 150))
@section('meta_image', $project->image ? asset('storage/' . $project->image) : (isset($settings['og_image']) ? asset('storage/' . $settings['og_image']) : ''))

@section('content')
<!-- Project Header -->
<div class="bg-gray-50 py-24 border-b border-gray-200">
    <div class="max-w-5xl mx-auto px-4 text-center" data-aos="fade-up">
        <span class="inline-block px-4 py-1 rounded-full bg-primary text-white text-sm font-bold uppercase tracking-widest mb-6">{{ app()->getLocale() == 'ar' ? ($project->category->name_ar ?? $project->category->name) : $project->category->name }}</span>
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6 tracking-tight">{{ app()->getLocale() == 'ar' ? ($project->title_ar ?? $project->title) : $project->title }}</h1>
        <div class="flex items-center justify-center gap-8 text-gray-500 mt-8">
            @if($project->client)
            <div><span class="block text-sm uppercase tracking-wider font-bold text-gray-400">{{ app()->getLocale() == 'ar' ? 'العميل' : 'Client' }}</span><span class="text-lg font-medium text-gray-800">{{ $project->client }}</span></div>
            @endif
            @if($project->url)
            <div><span class="block text-sm uppercase tracking-wider font-bold text-gray-400">{{ app()->getLocale() == 'ar' ? 'الموقع' : 'Website' }}</span><a href="{{ $project->url }}" target="_blank" class="text-primary hover:underline text-lg font-medium">{{ app()->getLocale() == 'ar' ? 'زيارة الموقع &nearr;' : 'Visit Site &nearr;' }}</a></div>
            @endif
        </div>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 py-16">
    @if($project->image)
    <div class="rounded-2xl overflow-hidden shadow-2xl mb-16 transform -translate-y-24" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('storage/'.$project->image) }}" class="w-full object-cover">
    </div>
    @endif
    
    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-gray-100" data-aos="fade-up">
        {!! app()->getLocale() == 'ar' ? ($project->description_ar ?? $project->description) : ($project->description) !!}
    </div>
    
    <div class="mt-16 text-center">
        <a href="{{ route('portfolio.index') }}" class="inline-block border-2 border-gray-300 text-gray-600 font-bold py-3 px-8 rounded-full hover:border-gray-900 hover:text-gray-900 transition">{{ app()->getLocale() == 'ar' ? '→ العودة للأعمال' : '← Back to Portfolio' }}</a>
    </div>
</div>
@endsection