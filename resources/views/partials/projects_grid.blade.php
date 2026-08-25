@forelse($projects as $index => $p)
<div class="bg-white rounded-2xl shadow-lg overflow-hidden group border border-gray-100 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
    <div class="overflow-hidden relative h-64 bg-primary/10">
        @if($p->image)
            <img src="{{ asset('storage/'.$p->image) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
        @else
            <div class="w-full h-full flex items-center justify-center bg-primary text-white"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
        @endif
        <div class="absolute inset-0 bg-gray-900/0 group-hover:bg-gray-900/40 transition duration-500 flex items-center justify-center">
            <a href="{{ route('portfolio.show', $p) }}" class="opacity-0 group-hover:opacity-100 bg-white text-primary px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-500">{{ __('messages.view_project') }}</a>
        </div>
    </div>
    <div class="p-8 flex-1">
        <span class="text-xs text-primary font-bold uppercase tracking-widest">{{ app()->getLocale() == 'ar' ? ($p->category->name_ar ?? $p->category->name ?? 'غير مصنف') : ($p->category->name ?? 'Uncategorized') }}</span>
        <h3 class="text-2xl font-bold mt-2"><a href="{{ route('portfolio.show', $p) }}" class="hover:text-primary transition">{{ app()->getLocale() == 'ar' ? ($p->title_ar ?? $p->title) : $p->title }}</a></h3>
    </div>
</div>
@empty
<div class="col-span-full text-center text-gray-500 py-16 text-lg font-medium">{{ app()->getLocale() == 'ar' ? 'لا توجد مشاريع.' : 'No projects found.' }}</div>
@endforelse