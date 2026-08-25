@extends('layouts.app')
@section('content')
<!-- Hero with Shapes -->
<div class="relative bg-gradient-to-r from-primary to-gray-900 text-white py-40 text-center overflow-hidden shadow-inner">
    <!-- Abstract SVG Background -->
    <svg class="absolute top-0 start-0 w-full h-full opacity-10 pointer-events-none" preserveAspectRatio="none" viewBox="0 0 1440 320" style="transform: scale(1.5);">
        <path fill="#ffffff" fill-opacity="1" d="M0,224L48,208C96,192,192,160,288,149.3C384,139,480,149,576,170.7C672,192,768,224,864,213.3C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <div class="relative z-10 max-w-4xl mx-auto px-4" data-aos="zoom-in" data-aos-duration="1000">
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight drop-shadow-lg">{{ app()->getLocale() == 'ar' ? ($settings['hero_title_ar'] ?? $settings['hero_title'] ?? 'Welcome to Our Company') : ($settings['hero_title'] ?? 'Welcome to Our Company') }}</h1>
        <p class="text-xl md:text-3xl opacity-90 font-light drop-shadow">{{ app()->getLocale() == 'ar' ? ($settings['hero_subtitle_ar'] ?? $settings['hero_subtitle'] ?? 'We build professional and scalable solutions for modern businesses.') : ($settings['hero_subtitle'] ?? 'We build professional and scalable solutions for modern businesses.') }}</p>
        <div class="mt-10">
            <a href="#contact" class="bg-white text-primary px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-xl hover:bg-gray-50 transition transform hover:-translate-y-1">Get Started</a>
        </div>
    </div>
</div>

<!-- About & Services -->
<div class="max-w-7xl mx-auto px-4 py-24 text-center">
    <div data-aos="fade-up">
        <h2 class="text-4xl md:text-4xl md:text-5xl font-extrabold mb-6 text-gray-900 tracking-tight">{{ app()->getLocale() == 'ar' ? ($settings['about_title_ar'] ?? $settings['about_title'] ?? 'What We Do') : ($settings['about_title'] ?? 'What We Do') }}</h2>
        <div class="w-24 h-1 bg-primary mx-auto mb-6 rounded-full"></div>
        <p class="text-gray-600 text-xl max-w-3xl mx-auto mb-16 leading-relaxed">{{ app()->getLocale() == 'ar' ? ($settings['about_description_ar'] ?? $settings['about_description'] ?? 'We deliver outstanding results across 3 key areas.') : ($settings['about_description'] ?? 'We deliver outstanding results across 3 key areas.') }}</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="p-10 bg-white rounded-2xl shadow-xl border-t-8 border-primary transform transition duration-300 hover:-translate-y-3 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <div class="w-16 h-16 mx-auto bg-gray-100 text-primary flex items-center justify-center rounded-full mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-800">{{ app()->getLocale() == 'ar' ? ($settings['srv1_title_ar'] ?? $settings['srv1_title'] ?? 'Web Design') : ($settings['srv1_title'] ?? 'Web Design') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ app()->getLocale() == 'ar' ? ($settings['srv1_text_ar'] ?? $settings['srv1_text'] ?? 'Beautiful, responsive designs tailored to your brand.') : ($settings['srv1_text'] ?? 'Beautiful, responsive designs tailored to your brand.') }}</p>
        </div>
        <div class="p-10 bg-white rounded-2xl shadow-xl border-t-8 border-primary transform transition duration-300 hover:-translate-y-3 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <div class="w-16 h-16 mx-auto bg-gray-100 text-primary flex items-center justify-center rounded-full mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-800">{{ app()->getLocale() == 'ar' ? ($settings['srv2_title_ar'] ?? $settings['srv2_title'] ?? 'Development') : ($settings['srv2_title'] ?? 'Development') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ app()->getLocale() == 'ar' ? ($settings['srv2_text_ar'] ?? $settings['srv2_text'] ?? 'Robust and scalable web applications built from scratch.') : ($settings['srv2_text'] ?? 'Robust and scalable web applications built from scratch.') }}</p>
        </div>
        <div class="p-10 bg-white rounded-2xl shadow-xl border-t-8 border-primary transform transition duration-300 hover:-translate-y-3 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
            <div class="w-16 h-16 mx-auto bg-gray-100 text-primary flex items-center justify-center rounded-full mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-800">{{ app()->getLocale() == 'ar' ? ($settings['srv3_title_ar'] ?? $settings['srv3_title'] ?? 'Marketing') : ($settings['srv3_title'] ?? 'Marketing') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ app()->getLocale() == 'ar' ? ($settings['srv3_text_ar'] ?? $settings['srv3_text'] ?? 'Growth-driven marketing strategies for modern platforms.') : ($settings['srv3_text'] ?? 'Growth-driven marketing strategies for modern platforms.') }}</p>
        </div>
    </div>
