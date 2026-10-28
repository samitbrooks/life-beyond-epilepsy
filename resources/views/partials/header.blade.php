<header class="sticky top-0 z-50 bg-white border-b border-purple-100 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo & Pilot Tag (epilepsy.com style) -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-purple-800 to-indigo-900 text-white flex items-center justify-center font-bold text-xl shadow-md group-hover:scale-105 transition">
                        <span>LBE</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-purple-950 leading-tight group-hover:text-purple-700 transition">
                            Life Beyond Epilepsy
                        </span>
                        <span class="text-[11px] font-semibold text-purple-600 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Kenya • Trans-Nzoia Pilot
                        </span>
                    </div>
                </a>
            </div>

            <!-- Desktop Nav Menu with epilepsy.com style Dropdowns -->
            <nav class="hidden lg:flex items-center gap-1 text-sm font-bold text-slate-700" aria-label="Main Navigation">
                
                <!-- Dropdown 1: About Epilepsy -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('awareness') ? 'text-purple-700 bg-purple-50' : '' }}" aria-expanded="false">
                        <span>About Epilepsy</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-purple-700 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-72 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('awareness') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Understanding Epilepsy</div>
                            <div class="text-xs text-slate-500 mt-0.5">What causes seizures & brain physiology</div>
                        </a>
                        <a href="{{ route('awareness') }}#first-aid" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-purple-900 text-sm flex items-center gap-1.5">
                                <span>Seizure First Aid</span>
                                <span class="text-[10px] bg-red-100 text-red-700 font-extrabold px-1.5 py-0.2 rounded">Crucial</span>
                            </div>
                            <div class="text-xs text-slate-500 mt-0.5">4 vital steps & critical DO NOTs</div>
                        </a>
                        <a href="{{ route('awareness') }}#myths" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Myths vs Medical Facts</div>
                            <div class="text-xs text-slate-500 mt-0.5">Debunking stigma in the community</div>
                        </a>
                        <a href="{{ route('awareness') }}#emergency" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-red-700 text-sm">Emergency Warning Signs</div>
                            <div class="text-xs text-slate-500 mt-0.5">When to call 999/112 or rush to hospital</div>
                        </a>
                    </div>
                </div>

                <!-- Dropdown 2: Care & Navigation -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('navigator') || request()->routeIs('medical-support') ? 'text-purple-700 bg-purple-50' : '' }}" aria-expanded="false">
                        <span>Care & Navigation</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-purple-700 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-80 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('navigator') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-purple-900 text-sm flex items-center gap-1.5">
                                <span>Smart Health Navigator</span>
                                <span class="text-[10px] bg-purple-100 text-purple-800 font-bold px-1.5 py-0.2 rounded uppercase">Pilot</span>
                            </div>
                            <div class="text-xs text-slate-500 mt-0.5">Bilingual assistance & clinic finder</div>
                        </a>
                        <a href="{{ route('navigator') }}#directory" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Trans-Nzoia Clinic Directory</div>
                            <div class="text-xs text-slate-500 mt-0.5">Kitale Referral, Kiminini & sub-county centres</div>
                        </a>
                        <a href="{{ route('medical-support') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Medical Support Pathways</div>
                            <div class="text-xs text-slate-500 mt-0.5">EEG referral subsidies & adherence guidance</div>
                        </a>
                    </div>
                </div>

                <!-- Dropdown 3: Youth & Schools -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('children') || request()->routeIs('events') ? 'text-purple-700 bg-purple-50' : '' }}" aria-expanded="false">
                        <span>Youth & Schools</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-purple-700 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-72 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('children') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Children's Empowerment</div>
                            <div class="text-xs text-slate-500 mt-0.5">Anti-bullying, buddy systems & stories</div>
                        </a>
                        <a href="{{ route('children') }}#safeguarding" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Child Safeguarding Policy</div>
                            <div class="text-xs text-slate-500 mt-0.5">Parental consent & welfare protections</div>
                        </a>
                        <a href="{{ route('events') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-purple-900 text-sm">Events & Purple Day</div>
                            <div class="text-xs text-slate-500 mt-0.5">Teacher workshops, walks & outreach camps</div>
                        </a>
                    </div>
                </div>

                <!-- Dropdown 4: Get Involved -->
                <div class="relative dropdown-group py-4">
                    <button type="button" class="inline-flex items-center gap-1 px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition focus:outline-none {{ request()->routeIs('get-involved') || request()->routeIs('partnerships') || request()->routeIs('impact') ? 'text-purple-700 bg-purple-50' : '' }}" aria-expanded="false">
                        <span>Get Involved</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-purple-700 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    
                    <div class="dropdown-menu absolute left-0 top-full w-72 bg-white rounded-2xl shadow-xl border border-purple-100 p-2 z-50">
                        <a href="{{ route('get-involved') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Volunteer with LBE</div>
                            <div class="text-xs text-slate-500 mt-0.5">Community advocacy & event support</div>
                        </a>
                        <a href="{{ route('partnerships') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Partnerships & Clinical Network</div>
                            <div class="text-xs text-slate-500 mt-0.5">Hospitals, doctors, schools & NGOs</div>
                        </a>
                        <a href="{{ route('impact') }}" class="block px-3 py-2.5 rounded-xl hover:bg-purple-50 transition">
                            <div class="font-bold text-slate-900 text-sm">Impact & Transparency</div>
                            <div class="text-xs text-slate-500 mt-0.5">Activity reports & ethical metrics</div>
                        </a>
                    </div>
                </div>

                <!-- Direct Links: About & Contact -->
                <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('about') ? 'text-purple-700 bg-purple-50' : '' }}">
                    About Us
                </a>

                <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg hover:text-purple-700 hover:bg-purple-50 transition {{ request()->routeIs('contact') ? 'text-purple-700 bg-purple-50' : '' }}">
                    Contact
                </a>
            </nav>

            <!-- Actions: Language Toggle & Donate Button (epilepsy.com style) -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- First Aid Action Pill -->
                <a href="{{ route('awareness') }}#first-aid" class="px-3 py-1.5 rounded-full bg-red-50 text-red-700 hover:bg-red-100 text-xs font-black tracking-wide border border-red-200 transition flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                    <span>Seizure First Aid</span>
                </a>

                <!-- Language Switcher -->
                <div class="inline-flex items-center rounded-full bg-purple-50 p-1 border border-purple-200 text-xs font-black" aria-label="Language Switcher">
                    <a href="?lang=en" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'en' ? 'bg-purple-700 text-white shadow-xs' : 'text-purple-800 hover:text-purple-950' }}">
                        EN
                    </a>
                    <a href="?lang=sw" class="px-2.5 py-1 rounded-full transition {{ app()->getLocale() === 'sw' ? 'bg-purple-700 text-white shadow-xs' : 'text-purple-800 hover:text-purple-950' }}">
                        SW
                    </a>
                </div>

                <!-- Donate CTA -->
                <a href="{{ route('donate') }}" class="inline-flex items-center justify-center px-4 py-2 rounded-xl bg-purple-700 text-white text-sm font-extrabold shadow-sm hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 transition">
                    Donate
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center gap-2 lg:hidden">
                <!-- Mobile Language Switcher -->
                <div class="inline-flex items-center rounded-full bg-purple-50 p-0.5 border border-purple-200 text-xs font-black">
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

    <!-- Mobile Drawer with Accordion Dropdowns -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-purple-100 bg-white px-4 pt-3 pb-8 shadow-2xl space-y-2 max-h-[85vh] overflow-y-auto">
        <!-- Emergency Crisis Banner for Mobile -->
        <a href="{{ route('awareness') }}#first-aid" class="flex items-center justify-between p-3 rounded-xl bg-red-50 border border-red-200 text-red-800 text-xs font-black">
            <span class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-red-600 animate-ping"></span>
                <span>Immediate Seizure First Aid Guide</span>
            </span>
            <span class="underline">View</span>
        </a>

        <!-- Section 1: About Epilepsy -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-about-epilepsy">
                <span>About Epilepsy</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-about-epilepsy" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('awareness') }}" class="block py-2 text-slate-600 hover:text-purple-700">What is Epilepsy?</a>
                <a href="{{ route('awareness') }}#first-aid" class="block py-2 text-purple-700 font-bold">Seizure First Aid & Safety</a>
                <a href="{{ route('awareness') }}#myths" class="block py-2 text-slate-600 hover:text-purple-700">Myths vs Facts</a>
                <a href="{{ route('awareness') }}#emergency" class="block py-2 text-red-600 font-bold">When Emergency Help is Needed</a>
            </div>
        </div>

        <!-- Section 2: Care & Navigation -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-care-navigation">
                <span>Care & Navigation</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-care-navigation" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('navigator') }}" class="block py-2 text-purple-700 font-bold">Smart Health Navigator (Pilot)</a>
                <a href="{{ route('navigator') }}#directory" class="block py-2 text-slate-600 hover:text-purple-700">Trans-Nzoia Clinic Directory</a>
                <a href="{{ route('medical-support') }}" class="block py-2 text-slate-600 hover:text-purple-700">Medical Support Pathways</a>
            </div>
        </div>

        <!-- Section 3: Youth & Schools -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-youth-schools">
                <span>Youth & Schools</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-youth-schools" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('children') }}" class="block py-2 text-slate-600 hover:text-purple-700">Children's Empowerment</a>
                <a href="{{ route('children') }}#safeguarding" class="block py-2 text-slate-600 hover:text-purple-700">Child Safeguarding</a>
                <a href="{{ route('events') }}" class="block py-2 text-slate-600 hover:text-purple-700">Events & Purple Day</a>
            </div>
        </div>

        <!-- Section 4: Get Involved -->
        <div>
            <button type="button" class="mobile-dropdown-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50" data-target="m-get-involved">
                <span>Get Involved</span>
                <svg class="accordion-chevron w-4 h-4 text-slate-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div id="m-get-involved" class="hidden pl-4 pr-2 py-1 space-y-1 text-xs">
                <a href="{{ route('get-involved') }}" class="block py-2 text-slate-600 hover:text-purple-700">Volunteer with LBE</a>
                <a href="{{ route('partnerships') }}" class="block py-2 text-slate-600 hover:text-purple-700">Partnership Enquiry</a>
                <a href="{{ route('impact') }}" class="block py-2 text-slate-600 hover:text-purple-700">Impact & Transparency</a>
            </div>
        </div>

        <!-- Direct items -->
        <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50">About LBE</a>
        <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50">Contact & WhatsApp</a>
        <a href="{{ route('privacy') }}" class="block px-3 py-2.5 rounded-xl text-sm font-bold text-slate-800 hover:bg-purple-50">Privacy & Terms (Kenya DPA)</a>

        <div class="pt-2">
            <a href="{{ route('donate') }}" class="w-full inline-flex items-center justify-center px-4 py-3 rounded-xl bg-purple-700 text-white font-extrabold shadow hover:bg-purple-800 text-sm">
                Donate to LBE
            </a>
        </div>
    </div>
</header>
