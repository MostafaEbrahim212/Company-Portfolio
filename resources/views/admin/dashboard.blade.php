@extends('layouts.admin')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-extrabold text-gray-900 mb-2">{{ __('messages.welcome_admin') }}</h1>
    <p class="text-gray-600">{{ __('messages.dashboard_desc') }}</p>
</div>

<!-- Key Metrics -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <!-- Projects -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center hover:shadow-md transition">
        <div class="p-3 bg-blue-50 text-blue-600 rounded-lg me-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
        </div>
        <div>
            <h2 class="text-gray-500 text-sm font-bold uppercase tracking-wider">{{ __('messages.total_projects') }}</h2>
            <p class="text-3xl font-extrabold text-gray-900">{{ $stats['projects'] }}</p>
        </div>
    </div>
    <!-- Posts -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center hover:shadow-md transition">
        <div class="p-3 bg-green-50 text-green-600 rounded-lg me-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
        </div>
        <div>
            <h2 class="text-gray-500 text-sm font-bold uppercase tracking-wider">{{ __('messages.blog_posts') }}</h2>
            <p class="text-3xl font-extrabold text-gray-900">{{ $stats['posts'] }}</p>
        </div>
    </div>
    <!-- Messages -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center hover:shadow-md transition">
        <div class="p-3 bg-purple-50 text-purple-600 rounded-lg me-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </div>
        <div>
            <h2 class="text-gray-500 text-sm font-bold uppercase tracking-wider">{{ __('messages.inbox') }}</h2>
            <p class="text-3xl font-extrabold text-gray-900">{{ $stats['messages'] }}</p>
        </div>
    </div>
    <!-- {{ __('messages.unread_messages') }} -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center hover:shadow-md transition relative overflow-hidden">
        @if($stats['unread_messages'] > 0)
            <div class="absolute top-0 end-0 w-2 h-full bg-red-500"></div>
        @endif
        <div class="p-3 bg-red-50 text-red-600 rounded-lg me-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
        </div>
        <div>
            <h2 class="text-gray-500 text-sm font-bold uppercase tracking-wider">{{ __('messages.unread_messages') }}</h2>
            <p class="text-3xl font-extrabold {{ $stats['unread_messages'] > 0 ? 'text-red-600' : 'text-gray-900' }}">{{ $stats['unread_messages'] }}</p>
        </div>
    </div>
</div>

