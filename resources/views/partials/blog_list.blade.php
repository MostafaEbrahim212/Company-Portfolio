@foreach($posts as $post)
<div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col" data-aos="fade-up">
    <div class="overflow-hidden h-60 bg-primary/10">
        @if($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
        @else
            <div class="w-full h-full flex items-center justify-center bg-primary text-white"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg></div>
        @endif
    </div>
    <div class="p-8 flex-1 flex flex-col">
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <svg class="w-4 h-4 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            {{ $post->published_at ? $post->published_at->format('M d, Y') : (app()->getLocale() == 'ar' ? 'مسودة' : 'Draft') }}
        </div>
        <h3 class="text-2xl font-bold mb-4 leading-tight group-hover:text-primary transition"><a href="{{ route('blog.show', $post) }}">{{ app()->getLocale() == 'ar' ? ($post->title_ar ?? $post->title) : $post->title }}</a></h3>
        <p class="text-gray-600 mb-6 flex-1">{{ app()->getLocale() == 'ar' ? \Illuminate\Support\Str::limit(strip_tags($post->content_ar ?? $post->content), 150) : $post->excerpt }}</p>
        <a href="{{ route('blog.show', $post) }}" class="inline-flex items-center text-primary font-bold hover:underline mt-auto">
            {{ app()->getLocale() == 'ar' ? 'قراءة المقال' : 'Read Article' }} 
            <svg class="w-4 h-4 ms-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>
</div>
@endforeach