</div>

<!-- {{ __('messages.projects') }} -->
<div class="bg-gray-50 py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <h2 class="text-4xl md:text-4xl md:text-5xl font-extrabold mb-4 text-center text-gray-900 tracking-tight" data-aos="fade-up">{{ app()->getLocale() == 'ar' ? ($settings['projects_title_ar'] ?? $settings['projects_title'] ?? __('messages.projects')) : ($settings['projects_title'] ?? __('messages.projects')) }}</h2>
        <div class="w-24 h-1 bg-primary mx-auto mb-16 rounded-full" data-aos="fade-up"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($projects as $index => $p)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group border border-gray-100 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="overflow-hidden relative h-64 bg-primary/10">
                    @if($p->image)
                        <img src="{{ asset('storage/'.$p->image) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-primary text-white"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                    @endif
                    <div class="absolute inset-0 bg-gray-900/0 group-hover:bg-gray-900/40 transition duration-500 flex items-center justify-center">
                        <a href="{{ route('portfolio.show', $p) }}" class="opacity-0 group-hover:opacity-100 bg-white text-primary px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-500">View Project</a>
                    </div>
                </div>
                <div class="p-8 flex-1">
                    <span class="text-xs text-primary font-bold uppercase tracking-widest">{{ app()->getLocale() == 'ar' ? ($p->category->name_ar ?? $p->category->name ?? 'غير مصنف') : ($p->category->name ?? 'Uncategorized') }}</span>
                    <h3 class="text-2xl font-bold mt-2"><a href="{{ route('portfolio.show', $p) }}" class="hover:text-primary transition">{{ app()->getLocale() == 'ar' ? ($p->title_ar ?? $p->title) : $p->title }}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-16" data-aos="fade-in">
            <a href="{{ route('portfolio.index') }}" class="inline-block bg-primary text-white font-bold py-4 px-10 rounded-full shadow-lg hover:shadow-2xl hover:bg-primary transition transform hover:-translate-y-1">{{ __('messages.all_projects') }} &rarr;</a>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="max-w-7xl mx-auto px-4 py-24">
    <h2 class="text-4xl md:text-4xl md:text-5xl font-extrabold mb-4 text-center text-gray-900 tracking-tight" data-aos="fade-up">{{ app()->getLocale() == 'ar' ? ($settings['testimonials_title_ar'] ?? $settings['testimonials_title'] ?? __('messages.testimonials')) : ($settings['testimonials_title'] ?? __('messages.testimonials')) }}</h2>
    <div class="w-24 h-1 bg-primary mx-auto mb-16 rounded-full" data-aos="fade-up"></div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
        @foreach($testimonials as $index => $t)
        <div class="bg-white p-10 rounded-2xl shadow-xl relative border border-gray-100 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <svg class="absolute top-6 left-6 w-12 h-12 text-gray-100" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path></svg>
            <p class="text-xl text-gray-700 italic relative z-10 pt-8 flex-1">"{{ $t->review }}"</p>
            <div class="mt-8 flex items-center">
                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-xl overflow-hidden shrink-0">
                    @if($t->image)
                        <img src="{{ asset('storage/'.$t->image) }}" class="w-full h-full object-cover">
                    @else
                        {{ substr($t->client_name, 0, 1) }}
                    @endif
                </div>
                <div class="ms-4">
                    <p class="font-bold text-gray-900 text-lg">{{ $t->client_name }}</p>
                    <p class="text-gray-500">{{ $t->client_role ? $t->client_role.', ' : '' }} {{ $t->company }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Stats Section -->
<div class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div data-aos="zoom-in" data-aos-delay="0">
            <div class="text-4xl md:text-5xl font-extrabold mb-2 drop-shadow-md">{{ app()->getLocale() == 'ar' ? ($settings['stat1_num_ar'] ?? $settings['stat1_num'] ?? '10+') : ($settings['stat1_num'] ?? '10+') }}</div>
            <div class="text-white opacity-80 font-bold uppercase tracking-wider text-sm">{{ app()->getLocale() == 'ar' ? ($settings['stat1_label_ar'] ?? $settings['stat1_label'] ?? 'Years Experience') : ($settings['stat1_label'] ?? 'Years Experience') }}</div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="100">
            <div class="text-4xl md:text-5xl font-extrabold mb-2 drop-shadow-md">{{ app()->getLocale() == 'ar' ? ($settings['stat2_num_ar'] ?? $settings['stat2_num'] ?? '500+') : ($settings['stat2_num'] ?? '500+') }}</div>
            <div class="text-white opacity-80 font-bold uppercase tracking-wider text-sm">{{ app()->getLocale() == 'ar' ? ($settings['stat2_label_ar'] ?? $settings['stat2_label'] ?? 'Projects Done') : ($settings['stat2_label'] ?? 'Projects Done') }}</div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="200">
            <div class="text-4xl md:text-5xl font-extrabold mb-2 drop-shadow-md">{{ app()->getLocale() == 'ar' ? ($settings['stat3_num_ar'] ?? $settings['stat3_num'] ?? '150+') : ($settings['stat3_num'] ?? '150+') }}</div>
            <div class="text-white opacity-80 font-bold uppercase tracking-wider text-sm">{{ app()->getLocale() == 'ar' ? ($settings['stat3_label_ar'] ?? $settings['stat3_label'] ?? 'Happy Clients') : ($settings['stat3_label'] ?? 'Happy Clients') }}</div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="300">
            <div class="text-4xl md:text-5xl font-extrabold mb-2 drop-shadow-md">{{ app()->getLocale() == 'ar' ? ($settings['stat4_num_ar'] ?? $settings['stat4_num'] ?? '24/7') : ($settings['stat4_num'] ?? '24/7') }}</div>
            <div class="text-white opacity-80 font-bold uppercase tracking-wider text-sm">{{ app()->getLocale() == 'ar' ? ($settings['stat4_label_ar'] ?? $settings['stat4_label'] ?? 'Support') : ($settings['stat4_label'] ?? 'Support') }}</div>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="max-w-5xl mx-auto px-4 py-24 text-center">
    <div class="bg-gray-900 rounded-3xl p-8 md:p-20 shadow-2xl relative overflow-hidden" data-aos="zoom-in">
        <div class="absolute inset-0 bg-primary opacity-10"></div>
        <div class="absolute top-0 end-0 -me-16 -mt-16 w-64 h-64 rounded-full bg-primary opacity-20 blur-3xl"></div>
        <div class="relative z-10">
            <h2 class="text-4xl md:text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">{{ app()->getLocale() == 'ar' ? ($settings['cta_title_ar'] ?? $settings['cta_title'] ?? 'Ready to start your next big project?') : ($settings['cta_title'] ?? 'Ready to start your next big project?') }}</h2>
            <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto font-light">{{ app()->getLocale() == 'ar' ? ($settings['cta_subtitle_ar'] ?? $settings['cta_subtitle'] ?? 'Get in touch with us today and let\'s build something amazing together.') : ($settings['cta_subtitle'] ?? 'Get in touch with us today and let\'s build something amazing together.') }}</p>
            <a href="#contact" class="inline-block bg-primary text-white font-bold text-lg py-4 px-10 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition transform">{{ app()->getLocale() == 'ar' ? ($settings['cta_btn_text_ar'] ?? $settings['cta_btn_text'] ?? 'Let\'s Talk') : ($settings['cta_btn_text'] ?? 'Let\'s Talk') }}</a>
        </div>
    </div>
</div>

<!-- Contact Form -->
<div id="contact" class="bg-gray-900 text-white py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
    <div class="max-w-4xl mx-auto px-4 relative z-10" data-aos="zoom-in-up">
        <h2 class="text-4xl md:text-4xl md:text-5xl font-extrabold mb-4 text-center tracking-tight">{{ app()->getLocale() == 'ar' ? ($settings['contact_title_ar'] ?? $settings['contact_title'] ?? __('messages.contact')) : ($settings['contact_title'] ?? __('messages.contact')) }}</h2>
        <div class="w-24 h-1 bg-primary mx-auto mb-6 rounded-full"></div>
        <p class="text-center text-gray-400 text-xl mb-12">{{ app()->getLocale() == 'ar' ? ($settings['contact_subtitle_ar'] ?? $settings['contact_subtitle'] ?? 'Have a project in mind? Let\'s talk.') : ($settings['contact_subtitle'] ?? 'Have a project in mind? Let\'s talk.') }}</p>
        
        <div id="contact-alert" class="hidden mb-6 p-4 rounded text-white font-bold text-center border"></div>
        
        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="bg-white text-gray-900 p-10 rounded-2xl shadow-2xl">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">{{ __('messages.name') }}</label>
                    <input type="text" name="name" class="border border-gray-300 p-4 rounded-xl w-full focus:ring-2 focus:ring-primary outline-none bg-gray-50 transition" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">{{ __('messages.email') }}</label>
                    <input type="email" name="email" class="border border-gray-300 p-4 rounded-xl w-full focus:ring-2 focus:ring-primary outline-none bg-gray-50 transition" required>
                </div>
            </div>
            <div class="mb-8">
                <label class="block text-sm font-bold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الموضوع' : 'Subject' }}</label>
                <input type="text" name="subject" class="border border-gray-300 p-4 rounded-xl w-full focus:ring-2 focus:ring-primary outline-none bg-gray-50 transition">
            </div>
            <div class="mb-8">
                <label class="block text-sm font-bold text-gray-700 mb-2">{{ __('messages.message') }}</label>
                <textarea name="message" class="border border-gray-300 p-4 rounded-xl w-full h-40 focus:ring-2 focus:ring-primary outline-none bg-gray-50 transition resize-none" required></textarea>
            </div>
            <button type="submit" class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-lg w-full hover:bg-primary transition transform hover:-translate-y-1 shadow-lg">{{ __('messages.send_message') }}</button>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        let form = $(this);
        let alert = $('#contact-alert');
        let btn = form.find('button');
        btn.text('Sending...').prop('disabled', true);
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function(res) {
                alert.removeClass('hidden bg-red-500 border-red-600').addClass('bg-green-500 border-green-600').text(res.success).slideDown();
                form[0].reset();
                setTimeout(() => alert.slideUp(), 5000);
                btn.text('{{ __('messages.send_message') }}').prop('disabled', false);
            },
            error: function() {
                alert.removeClass('hidden bg-green-500 border-green-600').addClass('bg-red-500 border-red-600').text('An error occurred. Please try again.').slideDown();
                btn.text('{{ __('messages.send_message') }}').prop('disabled', false);
            }
        });
    });
</script>
@endpush