<!-- Management Guide (Professional Explanations) -->
<h2 class="text-2xl font-bold text-gray-800 mb-4">{{ app()->getLocale() == 'ar' ? 'كيفية إدارة موقعك' : 'How to Manage Your Website' }}</h2>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10">
    
    <!-- Projects Guide -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center"><svg class="w-5 h-5 me-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/></svg> {{ app()->getLocale() == 'ar' ? 'إدارة المشاريع' : 'Managing Projects' }}</h3>
        <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ app()->getLocale() == 'ar' ? 'اعرض أفضل أعمالك في قسم الأعمال. كل مشروع ينتمي إلى <strong>قسم</strong>. يمكنك تحديد المشاريع كـ <em>مميزة</em> لعرضها في الصفحة الرئيسية.' : 'Showcase your best work in the Portfolio section. Every project belongs to a <strong>Category</strong>. You can mark projects as <em>Featured</em> to display them on the homepage.' }}</p>
        <div class="bg-blue-50 text-blue-800 text-sm p-3 rounded border border-blue-100">
            {!! app()->getLocale() == 'ar' ? '<strong>نصيحة احترافية:</strong> ارفع صور بجودة عالية. إذا لم ترفع صورة، سيظهر مكانها قالب ملون بشكل جميل تلقائياً.' : '<strong>Pro Tip:</strong> Upload high-quality images. If you don\'t upload an image, a beautiful colored placeholder will automatically appear instead.' !!}
        </div>
        <div class="mt-4"><a href="{{ route('admin.projects.index') }}" class="text-blue-600 font-bold text-sm hover:underline">{!! app()->getLocale() == 'ar' ? '&larr; الذهاب للمشاريع' : 'Go to Projects &rarr;' !!}</a></div>
    </div>

    <!-- Settings Guide -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center"><svg class="w-5 h-5 me-2 text-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287-.947c.886.539 2.041.06 2.286-.947 1.56-.38 1.56-2.6 0-2.978a1.532 1.532 0 012.286-.948c1.372.836 2.942-.734 2.106-2.106a1.532 1.532 0 01-.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/></svg> {{ app()->getLocale() == 'ar' ? 'إعدادات الموقع والألوان' : 'Website Settings & Colors' }}</h3>
        <p class="text-gray-600 text-sm mb-4 leading-relaxed">{!! app()->getLocale() == 'ar' ? 'صفحة الإعدادات هي قلب موقعك. يمكنك تغيير <strong>اللون الأساسي</strong>، والذي يقوم بتحديث الأزرار والحدود والتفاصيل في جميع أنحاء الموقع فوراً.' : 'The Settings page is the heart of your website. You can change the <strong>Primary Color</strong>, which dynamically updates buttons, borders, and accents across the entire site instantly.' !!}</p>
        <div class="bg-gray-50 text-gray-700 text-sm p-3 rounded border border-gray-200">
            {!! app()->getLocale() == 'ar' ? '<strong>ما يمكنك تعديله:</strong> نصوص الواجهة، الخدمات، إحصائيات الشركة، بانر الدعوة لاتخاذ إجراء، روابط التواصل الاجتماعي، ومعلومات الفوتر.' : '<strong>What you can edit:</strong> Hero texts, Services, Company Stats (numbers), Call-to-Action banner, Social Links, and Footer Info.' !!}
        </div>
        <div class="mt-4"><a href="{{ route('admin.settings.index') }}" class="text-primary font-bold text-sm hover:underline">{!! app()->getLocale() == 'ar' ? '&larr; تعديل الإعدادات' : 'Edit Settings &rarr;' !!}</a></div>
    </div>

    <!-- Blog & Testimonials Guide -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center"><svg class="w-5 h-5 me-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/></svg> {{ app()->getLocale() == 'ar' ? 'المدونة وآراء العملاء' : 'Blog & Testimonials' }}</h3>
        <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ app()->getLocale() == 'ar' ? 'اكتب مقالات لجذب جمهورك وتحسين السيو. آراء العملاء تبني الثقة؛ تأكد من تحديثها باستمرار.' : 'Write articles to engage your audience and build SEO. Client testimonials build trust; ensure you keep them updated.' }}</p>
        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
            <li>{!! app()->getLocale() == 'ar' ? 'يمكن حفظ المقالات كـ <strong>مسودة</strong> حتى تكون جاهزاً لنشرها.' : 'Articles can be saved as <strong>Drafts</strong> until you are ready to publish.' !!}</li>
            <li>{{ app()->getLocale() == 'ar' ? 'يمكن تفعيل أو تعطيل آراء العملاء بدون الحاجة لحذفها.' : 'Testimonials can be toggled Active/Inactive without deleting them.' }}</li>
        </ul>
        <div class="mt-4 space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="text-green-600 font-bold text-sm hover:underline">{{ app()->getLocale() == 'ar' ? 'إدارة المدونة' : 'Manage Blog' }}</a>
            <a href="{{ route('admin.testimonials.index') }}" class="text-gray-600 font-bold text-sm hover:underline">{{ app()->getLocale() == 'ar' ? 'إدارة آراء العملاء' : 'Manage Testimonials' }}</a>
        </div>
    </div>

    <!-- Messages Guide -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center"><svg class="w-5 h-5 me-2 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg> {{ app()->getLocale() == 'ar' ? 'رسائل التواصل' : 'Contact Messages' }}</h3>
        <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ app()->getLocale() == 'ar' ? 'في كل مرة يملأ فيها زائر نموذج التواصل في الصفحة الرئيسية، تصل الرسالة هنا. الرسائل غير المقروءة تفعل شارة الإشعار الحمراء.' : 'Every time a visitor fills out the contact form on the homepage, it arrives here. Unread messages trigger the red notification badge.' }}</p>
        <div class="bg-red-50 text-red-800 text-sm p-3 rounded border border-red-100">
            {!! app()->getLocale() == 'ar' ? '<strong>إجراء مطلوب:</strong> لديك ' . $stats['unread_messages'] . ' رسالة غير مقروءة بانتظار ردك.' : '<strong>Action Required:</strong> You have ' . $stats['unread_messages'] . ' unread message(s) waiting for your response.' !!}
        </div>
        <div class="mt-4"><a href="{{ route('admin.messages.index') }}" class="text-red-600 font-bold text-sm hover:underline">{!! app()->getLocale() == 'ar' ? '&larr; عرض الرسائل' : 'View Messages &rarr;' !!}</a></div>
    </div>

</div>
@endsection