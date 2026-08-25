<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('meta_title', app()->getLocale() == 'ar' ? ($settings['seo_title_ar'] ?? $settings['seo_title_en'] ?? 'Portfolio') : ($settings['seo_title_en'] ?? 'Portfolio'))</title>
    <meta name="description" content="@yield('meta_description', app()->getLocale() == 'ar' ? ($settings['seo_desc_ar'] ?? $settings['seo_desc_en'] ?? '') : ($settings['seo_desc_en'] ?? ''))">
    <meta name="keywords" content="@yield('meta_keywords', app()->getLocale() == 'ar' ? ($settings['seo_keywords_ar'] ?? $settings['seo_keywords_en'] ?? '') : ($settings['seo_keywords_en'] ?? ''))">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="@yield('meta_title', app()->getLocale() == 'ar' ? ($settings['seo_title_ar'] ?? $settings['seo_title_en'] ?? 'Portfolio') : ($settings['seo_title_en'] ?? 'Portfolio'))">
    <meta property="og:description" content="@yield('meta_description', app()->getLocale() == 'ar' ? ($settings['seo_desc_ar'] ?? $settings['seo_desc_en'] ?? '') : ($settings['seo_desc_en'] ?? ''))">
    <meta property="og:image" content="@yield('meta_image', isset($settings['og_image']) ? asset('storage/' . $settings['og_image']) : '')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('meta_type', 'website')">
    
    <!-- Tracking Codes -->
    @if(!empty($settings['google_analytics']))
        {!! $settings['google_analytics'] !!}
    @endif
    @if(!empty($settings['facebook_pixel']))
        {!! $settings['facebook_pixel'] !!}
    @endif
    @if(!empty($settings['google_adsense']))
        {!! $settings['google_adsense'] !!}
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
:root {
    --primary-color: {{ $settings['primary_color'] ?? '#2563eb' }};
}
</style>
</head>
<body class="font-sans text-gray-900 bg-gray-50 flex flex-col min-h-screen">
        <nav class="bg-white shadow relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-extrabold text-primary tracking-tight">{{ $settings['company_name'] ?? 'Portfolio' }}</a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-primary font-medium transition">{{ __('messages.home') }}</a>
                    <a href="{{ route('portfolio.index') }}" class="text-gray-600 hover:text-primary font-medium transition">{{ __('messages.portfolio') }}</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-primary font-medium transition">{{ __('messages.blog') }}</a>
                    <a href="{{ route('home') }}#contact" class="bg-primary text-white px-6 py-2 rounded-full font-bold shadow hover:shadow-lg transition">{{ __('messages.contact_button') }}</a>
                    <a href="{{ route('lang.switch', app()->getLocale() == 'en' ? 'ar' : 'en') }}" class="ms-4 text-gray-600 hover:text-primary font-bold transition flex items-center">
                        <svg class="w-5 h-5 me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                        {{ app()->getLocale() == 'en' ? 'عربي' : 'EN' }}
                    </a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-primary focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full shadow-lg">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="{{ route('home') }}" class="block px-3 py-3 rounded-md text-base font-bold text-gray-800 hover:text-primary hover:bg-gray-50">{{ __('messages.home') }}</a>
                <a href="{{ route('portfolio.index') }}" class="block px-3 py-3 rounded-md text-base font-bold text-gray-800 hover:text-primary hover:bg-gray-50">{{ __('messages.portfolio') }}</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-3 rounded-md text-base font-bold text-gray-800 hover:text-primary hover:bg-gray-50">{{ __('messages.blog') }}</a>
                <a href="{{ route('home') }}#contact" class="block px-3 py-3 rounded-md text-base font-bold text-primary hover:bg-gray-50">{{ __('messages.contact') }}</a>
                <a href="{{ route('lang.switch', app()->getLocale() == 'en' ? 'ar' : 'en') }}" class="block px-3 py-3 rounded-md text-base font-bold text-gray-800 hover:text-primary hover:bg-gray-50 flex items-center">
                    <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    {{ app()->getLocale() == 'en' ? 'Switch to Arabic (عربي)' : 'Switch to English (EN)' }}
                </a>
            </div>
        </div>
    </nav>
    <main class="flex-grow">
        @yield('content')
    </main>
        <footer class="bg-gray-900 text-gray-300 py-16 border-t-4 border-primary">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Col 1: About -->
                <div>
                    <h3 class="text-2xl font-extrabold text-white mb-6">{{ $settings['company_name'] ?? 'Portfolio' }}</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">{{ app()->getLocale() == 'ar' ? ($settings['footer_about_ar'] ?? $settings['footer_about'] ?? 'We are a dedicated team of professionals delivering top-notch solutions.') : ($settings['footer_about'] ?? 'We are a dedicated team of professionals delivering top-notch solutions.') }}</p>
                    <div class="flex space-x-4">
                        @if(!empty($settings['facebook_link'])) <a href="{{ $settings['facebook_link'] }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-white transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a> @endif
                        @if(!empty($settings['twitter_link'])) <a href="{{ $settings['twitter_link'] }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-white transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a> @endif
                        @if(!empty($settings['linkedin_link'])) <a href="{{ $settings['linkedin_link'] }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-white transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a> @endif
                    </div>
                </div>
                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">{{ __('messages.quick_links') }}</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-primary transition">{{ __('messages.home') }}</a></li>
                        <li><a href="{{ route('portfolio.index') }}" class="text-gray-400 hover:text-primary transition">{{ __('messages.portfolio') }}</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-primary transition">{{ __('messages.blog_posts') }}</a></li>
                        <li><a href="{{ route('home') }}#contact" class="text-gray-400 hover:text-primary transition">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>
                <!-- Col 3: Services -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">{{ __('messages.our_services') }}</h4>
                    <ul class="space-y-3">
                        <li class="text-gray-400">{{ app()->getLocale() == 'ar' ? ($settings['srv1_title_ar'] ?? $settings['srv1_title'] ?? 'Web Design') : ($settings['srv1_title'] ?? 'Web Design') }}</li>
                        <li class="text-gray-400">{{ app()->getLocale() == 'ar' ? ($settings['srv2_title_ar'] ?? $settings['srv2_title'] ?? 'Development') : ($settings['srv2_title'] ?? 'Development') }}</li>
                        <li class="text-gray-400">{{ app()->getLocale() == 'ar' ? ($settings['srv3_title_ar'] ?? $settings['srv3_title'] ?? 'Marketing') : ($settings['srv3_title'] ?? 'Marketing') }}</li>
                    </ul>
                </div>
                <!-- Col 4: Contact Info -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">{{ __('messages.contact') }}</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary me-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span class="text-gray-400 break-all">{{ $settings['contact_email'] ?? 'info@example.com' }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary me-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span class="text-gray-400">{{ $settings['contact_phone'] ?? '+1 234 567 890' }}</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary me-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-gray-400">{{ app()->getLocale() == 'ar' ? ($settings['contact_address_ar'] ?? $settings['contact_address'] ?? '123 Business Avenue, Tech City') : ($settings['contact_address'] ?? '123 Business Avenue, Tech City') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-4 md:mb-0">{{ app()->getLocale() == 'ar' ? ($settings['footer_text_ar'] ?? $settings['footer_text'] ?? '© ' . date('Y') . ' Company Name. All rights reserved.') : ($settings['footer_text'] ?? '© ' . date('Y') . ' Company Name. All rights reserved.') }}</p>
                <div class="text-gray-500 text-sm">
                    {{ app()->getLocale() == 'ar' ? 'تم التصميم بـ' : 'Designed with' }} <svg class="w-4 h-4 text-red-500 inline mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg> {{ app()->getLocale() == 'ar' ? 'باستخدام Tailwind CSS' : 'using Tailwind CSS' }}
                </div>
            </div>
        </div>
    </footer>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ duration: 800, once: true });</script>
    @stack('scripts')
    <script>
        $(document).ready(function() {
            $('#mobile-menu-btn').click(function() {
                $('#mobile-menu').slideToggle('fast');
            });
            // Close mobile menu when clicking a link
            $('#mobile-menu a').click(function() {
                $('#mobile-menu').slideUp('fast');
            });
        });
    </script>
</body>
</html>