@extends('layouts.admin')
@section('content')
<div class="bg-white rounded shadow p-6 mb-10">
    <h2 class="text-2xl font-bold mb-4">{{ __('messages.settings') }}</h2>
    <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST" class="ajax-form">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- General & Colors -->
            <div>
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">{{ app()->getLocale() == 'ar' ? base64_decode('2LnYp9mFINmI2KfZhNmF2LjZh9ix') : 'General & Appearance' }}</h3>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfYs9mFINin2YTYtNix2YPYqSAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Company Name (EN)' }}</label><input type="text" name="settings[company_name]" value="{{ $settings['company_name'] ?? 'Portfolio' }}" class="border rounded w-full p-2"></div>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfYs9mFINin2YTYtNix2YPYqSAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Company Name (AR)' }}</label><input type="text" name="settings[company_name_ar]" value="{{ $settings['company_name_ar'] ?? 'Portfolio' }}" class="border rounded w-full p-2"></div>
</div>
                <div class="mb-4"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmE2YjZhiDYp9mE2KPYs9in2LPZig==') : 'Primary Color' }}</label><input type="color" name="settings[primary_color]" value="{{ $settings['primary_color'] ?? '#2563eb' }}" class="border rounded p-1 w-full h-10 cursor-pointer"></div>
                                <div class="mb-4"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KjYsdmK2K8g2KfZhNiq2YjYp9i12YQ=') : 'Contact Email' }}</label><input type="email" name="settings[contact_email]" value="{{ $settings['contact_email'] ?? 'info@example.com' }}" class="border rounded w-full p-2"></div>
                <div class="mb-4"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTZh9in2KrZgQ==') : 'Phone Number' }}</label><input type="text" name="settings[contact_phone]" value="{{ $settings['contact_phone'] ?? '+1 234 567 890' }}" class="border rounded w-full p-2"></div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNi52YbZiNin2YYgKNio2KfZhNil2YbYrNmE2YrYstmK2Kkp') : 'Address (EN)' }}</label><input type="text" name="settings[contact_address]" value="{{ $settings['contact_address'] ?? '123 Business Avenue, Tech City' }}" class="border rounded w-full p-2"></div>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNi52YbZiNin2YYgKNio2KfZhNi52LHYqNmK2Kkp') : 'Address (AR)' }}</label><input type="text" name="settings[contact_address_ar]" value="{{ $settings['contact_address_ar'] ?? '123 Business Avenue, Tech City' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">Footer About Text (EN)</label><textarea name="settings[footer_about]" class="border rounded w-full p-2 h-24">{{ $settings['footer_about'] ?? 'We are a dedicated team of professionals delivering top-notch solutions.' }}</textarea></div>
                <div class=""><label class="block font-bold mb-1">Footer About Text (AR)</label><textarea name="settings[footer_about_ar]" class="border rounded w-full p-2 h-24">{{ $settings['footer_about_ar'] ?? 'We are a dedicated team of professionals delivering top-notch solutions.' }}</textarea></div>
