<aside class="bg-red-700 text-white px-4 py-2.5 text-xs sm:text-sm font-medium shadow-inner" aria-label="Emergency Medical Disclaimer">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
        <div class="flex items-center gap-2">
            <span class="inline-flex items-center justify-center bg-white text-red-700 font-extrabold px-2 py-0.5 rounded text-[11px] tracking-wide uppercase shrink-0">
                {{ __('site.emergency_banner.title') }}
            </span>
            <p class="leading-snug">
                {{ __('site.emergency_banner.desc') }}
            </p>
        </div>
        <div class="shrink-0 flex items-center gap-2">
            <a href="tel:999" class="inline-flex items-center gap-1.5 bg-white text-red-700 font-bold px-3 py-1 rounded-full shadow hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.053 15.053 0 01-6.59-6.59l2.2-2.21a.96.96 0 00.25-1A11.36 11.36 0 018.5 3.99c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1z"/></svg>
                <span>{{ __('site.emergency_banner.action_call') }}</span>
            </a>
        </div>
    </div>
</aside>
