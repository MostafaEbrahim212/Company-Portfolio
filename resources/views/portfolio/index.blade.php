@extends('layouts.app')
@section('content')
<!-- Hero Banner -->
<div class="bg-gray-900 py-32 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-primary opacity-20"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4" data-aos="zoom-in">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6">{{ __('messages.portfolio') }}</h1>
        <p class="text-xl text-gray-300 font-light">{{ app()->getLocale() == 'ar' ? 'استكشف أحدث وأعظم مشاريعنا.' : 'Explore our latest and greatest projects.' }}</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16 text-center" data-aos="fade-up">
    <div class="inline-flex justify-center flex-wrap gap-3 bg-gray-100 p-2 rounded-xl">
        <button class="filter-btn bg-white text-gray-900 font-bold px-6 py-3 rounded-lg shadow-sm transition" data-id="">{{ __('messages.all_projects') }}</button>
        @foreach($categories as $c)
        <button class="filter-btn text-gray-600 hover:text-gray-900 hover:bg-white font-medium px-6 py-3 rounded-lg transition" data-id="{{ $c->id }}">{{ app()->getLocale() == 'ar' ? ($c->name_ar ?? $c->name) : $c->name }}</button>
        @endforeach
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 pb-24">
    <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @include('partials.projects_grid')
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('.filter-btn').click(function() {
        // Reset styles
        $('.filter-btn').removeClass('bg-white text-gray-900 font-bold shadow-sm').addClass('text-gray-600 font-medium');
        // Apply active styles
        $(this).removeClass('text-gray-600 font-medium').addClass('bg-white text-gray-900 font-bold shadow-sm');
        
        $('#projects-grid').css('opacity', '0.5');
        $.ajax({
            url: "{{ route('portfolio.index') }}",
            type: 'GET',
            data: { category_id: $(this).data('id') },
            success: function(html) {
                $('#projects-grid').html(html).css('opacity', '1');
                AOS.refreshHard();
            }
        });
    });
</script>
@endpush