@extends('layouts.admin')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-extrabold text-gray-900 mb-2">{{ __('messages.seo_tracking') ?? 'SEO & Tracking' }}</h1>
    <p class="text-gray-600">{{ app()->getLocale() == 'ar' ? 'قم بإدارة ظهور موقعك في محركات البحث وإدراج أكواد التتبع (Analytics، Pixel، Adsense) بأمان.' : 'Manage your website\'s search engine visibility and insert tracking scripts (Analytics, Pixel, Adsense) securely.' }}</p>
</div>

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="ajax-form ajax-reload">
    
    <!-- General SEO Settings -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-6 h-6 me-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            {{ app()->getLocale() == 'ar' ? 'إعدادات السيو العامة (Meta Tags)' : 'Global SEO Meta Tags' }}
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'عنوان الموقع (بالإنجليزية)' : 'Site Title (EN)' }} <span class="text-xs text-gray-400 font-normal ml-2">{{ app()->getLocale() == 'ar' ? 'يستخدم في تبويبات المتصفح ونتائج البحث' : 'Used in browser tabs and search results' }}</span></label>
                <input type="text" name="settings[seo_title_en]" value="{{ $settings['seo_title_en'] ?? '' }}" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 focus:border-primary transition" placeholder="e.g. My Amazing Portfolio">
            </div>
            <div>
                <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'عنوان الموقع (بالعربية)' : 'Site Title (AR)' }}</label>
                <input type="text" name="settings[seo_title_ar]" value="{{ $settings['seo_title_ar'] ?? '' }}" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 focus:border-primary transition" placeholder="{{ app()->getLocale() == 'ar' ? 'مثال: معرض أعمالي' : 'e.g. My Amazing Portfolio' }}">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'وصف الموقع (بالإنجليزية)' : 'Meta Description (EN)' }} <span class="text-xs text-gray-400 font-normal ml-2">{{ app()->getLocale() == 'ar' ? 'أفضل طول هو 150-160 حرف' : '150-160 characters best' }}</span></label>
                <textarea name="settings[seo_desc_en]" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 focus:border-primary transition h-24" placeholder="Brief description of your website...">{{ $settings['seo_desc_en'] ?? '' }}</textarea>
            </div>
            <div>
                <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'وصف الموقع (بالعربية)' : 'Meta Description (AR)' }}</label>
                <textarea name="settings[seo_desc_ar]" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 focus:border-primary transition h-24" placeholder="{{ app()->getLocale() == 'ar' ? 'وصف قصير لموقعك...' : 'Brief description of your website...' }}">{{ $settings['seo_desc_ar'] ?? '' }}</textarea>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'الكلمات المفتاحية (بالإنجليزية)' : 'Meta Keywords (EN)' }} <span class="text-xs text-gray-400 font-normal ml-2">{{ app()->getLocale() == 'ar' ? 'مفصولة بفاصلة' : 'Comma separated' }}</span></label>
                <input type="text" name="settings[seo_keywords_en]" value="{{ $settings['seo_keywords_en'] ?? '' }}" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 focus:border-primary transition" placeholder="portfolio, web design, development">
            </div>
            <div>
                <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'الكلمات المفتاحية (بالعربية)' : 'Meta Keywords (AR)' }}</label>
                <input type="text" name="settings[seo_keywords_ar]" value="{{ $settings['seo_keywords_ar'] ?? '' }}" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 focus:border-primary transition" placeholder="{{ app()->getLocale() == 'ar' ? 'تصميم مواقع، تطوير، معرض أعمال' : 'portfolio, web design, development' }}">
            </div>
        </div>
        
        <div class="mb-4">
            <label class="block font-bold mb-2 text-gray-700">{{ app()->getLocale() == 'ar' ? 'صورة المشاركة الافتراضية (OG:Image)' : 'Default Open Graph Image (OG:Image)' }} <span class="text-xs text-gray-400 font-normal ml-2">{{ app()->getLocale() == 'ar' ? 'تظهر عند مشاركة رابط الموقع على فيسبوك/واتساب' : 'Shows when sharing site link on Facebook/WhatsApp' }}</span></label>
            @if(isset($settings['og_image']))
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $settings['og_image']) }}" alt="OG Image" class="w-48 rounded shadow">
                </div>
            @endif
            <input type="file" name="settings[og_image]" class="border rounded-lg w-full py-2 px-3 focus:ring focus:ring-primary/20 transition">
        </div>
    </div>

    <!-- Tracking Codes Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-6 h-6 me-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            {{ app()->getLocale() == 'ar' ? 'أكواد التتبع وتحقيق الدخل' : 'Tracking & Monetization' }}
        </h2>
        
        <div class="mb-6">
            <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'إحصاءات جوجل (Google Analytics / Tag Manager)' : 'Google Analytics / Tag Manager (Inside <head>)' }}</label>
            <p class="text-sm text-gray-500 mb-2">{{ app()->getLocale() == 'ar' ? 'ضع كود التتبع هنا. سيتم إدراجه مباشرة داخل وسم <head> في جميع الصفحات.' : 'Paste your tracking script here. It will be injected directly into the head of every page.' }}</p>
            <textarea name="settings[google_analytics]" class="border rounded-lg w-full p-4 font-mono text-sm bg-gray-50 h-32 focus:ring focus:ring-primary/20 transition" placeholder="<script>...</script>">{{ $settings['google_analytics'] ?? '' }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'بيكسل فيسبوك (Facebook Pixel Code)' : 'Facebook Pixel Code (Inside <head>)' }}</label>
            <p class="text-sm text-gray-500 mb-2">{{ app()->getLocale() == 'ar' ? 'ضع كود بيكسل فيسبوك هنا لتتبع التحويلات.' : 'Paste your Meta Pixel script here to track conversions.' }}</p>
            <textarea name="settings[facebook_pixel]" class="border rounded-lg w-full p-4 font-mono text-sm bg-gray-50 h-32 focus:ring focus:ring-primary/20 transition" placeholder="<script>...</script>">{{ $settings['facebook_pixel'] ?? '' }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-1 text-gray-700">{{ app()->getLocale() == 'ar' ? 'إعلانات جوجل أَدسنس (Google Adsense)' : 'Google Adsense / Custom Head Code' }}</label>
            <p class="text-sm text-gray-500 mb-2">{{ app()->getLocale() == 'ar' ? 'ضع كود الإعلانات التلقائية أو أي كود مخصص آخر يحتاج لأن يكون داخل وسم <head>.' : 'Paste your Adsense auto-ads script or any other custom code needed in the head.' }}</p>
            <textarea name="settings[google_adsense]" class="border rounded-lg w-full p-4 font-mono text-sm bg-gray-50 h-32 focus:ring focus:ring-primary/20 transition" placeholder="<script async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXXX'></script>">{{ $settings['google_adsense'] ?? '' }}</textarea>
        </div>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-primary text-white font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-xl hover:bg-opacity-90 transition flex items-center">
            <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            {{ __('messages.save') ?? 'Save SEO Settings' }}
        </button>
    </div>
</form>

@endsection