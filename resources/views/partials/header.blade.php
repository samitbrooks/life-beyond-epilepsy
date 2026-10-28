<header class="sticky top-0 z-50 bg-white border-b border-purple-100 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center group">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ __('site.org_name') }}" class="h-12 sm:h-14 w-auto object-contain transition group-hover:scale-102">
                </a>
            </div>

            <!-- Desktop Nav Menu with epilepsy.com style Dropdowns (Fully Localized) -->
            <nav class="hidden lg:flex items-center gap-1 text-sm font-bold text-slate-700" aria-label="Main Navigation">
                
                <!-- Dropdown 1: About Epilepsy -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-[#45017A] hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('awareness') ? 'text-[#45017A] bg-purple-50' : '' }}" aria-expanded="false">
                        <span>{{ __('site.nav.dropdown_about_epilepsy') }}</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-[#45017A] transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-72 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('awareness') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.understanding_epilepsy') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.understanding_epilepsy_sub') }}</div>
                        </a>
                        <a href="{{ route('awareness') }}#first-aid" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-[#45017A] text-sm flex items-center gap-1.5">
                                <span>{{ __('site.nav.first_aid') }}</span>
                                <span class="text-[10px] bg-red-100 text-red-700 font-extrabold px-1.5 py-0.2 rounded">{{ __('site.nav.first_aid_badge') }}</span>
                            </div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.first_aid_sub') }}</div>
                        </a>
                        <a href="{{ route('awareness') }}#myths" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.myths_facts') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.myths_facts_sub') }}</div>
                        </a>
                        <a href="{{ route('awareness') }}#emergency" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-red-700 text-sm">{{ __('site.nav.emergency_signs') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.emergency_signs_sub') }}</div>
                        </a>
                    </div>
                </div>

                <!-- Dropdown 2: Care & Navigation -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-[#45017A] hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('navigator') || request()->routeIs('medical-support') ? 'text-[#45017A] bg-purple-50' : '' }}" aria-expanded="false">
                        <span>{{ __('site.nav.dropdown_care_navigation') }}</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-[#45017A] transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-80 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('navigator') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-[#45017A] text-sm flex items-center gap-1.5">
                                <span>{{ __('site.nav.smart_navigator') }}</span>
                                <span class="text-[10px] bg-purple-100 text-[#45017A] font-bold px-1.5 py-0.2 rounded uppercase">{{ __('site.nav.smart_navigator_badge') }}</span>
                            </div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.smart_navigator_sub') }}</div>
                        </a>
                        <a href="{{ route('navigator') }}#directory" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.clinic_directory') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.clinic_directory_sub') }}</div>
                        </a>
                        <a href="{{ route('medical-support') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.medical_support') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.medical_support_sub') }}</div>
                        </a>
                    </div>
                </div>

                <!-- Dropdown 3: Youth & Schools -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-[#45017A] hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('children') || request()->routeIs('events') ? 'text-[#45017A] bg-purple-50' : '' }}" aria-expanded="false">
                        <span>{{ __('site.nav.dropdown_youth_schools') }}</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-[#45017A] transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-72 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('children') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.children_empowerment') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.children_empowerment_sub') }}</div>
                        </a>
                        <a href="{{ route('children') }}#safeguarding" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.safeguarding') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.safeguarding_sub') }}</div>
                        </a>
                        <a href="{{ route('events') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-[#45017A] text-sm">{{ __('site.nav.events_purple_day') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.events_purple_day_sub') }}</div>
                        </a>
                    </div>
                </div>

                <!-- Dropdown 4: Get Involved -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-[#45017A] hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('get-involved') || request()->routeIs('partnerships') || request()->routeIs('impact') ? 'text-[#45017A] bg-purple-50' : '' }}" aria-expanded="false">
                        <span>{{ __('site.nav.dropdown_get_involved') }}</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-[#45017A] transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-72 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('get-involved') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.volunteer') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.volunteer_sub') }}</div>
                        </a>
                        <a href="{{ route('partnerships') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.partnerships') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.partnerships_sub') }}</div>
                        </a>
                        <a href="{{ route('impact') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">{{ __('site.nav.impact') }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ __('site.nav.impact_sub') }}</div>
                        </a>
                    </div>
                </div>

                <!-- Direct Links: About & Contact -->
                <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg hover:text-[#45017A] hover:bg-purple-50 transition {{ request()->routeIs('about') ? 'text-[#45017A] bg-purple-50' : '' }}">
                    {{ __('site.nav.about') }}
                </a>

                <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg hover:text-[#45017A] hover:bg-purple-50 transition {{ request()->routeIs('contact') ? 'text-[#45017A] bg-purple-50' : '' }}">
                    {{ __('site.nav.contact') }}
                </a>
            </nav>

            <!-- Actions: Language Toggle, First Aid, & Brand Sun Gold Donate Button -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- First Aid Action Pill -->
                <a href="{{ route('awareness') }}#first-aid" class="px-3 py-1.5 rounded-full bg-red-50 text-red-700 hover:bg-red-100 text-xs font-black tracking-wide border border-red-200 transition flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                    <span>{{ __('site.nav.seizure_first_aid_btn') }}</span>
                </a>

                <!-- Language Switcher -->
                <div class="inline-flex items-center rounded-full bg-purple-50 p-1 border border-purple-200 text-xs font-black" aria-label="Language Switcher">
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'en' ? 'bg-[#45017A] text-white shadow-xs' : 'text-[#45017A] hover:text-[#320059]' }}">
                        EN
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'sw']) }}" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'sw' ? 'bg-[#45017A] text-white shadow-xs' : 'text-[#45017A] hover:text-[#320059]' }}">
                        SW
                    </a>
                </div>

                <!-- Brand Sun Gold Donate CTA -->
                <a href="{{ route('donate') }}" class="inline-flex items-center justify-center px-4 py-2 rounded-xl bg-[#F29000] text-slate-950 text-sm font-black shadow-sm hover:bg-[#D97706] focus:outline-none focus:ring-2 focus:ring-[#F29000] focus:ring-offset-2 transition">
                    {{ __('site.nav.donate') }}
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center gap-2 lg:hidden">
                <!-- Mobile Language Switcher -->
                <div class="inline-flex items-center rounded-full bg-purple-50 p-0.5 border border-purple-200 text-xs font-black">
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}" class="px-2 py-0.5 rounded-full {{ app()->getLocale() === 'en' ? 'bg-[#45017A] text-white' : 'text-[#45017A]' }}">EN</a>
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'sw']) }}" class="px-2 py-0.5 rounded-full {{ app()->getLocale() === 'sw' ? 'bg-[#45017A] text-white' : 'text-[#45017A]' }}">SW</a>
                </div>
                
                <button type="button" id="mobile-menu-btn" class="p-2 rounded-xl text-[#45017A] hover:bg-purple-50 focus:outline-none focus:ring-2 focus:ring-[#45017A]" aria-label="Toggle mobile menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer with Accordion Dropdowns (Fully Localized) -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-purple-100 bg-white px-4 pt-3 pb-8 shadow-2xl space-y-2 max-h-[85vh] overflow-y-auto">
        <!-- Emergency Crisis Banner for Mobile -->
        <a href="{{ route('awareness') }}#first-aid" class="flex items-center justify-between p-3 rounded-xl bg-red-50 border border-red-200 text-red-800 text-xs font-black">
            <span class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-red-600 animate-ping"></span>
                <span>{{ __('site.nav.seizure_first_aid_btn') }}</span>
            </span>
            <span class="underline">{{ __('site.emergency_ribbon.view_guide') }}</span>
        </a>

        <!-- Section 1: About Epilepsy -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-about-epilepsy">
                <span>{{ __('site.nav.dropdown_about_epilepsy') }}</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-about-epilepsy" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('awareness') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.understanding_epilepsy') }}</a>
                <a href="{{ route('awareness') }}#first-aid" class="block py-2 text-[#45017A] font-bold">{{ __('site.nav.first_aid') }}</a>
                <a href="{{ route('awareness') }}#myths" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.myths_facts') }}</a>
                <a href="{{ route('awareness') }}#emergency" class="block py-2 text-red-600 font-bold">{{ __('site.nav.emergency_signs') }}</a>
            </div>
        </div>

        <!-- Section 2: Care & Navigation -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-care-navigation">
                <span>{{ __('site.nav.dropdown_care_navigation') }}</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-care-navigation" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('navigator') }}" class="block py-2 text-[#45017A] font-bold">{{ __('site.nav.smart_navigator') }} ({{ __('site.nav.smart_navigator_badge') }})</a>
                <a href="{{ route('navigator') }}#directory" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.clinic_directory') }}</a>
                <a href="{{ route('medical-support') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.medical_support') }}</a>
            </div>
        </div>

        <!-- Section 3: Youth & Schools -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-youth-schools">
                <span>{{ __('site.nav.dropdown_youth_schools') }}</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-youth-schools" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('children') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.children_empowerment') }}</a>
                <a href="{{ route('children') }}#safeguarding" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.safeguarding') }}</a>
                <a href="{{ route('events') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.events_purple_day') }}</a>
            </div>
        </div>

        <!-- Section 4: Get Involved -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-get-involved">
                <span>{{ __('site.nav.dropdown_get_involved') }}</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-get-involved" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('get-involved') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.volunteer') }}</a>
                <a href="{{ route('partnerships') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.partnerships') }}</a>
                <a href="{{ route('impact') }}" class="block py-2 text-slate-600 hover:text-[#45017A]">{{ __('site.nav.impact') }}</a>
            </div>
        </div>

        <!-- Direct items -->
        <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50">{{ __('site.nav.about') }}</a>
        <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50">{{ __('site.nav.contact') }}</a>
        <a href="{{ route('privacy') }}" class="block px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50">{{ __('site.nav.privacy') }}</a>

        <div class="pt-2">
            <a href="{{ route('donate') }}" class="w-full inline-flex items-center justify-center px-4 py-3 rounded-xl bg-[#F29000] text-slate-950 font-black shadow hover:bg-[#D97706] text-sm">
                {{ __('site.nav.donate') }}
            </a>
        </div>
    </div>
</header>
