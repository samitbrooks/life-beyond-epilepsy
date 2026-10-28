<footer class="bg-purple-950 text-purple-100 border-t border-purple-900 mt-20 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            <!-- Col 1: About & Pilot Mission -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-2.5">
                    <div class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold text-lg shadow">
                        LBE
                    </div>
                    <span class="text-xl font-bold text-white tracking-tight">Life Beyond Epilepsy</span>
                </div>
                <p class="text-sm text-purple-200/90 leading-relaxed max-w-md">
                    {{ __('site.hero_subtitle', [], 'en') }}
                </p>
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-purple-900/80 border border-purple-800 text-xs text-purple-300">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span>Pilot Operations: Trans-Nzoia County (Kitale, Kiminini, Cherangany, Kwanza, Endebess)</span>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="space-y-3">
                <h3 class="text-sm font-bold uppercase tracking-wider text-purple-300">Organization</h3>
                <ul class="space-y-2 text-sm text-purple-200">
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">About LBE</a></li>
                    <li><a href="{{ route('awareness') }}" class="hover:text-white transition">Epilepsy Awareness</a></li>
                    <li><a href="{{ route('children') }}" class="hover:text-white transition">Children & Schools</a></li>
                    <li><a href="{{ route('medical-support') }}" class="hover:text-white transition">Medical Support Pathways</a></li>
                    <li><a href="{{ route('events') }}" class="hover:text-white transition">Events & Campaigns</a></li>
                </ul>
            </div>

            <!-- Col 3: Programs & Action -->
            <div class="space-y-3">
                <h3 class="text-sm font-bold uppercase tracking-wider text-purple-300">Programs & Action</h3>
                <ul class="space-y-2 text-sm text-purple-200">
                    <li><a href="{{ route('navigator') }}" class="hover:text-white transition font-medium text-purple-300">Smart Health Navigator</a></li>
                    <li><a href="{{ route('partnerships') }}" class="hover:text-white transition">Partnerships & Clinical Network</a></li>
                    <li><a href="{{ route('get-involved') }}" class="hover:text-white transition">Volunteer & Advocate</a></li>
                    <li><a href="{{ route('impact') }}" class="hover:text-white transition">Impact & Transparency</a></li>
                    <li><a href="{{ route('donate') }}" class="hover:text-white transition">Donate & Support</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Disclaimers -->
            <div class="space-y-3">
                <h3 class="text-sm font-bold uppercase tracking-wider text-purple-300">Direct Contact</h3>
                <div class="space-y-2 text-sm text-purple-200">
                    <p class="flex items-center gap-2">
                        <span class="font-semibold text-white">Email:</span>
                        <a href="mailto:info@lifebeyondepilepsy.org" class="hover:underline">info@lifebeyondepilepsy.org</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-semibold text-white">WhatsApp:</span>
                        <a href="{{ route('contact') }}#whatsapp" class="text-emerald-400 hover:underline">Click-to-Chat (Office Hours)</a>
                    </p>
                    <p class="text-xs text-purple-300/80 pt-1">
                        Response Hours: Mon–Fri, 8:30 AM – 5:00 PM EAT.<br>
                        <em>Messages are not monitored for emergency response.</em>
                    </p>
                </div>
            </div>
        </div>

        <!-- Strict Clinical & Privacy Disclaimer Box -->
        <div class="mt-12 pt-8 border-t border-purple-900 text-xs text-purple-300/80 space-y-4">
            <div class="p-4 rounded-xl bg-purple-900/40 border border-purple-800/80 leading-relaxed">
                <p class="font-semibold text-purple-200 mb-1">Important Healthcare & Legal Disclaimer:</p>
                <p>{{ __('site.footer.disclaimer') }}</p>
            </div>
            
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                <p class="text-[11px]">{{ __('site.footer.copyright') }}</p>
                <div class="flex items-center gap-6 text-[11px]">
                    <a href="{{ route('privacy') }}" class="hover:text-white underline">Privacy Policy (Kenya DPA 2019)</a>
                    <a href="{{ route('privacy') }}#terms" class="hover:text-white underline">Terms of Use</a>
                    <a href="{{ route('privacy') }}#safeguarding" class="hover:text-white underline">Child Safeguarding</a>
                </div>
            </div>
        </div>
    </div>
</footer>
