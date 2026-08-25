@extends('layouts.app')
@section('content')
<!-- Hero Banner -->
<div class="bg-gray-900 py-32 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-primary opacity-20"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4" data-aos="zoom-in">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6">{{ __('messages.blog') }}</h1>
        <p class="text-xl text-gray-300 font-light">{{ app()->getLocale() == 'ar' ? 'رؤى، أخبار، وقصص من فريقنا.' : 'Insights, news, and stories from our team.' }}</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-20">
    <div id="blog-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @include('partials.blog_list')
    </div>
    
    @if($posts->hasMorePages())
    <div class="text-center mt-16" data-aos="fade-in">
        <button id="load-more" data-page="2" class="bg-white border-2 border-primary text-primary font-bold py-3 px-10 rounded-full shadow hover:bg-primary hover:text-white transition">{{ app()->getLocale() == 'ar' ? 'تحميل المزيد من المقالات' : 'Load More Articles' }}</button>
    </div>
    @endif
</div>
@endsection
@push('scripts')
<script>
    $('#load-more').click(function() {
        let btn = $(this);
        let page = btn.data('page');
        let originalText = btn.text();
        btn.text('Loading...').prop('disabled', true);
        
        $.ajax({
            url: "?page=" + page,
            type: 'GET',
            success: function(html) {
                if(html.trim() == '') {
                    btn.fadeOut();
                } else {
                    $('#blog-list').append(html);
                    btn.data('page', page + 1).text(originalText).prop('disabled', false);
                    AOS.refreshHard();
                }
            }
        });
    });
</script>
@endpush