<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin {{ __('messages.dashboard') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .sidebar-link { transition: all 0.3s ease; }
        .sidebar-link:hover, .sidebar-link.active { background-color: rgba(255,255,255,0.1); border-start-color: var(--primary-color, #3b82f6); }
        :root { --primary-color: {{ $settings['primary_color'] ?? '#2563eb' }}; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex h-screen overflow-hidden antialiased">
    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-gray-300 flex flex-col shadow-2xl z-20">
        <div class="h-20 flex items-center justify-center border-b border-slate-800">
            <span class="text-2xl font-extrabold text-white tracking-wider flex items-center gap-2">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Admin<span class="text-primary">Pro</span>
            </span>
        </div>
        <nav class="flex-grow p-4 space-y-2 overflow-y-auto">
            @php $currentRoute = request()->route()->getName(); @endphp
            
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'dashboard') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                {{ __('messages.dashboard') }}
            </a>
            <a href="{{ route('admin.categories.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'categories') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                {{ __('messages.categories') }}
            </a>
            <a href="{{ route('admin.projects.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'projects') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                {{ __('messages.projects') }}
            </a>
            <a href="{{ route('admin.posts.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'posts') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                {{ __('messages.blog_posts') }}
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'testimonials') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                {{ __('messages.testimonials') }}
            </a>
            <a href="{{ route('admin.messages.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'messages') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                {{ __('messages.inbox') }}
            </a>
                        <a href="{{ route('admin.seo.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'seo') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                {{ __('messages.seo_tracking') }}
            </a>
            <a href="{{ route('admin.settings.index') }}" class="sidebar-link flex items-center py-3 px-4 rounded-lg border-s-4 border-transparent {{ str_contains($currentRoute, 'settings') ? 'active text-white' : '' }}">
                <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                {{ __('messages.settings') }}
            </a>
            
            <form action="{{ route('admin.logout') }}" method="POST" class="mt-8">
                @csrf
                <button type="submit" class="w-full sidebar-link flex items-center py-3 px-4 rounded-lg text-red-400 hover:text-red-300 hover:bg-red-900/30">
                    <svg class="w-5 h-5 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    {{ __('messages.logout') }}
                </button>
            </form>
        </nav>
    </aside>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b border-gray-200 h-20 flex items-center justify-between px-8 z-10">
            <h2 class="text-xl font-bold text-gray-700 capitalize">{{ explode('.', request()->route()->getName())[1] ?? __('messages.dashboard') }}</h2>
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" target="_blank" class="text-primary hover:text-gray-800 font-medium flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    {{ __('messages.view_website') }}
                </a>
                                <a href="{{ route('lang.switch', app()->getLocale() == 'en' ? 'ar' : 'en') }}" class="font-bold text-gray-600 hover:text-primary transition flex items-center gap-1 bg-gray-100 hover:bg-gray-200 px-3 py-1 rounded-full">
                    {{ app()->getLocale() == 'en' ? 'عربي' : 'EN' }}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                </a>
                <div class="h-8 w-px bg-gray-300 mx-2"></div>
                <div class="font-semibold text-gray-700 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-gray-100 text-primary flex items-center justify-center font-bold">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                    {{ auth()->user()->name }}
                </div>
            </div>
        </header>
        <!-- Main Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-8">
            <div id="ajax-alert" class="hidden mb-6 p-4 rounded-lg shadow-sm font-medium flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span></span>
            </div>
            @yield('content')
        </main>
    </div>
    
    <script>
        function showAlert(msg, type = 'success') {
            const el = $('#ajax-alert');
            el.removeClass('hidden bg-green-50 border-green-200 text-green-700 bg-red-50 border-red-200 text-red-700');
            if (type === 'success') el.addClass('bg-green-50 border-green-200 text-green-700 border');
            else el.addClass('bg-red-50 border-red-200 text-red-700 border');
            el.find('span').html(msg.replace(/ \| /g, '<br>• ')); // Format multiple errors nicely
            el.fadeIn();
            setTimeout(() => el.fadeOut(), type === 'error' ? 8000 : 4000); // 8s for errors so they can read them
        }

        $(document).on('submit', '.ajax-form', function(e) {
            e.preventDefault();
            let form = $(this);
            let btn = form.find('button[type="submit"]');
            let originalText = btn.text();
            btn.text('Saving...').prop('disabled', true).addClass('opacity-70');
            
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method') || 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(res) {
                    showAlert(res.success || 'Saved successfully.');
                    btn.text(originalText).prop('disabled', false).removeClass('opacity-70');
                    if (form.hasClass('ajax-reload')) setTimeout(() => location.reload(), 1000);
                },
                error: function(err) {
                    let msg = 'Error saving data. Please check inputs.';
                    if (err.status === 422 && err.responseJSON && err.responseJSON.errors) {
                        let errors = err.responseJSON.errors;
                        let errorMessages = [];
                        for (let field in errors) {
                            errorMessages.push(errors[field][0]);
                        }
                        msg = errorMessages.join(' | ');
                    } else if (err.responseJSON && err.responseJSON.message) {
                        msg = err.responseJSON.message;
                    }
                    showAlert(msg, 'error');
                    btn.text(originalText).prop('disabled', false).removeClass('opacity-70');
                }
            });
        });

        $(document).on('click', '.ajax-delete', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure you want to delete this item?')) return;
            let btn = $(this);
            btn.text('...');
            $.ajax({
                url: btn.data('url'),
                type: 'DELETE',
                success: function(res) {
                    showAlert(res.success || 'Deleted successfully.');
                    btn.closest('tr').fadeOut(400, function() { $(this).remove(); });
                },
                error: function() { 
                    showAlert('Error deleting item.', 'error'); 
                    btn.text('Delete');
                }
            });
        });
    </script>
</body>
</html>