</div>
            </div>
            
            <!-- Social Links -->
            <div>
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZiNin2KjYtyDYp9mE2KrZiNin2LXZhCDYp9mE2KfYrNiq2YXYp9i52Yo=') : 'Social Links' }}</h3>
                <div class="mb-4"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHYp9io2Lcg2YHZitiz2KjZiNmD') : 'Facebook URL' }}</label><input type="url" name="settings[facebook_link]" value="{{ $settings['facebook_link'] ?? '' }}" class="border rounded w-full p-2"></div>
                <div class="mb-4"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHYp9io2Lcg2KrZiNmK2KrYsQ==') : 'Twitter URL' }}</label><input type="url" name="settings[twitter_link]" value="{{ $settings['twitter_link'] ?? '' }}" class="border rounded w-full p-2"></div>
                <div class="mb-4"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHYp9io2Lcg2YTZitmG2YPYryDYpdmG') : 'LinkedIn URL' }}</label><input type="url" name="settings[linkedin_link]" value="{{ $settings['linkedin_link'] ?? '' }}" class="border rounded w-full p-2"></div>
            </div>

            <!-- Hero Section -->
            <div>
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">{{ app()->getLocale() == 'ar' ? base64_decode('2YLYs9mFINin2YTZiNin2KzZh9ipIChIZXJvKQ==') : 'Hero Section' }}</h3>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2YjYp9is2YfYqSAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Hero Title (EN)' }}</label><input type="text" name="settings[hero_title]" value="{{ $settings['hero_title'] ?? 'Welcome to Our Company' }}" class="border rounded w-full p-2"></div>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2YjYp9is2YfYqSAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Hero Title (AR)' }}</label><input type="text" name="settings[hero_title_ar]" value="{{ $settings['hero_title_ar'] ?? 'Welcome to Our Company' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmI2LXZgSDYp9mE2YHYsdi52Yog2YTZhNmI2KfYrNmH2KkgKNio2KfZhNil2YbYrNmE2YrYstmK2Kkp') : 'Hero Subtitle (EN)' }}</label><textarea name="settings[hero_subtitle]" class="border rounded w-full p-2 h-20">{{ $settings['hero_subtitle'] ?? 'We build professional and scalable solutions for modern businesses.' }}</textarea></div>
                <div class=""><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmI2LXZgSDYp9mE2YHYsdi52Yog2YTZhNmI2KfYrNmH2KkgKNio2KfZhNi52LHYqNmK2Kkp') : 'Hero Subtitle (AR)' }}</label><textarea name="settings[hero_subtitle_ar]" class="border rounded w-full p-2 h-20">{{ $settings['hero_subtitle_ar'] ?? 'We build professional and scalable solutions for modern businesses.' }}</textarea></div>
</div>
            </div>

            <!-- Services Overview Section -->
            <div>
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">About / Services Section</h3>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">Section Title (EN)</label><input type="text" name="settings[about_title]" value="{{ $settings['about_title'] ?? 'What We Do' }}" class="border rounded w-full p-2"></div>
                <div class=""><label class="block font-bold mb-1">Section Title (AR)</label><input type="text" name="settings[about_title_ar]" value="{{ $settings['about_title_ar'] ?? 'What We Do' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                <div class=""><label class="block font-bold mb-1">Section Description (EN)</label><textarea name="settings[about_description]" class="border rounded w-full p-2">{{ $settings['about_description'] ?? 'We deliver outstanding results across 3 key areas.' }}</textarea></div>
                <div class=""><label class="block font-bold mb-1">Section Description (AR)</label><textarea name="settings[about_description_ar]" class="border rounded w-full p-2">{{ $settings['about_description_ar'] ?? 'We deliver outstanding results across 3 key areas.' }}</textarea></div>
</div>
            </div>

            <!-- Services Cards -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">Services Cards (3 Columns)</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">Card 1 Title (EN)</label><input type="text" name="settings[srv1_title]" value="{{ $settings['srv1_title'] ?? 'Web Design' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">Card 1 Title (AR)</label><input type="text" name="settings[srv1_title_ar]" value="{{ $settings['srv1_title_ar'] ?? 'Web Design' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">Card 1 Text (EN)</label><textarea name="settings[srv1_text]" class="border rounded w-full p-2">{{ $settings['srv1_text'] ?? 'Beautiful, responsive designs tailored to your brand.' }}</textarea>
                        <label class="block font-bold mb-1">Card 1 Text (AR)</label><textarea name="settings[srv1_text_ar]" class="border rounded w-full p-2">{{ $settings['srv1_text_ar'] ?? 'Beautiful, responsive designs tailored to your brand.' }}</textarea>
</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">Card 2 Title (EN)</label><input type="text" name="settings[srv2_title]" value="{{ $settings['srv2_title'] ?? 'Development' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">Card 2 Title (AR)</label><input type="text" name="settings[srv2_title_ar]" value="{{ $settings['srv2_title_ar'] ?? 'Development' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">Card 2 Text (EN)</label><textarea name="settings[srv2_text]" class="border rounded w-full p-2">{{ $settings['srv2_text'] ?? 'Robust and scalable web applications built from scratch.' }}</textarea>
                        <label class="block font-bold mb-1">Card 2 Text (AR)</label><textarea name="settings[srv2_text_ar]" class="border rounded w-full p-2">{{ $settings['srv2_text_ar'] ?? 'Robust and scalable web applications built from scratch.' }}</textarea>
</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">Card 3 Title (EN)</label><input type="text" name="settings[srv3_title]" value="{{ $settings['srv3_title'] ?? 'Marketing' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">Card 3 Title (AR)</label><input type="text" name="settings[srv3_title_ar]" value="{{ $settings['srv3_title_ar'] ?? 'Marketing' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">Card 3 Text (EN)</label><textarea name="settings[srv3_text]" class="border rounded w-full p-2">{{ $settings['srv3_text'] ?? 'Growth-driven marketing strategies for modern platforms.' }}</textarea>
                        <label class="block font-bold mb-1">Card 3 Text (AR)</label><textarea name="settings[srv3_text_ar]" class="border rounded w-full p-2">{{ $settings['srv3_text_ar'] ?? 'Growth-driven marketing strategies for modern platforms.' }}</textarea>
</div>
                    </div>
                </div>
            </div>

                        <!-- Stats Section -->
            <div class="col-span-1 md:col-span-2 mt-4">
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">Company Stats / Numbers</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSAxICjYqNin2YTYpdmG2KzZhNmK2LLZitipKQ==') : 'Stat 1 Number (EN)' }}</label><input type="text" name="settings[stat1_num]" value="{{ $settings['stat1_num'] ?? '10+' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSAxICjYqNin2YTYudix2KjZitipKQ==') : 'Stat 1 Number (AR)' }}</label><input type="text" name="settings[stat1_num_ar]" value="{{ $settings['stat1_num_ar'] ?? '10+' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgMSAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Stat 1 Label (EN)' }}</label><input type="text" name="settings[stat1_label]" value="{{ $settings['stat1_label'] ?? 'Years Experience' }}" class="border rounded w-full p-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgMSAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Stat 1 Label (AR)' }}</label><input type="text" name="settings[stat1_label_ar]" value="{{ $settings['stat1_label_ar'] ?? 'Years Experience' }}" class="border rounded w-full p-2">
</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSAyICjYqNin2YTYpdmG2KzZhNmK2LLZitipKQ==') : 'Stat 2 Number (EN)' }}</label><input type="text" name="settings[stat2_num]" value="{{ $settings['stat2_num'] ?? '500+' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSAyICjYqNin2YTYudix2KjZitipKQ==') : 'Stat 2 Number (AR)' }}</label><input type="text" name="settings[stat2_num_ar]" value="{{ $settings['stat2_num_ar'] ?? '500+' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgMiAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Stat 2 Label (EN)' }}</label><input type="text" name="settings[stat2_label]" value="{{ $settings['stat2_label'] ?? 'Projects Done' }}" class="border rounded w-full p-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgMiAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Stat 2 Label (AR)' }}</label><input type="text" name="settings[stat2_label_ar]" value="{{ $settings['stat2_label_ar'] ?? 'Projects Done' }}" class="border rounded w-full p-2">
</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSAzICjYqNin2YTYpdmG2KzZhNmK2LLZitipKQ==') : 'Stat 3 Number (EN)' }}</label><input type="text" name="settings[stat3_num]" value="{{ $settings['stat3_num'] ?? '150+' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSAzICjYqNin2YTYudix2KjZitipKQ==') : 'Stat 3 Number (AR)' }}</label><input type="text" name="settings[stat3_num_ar]" value="{{ $settings['stat3_num_ar'] ?? '150+' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgMyAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Stat 3 Label (EN)' }}</label><input type="text" name="settings[stat3_label]" value="{{ $settings['stat3_label'] ?? 'Happy Clients' }}" class="border rounded w-full p-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgMyAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Stat 3 Label (AR)' }}</label><input type="text" name="settings[stat3_label_ar]" value="{{ $settings['stat3_label_ar'] ?? 'Happy Clients' }}" class="border rounded w-full p-2">
</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded border">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSA0ICjYqNin2YTYpdmG2KzZhNmK2LLZitipKQ==') : 'Stat 4 Number (EN)' }}</label><input type="text" name="settings[stat4_num]" value="{{ $settings['stat4_num'] ?? '24/7' }}" class="border rounded w-full p-2 mb-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LHZgtmFINin2YTYpdit2LXYp9im2YrYqSA0ICjYqNin2YTYudix2KjZitipKQ==') : 'Stat 4 Number (AR)' }}</label><input type="text" name="settings[stat4_num_ar]" value="{{ $settings['stat4_num_ar'] ?? '24/7' }}" class="border rounded w-full p-2 mb-2">
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgNCAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Stat 4 Label (EN)' }}</label><input type="text" name="settings[stat4_label]" value="{{ $settings['stat4_label'] ?? 'Support' }}" class="border rounded w-full p-2">
                        <label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KXYrdi12KfYptmK2KkgNCAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Stat 4 Label (AR)' }}</label><input type="text" name="settings[stat4_label_ar]" value="{{ $settings['stat4_label_ar'] ?? 'Support' }}" class="border rounded w-full p-2">
</div>
                    </div>
                </div>
            </div>

            <!-- Call To Action Section -->
            <div class="col-span-1 md:col-span-2 mt-4">
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">{{ app()->getLocale() == 'ar' ? base64_decode('2KjYp9mG2LEg2KfZhNiv2LnZiNipINmE2KfYqtiu2KfYsCDYpdis2LHYp9ihIChDVEEp') : 'Call To Action (CTA) Banner' }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KjYp9mG2LEgKNio2KfZhNil2YbYrNmE2YrYstmK2Kkp') : 'CTA Title (EN)' }}</label><input type="text" name="settings[cta_title]" value="{{ $settings['cta_title'] ?? 'Ready to start your next big project?' }}" class="border rounded w-full p-2"></div>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDYp9mE2KjYp9mG2LEgKNio2KfZhNi52LHYqNmK2Kkp') : 'CTA Title (AR)' }}</label><input type="text" name="settings[cta_title_ar]" value="{{ $settings['cta_title_ar'] ?? 'Ready to start your next big project?' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2YbYtSDYstixINin2YTYqNin2YbYsSAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'CTA Button Text (EN)' }}</label><input type="text" name="settings[cta_btn_text]" value="{{ $settings['cta_btn_text'] ?? 'Let\'s Talk' }}" class="border rounded w-full p-2"></div>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2YbYtSDYstixINin2YTYqNin2YbYsSAo2KjYp9mE2LnYsdio2YrYqSk=') : 'CTA Button Text (AR)' }}</label><input type="text" name="settings[cta_btn_text_ar]" value="{{ $settings['cta_btn_text_ar'] ?? 'Let\'s Talk' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div class="col-span-full"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmI2LXZgSDYp9mE2YHYsdi52Yog2YTZhNio2KfZhtixICjYqNin2YTYpdmG2KzZhNmK2LLZitipKQ==') : 'CTA Subtitle (EN)' }}</label><textarea name="settings[cta_subtitle]" class="border rounded w-full p-2">{{ $settings['cta_subtitle'] ?? 'Get in touch with us today and let\'s build something amazing together.' }}</textarea></div>
                    <div class="col-span-full"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmI2LXZgSDYp9mE2YHYsdi52Yog2YTZhNio2KfZhtixICjYqNin2YTYudix2KjZitipKQ==') : 'CTA Subtitle (AR)' }}</label><textarea name="settings[cta_subtitle_ar]" class="border rounded w-full p-2">{{ $settings['cta_subtitle_ar'] ?? 'Get in touch with us today and let\'s build something amazing together.' }}</textarea></div>
