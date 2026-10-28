<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-purple-100 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo & Pilot Tag -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-purple-700 to-indigo-800 text-white flex items-center justify-center font-bold text-xl shadow-md group-hover:scale-105 transition">
                        <span>LBE</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg sm:text-xl font-bold tracking-tight text-purple-950 leading-tight group-hover:text-purple-700 transition">
                            Life Beyond Epilepsy
                        </span>
                        <span class="text-[11px] font-medium text-purple-600 flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            {{ __('site.pilot_badge') }}
                        </span>
                    </div>
                </a>
            </div>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-1 text-sm font-semibold text-slate-700" aria-label="Main Navigation">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('home') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.home') }}
                </a>
                <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('about') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.about') }}
                </a>
                <a href="{{ route('awareness') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('awareness') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.awareness') }}
                </a>
                <a href="{{ route('navigator') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('navigator') ? 'text-purple-700 bg-purple-50' : '' }}">
                    <span class="inline-flex items-center gap-1">
                        {{ __('site.nav.navigator') }}
                        <span class="text-[10px] font-bold uppercase tracking-wider bg-purple-100 text-purple-800 px-1.5 py-0.5 rounded">Pilot</span>
                    </span>
                </a>
                <a href="{{ route('children') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('children') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.children') }}
                </a>
                <a href="{{ route('medical-support') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('medical-support') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.medical_support') }}
                </a>
                <a href="{{ route('get-involved') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('get-involved') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.get_involved') }}
                </a>
                <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('contact') ? 'text-purple-700 bg-purple-50' : '' }}">
                    {{ __('site.nav.contact') }}
                </a>
            </nav>

            <!-- Actions: Language Toggle & Donate CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Bilingual Language Switcher -->
                <div class="inline-flex items-center rounded-full bg-purple-50 p-1 border border-purple-200 text-xs font-bold" aria-label="Language Switcher">
                    <a href="?lang=en" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'en' ? 'bg-purple-700 text-white shadow-xs' : 'text-purple-800 hover:text-purple-950' }}">
                        EN
                    </a>
                    <a href="?lang=sw" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'sw' ? 'bg-purple-700 text-white shadow-xs' : 'text-purple-800 hover:text-purple-950' }}">
                        SW
                    </a>
                </div>

                <a href="{{ route('donate') }}" class="inline-flex items-center justify-center px-4 py-2 rounded-xl bg-purple-700 text-white text-sm font-semibold shadow-sm hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 transition">
                    {{ __('site.nav.donate') }}
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center gap-2 lg:hidden">
                <!-- Mobile Language Switcher -->
                <div class="inline-flex items-center rounded-full bg-purple-50 p-0.5 border border-purple-200 text-xs font-bold">
                    <a href="?lang=en" class="px-2 py-0.5 rounded-full {{ app()->getLocale() === 'en' ? 'bg-purple-700 text-white' : 'text-purple-800' }}">EN</a>
                    <a href="?lang=sw" class="px-2 py-0.5 rounded-full {{ app()->getLocale() === 'sw' ? 'bg-purple-700 text-white' : 'text-purple-800' }}">SW</a>
                </div>
                
                <button type="button" id="mobile-menu-btn" class="p-2 rounded-xl text-purple-900 hover:bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-600" aria-label="Toggle mobile menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-purple-100 bg-white px-4 pt-3 pb-6 shadow-xl space-y-1">
        <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700 {{ request()->routeIs('home') ? 'bg-purple-50 text-purple-700' : '' }}">
            {{ __('site.nav.home') }}
        </a>
        <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700 {{ request()->routeIs('about') ? 'bg-purple-50 text-purple-700' : '' }}">
            {{ __('site.nav.about') }}
        </a>
        <a href="{{ route('awareness') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700 {{ request()->routeIs('awareness') ? 'bg-purple-50 text-purple-700' : '' }}">
            {{ __('site.nav.awareness') }}
        </a>
        <a href="{{ route('navigator') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-purple-800 bg-purple-50">
            {{ __('site.nav.navigator') }} (Trans-Nzoia Pilot)
        </a>
        <a href="{{ route('children') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.children') }}
        </a>
        <a href="{{ route('medical-support') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.medical_support') }}
        </a>
        <a href="{{ route('events') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.events') }}
        </a>
        <a href="{{ route('partnerships') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.partnerships') }}
        </a>
        <a href="{{ route('impact') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.impact') }}
        </a>
        <a href="{{ route('get-involved') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.get_involved') }}
        </a>
        <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.contact') }}
        </a>
        <a href="{{ route('privacy') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-700">
            {{ __('site.nav.privacy') }}
        </a>
        <div class="pt-3">
            <a href="{{ route('donate') }}" class="w-full inline-flex items-center justify-center px-4 py-3 rounded-xl bg-purple-700 text-white font-semibold shadow hover:bg-purple-800">
                {{ __('site.nav.donate') }}
            </a>
        </div>
    </div>
</header>
