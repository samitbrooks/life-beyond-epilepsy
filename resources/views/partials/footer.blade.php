<footer class="bg-[#320059] text-purple-100 border-t border-[#45017A] mt-20 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            <!-- Col 1: About & Pilot Mission -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-2.5">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ __('site.org_name') }}" class="h-12 w-auto object-contain bg-white/95 p-1.5 rounded-xl shadow">
                </div>
                <p class="text-xs sm:text-sm text-purple-200/90 leading-relaxed max-w-md">
                    {{ __('site.home.hero_subtitle') }}
                </p>
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#45017A]/80 border border-purple-800 text-xs text-purple-200 font-semibold">
                    <span class="w-2 h-2 rounded-full bg-[#F29000] animate-pulse"></span>
                    <span>{{ __('site.footer.pilot_ops') }}</span>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="space-y-3">
                <h3 class="text-xs font-black uppercase tracking-wider text-[#F29000]">{{ __('site.footer.col_org') }}</h3>
                <ul class="space-y-2 text-xs sm:text-sm text-purple-200">
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">{{ __('site.nav.about') }}</a></li>
                    <li><a href="{{ route('awareness') }}" class="hover:text-white transition">{{ __('site.nav.understanding_epilepsy') }}</a></li>
                    <li><a href="{{ route('children') }}" class="hover:text-white transition">{{ __('site.nav.children_empowerment') }}</a></li>
                    <li><a href="{{ route('medical-support') }}" class="hover:text-white transition">{{ __('site.nav.medical_support') }}</a></li>
                    <li><a href="{{ route('events') }}" class="hover:text-white transition">{{ __('site.nav.events_purple_day') }}</a></li>
                </ul>
            </div>

            <!-- Col 3: Programs & Action -->
            <div class="space-y-3">
                <h3 class="text-xs font-black uppercase tracking-wider text-[#F29000]">{{ __('site.footer.col_programs') }}</h3>
                <ul class="space-y-2 text-xs sm:text-sm text-purple-200">
                    <li><a href="{{ route('navigator') }}" class="hover:text-white transition font-bold text-white">{{ __('site.nav.smart_navigator') }}</a></li>
                    <li><a href="{{ route('partnerships') }}" class="hover:text-white transition">{{ __('site.nav.partnerships') }}</a></li>
                    <li><a href="{{ route('get-involved') }}" class="hover:text-white transition">{{ __('site.nav.volunteer') }}</a></li>
                    <li><a href="{{ route('impact') }}" class="hover:text-white transition">{{ __('site.nav.impact') }}</a></li>
                    <li><a href="{{ route('donate') }}" class="hover:text-white transition font-bold text-[#F29000]">{{ __('site.nav.donate') }}</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Disclaimers -->
            <div class="space-y-3">
                <h3 class="text-xs font-black uppercase tracking-wider text-[#F29000]">{{ __('site.footer.col_contact') }}</h3>
                <div class="space-y-2 text-xs sm:text-sm text-purple-200">
                    <p class="flex items-center gap-2">
                        <span class="font-bold text-white">{{ __('site.footer.email_label') }}</span>
                        <a href="mailto:info@lifebeyondepilepsy.org" class="hover:underline">info@lifebeyondepilepsy.org</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-bold text-white">{{ __('site.footer.whatsapp_label') }}</span>
                        <a href="{{ route('contact') }}#whatsapp" class="text-emerald-400 font-bold hover:underline">{{ __('site.footer.chat_link') }}</a>
                    </p>
                    <p class="text-[11px] text-purple-300/80 pt-1 leading-relaxed">
                        {!! __('site.footer.hours_note') !!}
                    </p>
                </div>
            </div>
        </div>

        <!-- Strict Clinical & Privacy Disclaimer Box -->
        <div class="mt-12 pt-8 border-t border-[#45017A] text-xs text-purple-300/80 space-y-4">
            <div class="p-4 rounded-xl bg-[#45017A]/40 border border-purple-800/80 leading-relaxed">
                <p class="font-bold text-purple-200 mb-1">{{ __('site.footer.disclaimer_title') }}</p>
                <p>{{ __('site.footer.disclaimer') }}</p>
            </div>
            
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                <p class="text-[11px]">{{ __('site.footer.copyright') }}</p>
                <div class="flex items-center gap-6 text-[11px]">
                    <a href="{{ route('privacy') }}" class="hover:text-white underline">{{ __('site.footer.privacy_policy') }}</a>
                    <a href="{{ route('privacy') }}#terms" class="hover:text-white underline">{{ __('site.footer.terms_of_use') }}</a>
                    <a href="{{ route('privacy') }}#safeguarding" class="hover:text-white underline">{{ __('site.footer.safeguarding_link') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