</div>
                </div>
            </div>

            <!-- Other Sections Titles -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="font-bold text-lg mb-3 border-b pb-2 text-primary">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtin2YjZitmGINin2YTYo9mC2LPYp9mFINin2YTYo9iu2LHZiQ==') : 'Other Sections Titles' }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDZgtiz2YUg2KfZhNmF2LTYp9ix2YrYuSAo2KjYp9mE2KXZhtis2YTZitiy2YrYqSk=') : 'Projects Title (EN)' }}</label><input type="text" name="settings[projects_title]" value="{{ $settings['projects_title'] ?? 'Featured Projects' }}" class="border rounded w-full p-2"></div>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDZgtiz2YUg2KfZhNmF2LTYp9ix2YrYuSAo2KjYp9mE2LnYsdio2YrYqSk=') : 'Projects Title (AR)' }}</label><input type="text" name="settings[projects_title_ar]" value="{{ $settings['projects_title_ar'] ?? 'Featured Projects' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDZgtiz2YUg2KLYsdin2KEg2KfZhNi52YXZhNin2KEgKNio2KfZhNil2YbYrNmE2YrYstmK2Kkp') : 'Testimonials Title (EN)' }}</label><input type="text" name="settings[testimonials_title]" value="{{ $settings['testimonials_title'] ?? 'What Our Clients Say' }}" class="border rounded w-full p-2"></div>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDZgtiz2YUg2KLYsdin2KEg2KfZhNi52YXZhNin2KEgKNio2KfZhNi52LHYqNmK2Kkp') : 'Testimonials Title (AR)' }}</label><input type="text" name="settings[testimonials_title_ar]" value="{{ $settings['testimonials_title_ar'] ?? 'What Our Clients Say' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDZgtiz2YUg2KfZhNiq2YjYp9i12YQgKNio2KfZhNil2YbYrNmE2YrYstmK2Kkp') : 'Contact Title (EN)' }}</label><input type="text" name="settings[contact_title]" value="{{ $settings['contact_title'] ?? 'Get In Touch' }}" class="border rounded w-full p-2"></div>
                    <div><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2LnZhtmI2KfZhiDZgtiz2YUg2KfZhNiq2YjYp9i12YQgKNio2KfZhNi52LHYqNmK2Kkp') : 'Contact Title (AR)' }}</label><input type="text" name="settings[contact_title_ar]" value="{{ $settings['contact_title_ar'] ?? 'Get In Touch' }}" class="border rounded w-full p-2"></div>
</div>
<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-2'>
                    <div class="col-span-full"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmI2LXZgSDYp9mE2YHYsdi52Yog2YTZgtiz2YUg2KfZhNiq2YjYp9i12YQgKNio2KfZhNil2YbYrNmE2YrYstmK2Kkp') : 'Contact Subtitle (EN)' }}</label><input type="text" name="settings[contact_subtitle]" value="{{ $settings['contact_subtitle'] ?? 'Have a project in mind? Let\'s talk.' }}" class="border rounded w-full p-2"></div>
                    <div class="col-span-full"><label class="block font-bold mb-1">{{ app()->getLocale() == 'ar' ? base64_decode('2KfZhNmI2LXZgSDYp9mE2YHYsdi52Yog2YTZgtiz2YUg2KfZhNiq2YjYp9i12YQgKNio2KfZhNi52LHYqNmK2Kkp') : 'Contact Subtitle (AR)' }}</label><input type="text" name="settings[contact_subtitle_ar]" value="{{ $settings['contact_subtitle_ar'] ?? 'Have a project in mind? Let\'s talk.' }}" class="border rounded w-full p-2"></div>
</div>
                </div>
            </div>
        </div>
        <button type="submit" class="bg-primary text-white font-bold py-3 px-8 rounded mt-8 hover:bg-primary w-full md:w-auto shadow-lg">{{ __('messages.save') }}</button>
    </form>
</div>
@endsection