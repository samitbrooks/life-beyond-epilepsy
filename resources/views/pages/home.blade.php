@extends('layouts.app')

@section('title', __('site.org_name') . ' | ' . __('site.tagline'))

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-b from-purple-900 via-purple-800 to-indigo-900 text-white py-16 sm:py-24">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-purple-700/60 border border-purple-400/30 text-purple-200 text-xs sm:text-sm font-semibold">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                <span>{{ __('site.pilot_badge') }}</span>
            </div>
            
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                {{ __('site.home.hero_title') }}
            </h1>

            <p class="text-base sm:text-xl text-purple-100/90 leading-relaxed">
                {{ __('site.home.hero_subtitle') }}
            </p>

            <!-- Main CTA Buttons (From Section 3 Home requirements) -->
            <div class="flex flex-wrap items-center gap-3 pt-2">
                <a href="{{ route('awareness') }}" class="px-5 py-3 rounded-xl bg-white text-purple-900 font-bold text-sm shadow hover:bg-purple-50 transition flex items-center gap-2">
                    <span>{{ __('site.home.cta_learn') }}</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
                <a href="{{ route('navigator') }}" class="px-5 py-3 rounded-xl bg-purple-600 text-white font-bold text-sm shadow hover:bg-purple-500 border border-purple-400/30 transition flex items-center gap-2">
                    <svg class="w-4 h-4 text-emerald-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    <span>{{ __('site.home.cta_navigator') }}</span>
                </a>
                <a href="{{ route('get-involved') }}" class="px-5 py-3 rounded-xl bg-purple-800/80 text-purple-100 font-semibold text-sm hover:bg-purple-700/80 border border-purple-600 transition">
                    {{ __('site.home.cta_involved') }}
                </a>
                <a href="{{ route('donate') }}" class="px-5 py-3 rounded-xl bg-amber-500 text-slate-950 font-bold text-sm shadow hover:bg-amber-400 transition">
                    {{ __('site.home.cta_donate') }}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Core Pillars / Fast Stats -->
<section class="py-10 bg-white border-b border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl bg-purple-50/60 border border-purple-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold shrink-0">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-bold text-purple-950 text-base">{{ __('site.home.stat_pilot') }}</h3>
                    <p class="text-sm text-slate-600 mt-1">{{ __('site.home.stat_pilot_sub') }}</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-purple-50/60 border border-purple-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold shrink-0">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-bold text-purple-950 text-base">{{ __('site.home.stat_stigma') }}</h3>
                    <p class="text-sm text-slate-600 mt-1">{{ __('site.home.stat_stigma_sub') }}</p>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-purple-50/60 border border-purple-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold shrink-0">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-bold text-purple-950 text-base">{{ __('site.home.stat_youth') }}</h3>
                    <p class="text-sm text-slate-600 mt-1">{{ __('site.home.stat_youth_sub') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seizure First Aid Quick Action Guide -->
<section class="py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
                Clinician-Reviewed Guidance
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">
                {{ __('site.first_aid_summary.title') }}
            </h2>
            <p class="text-sm sm:text-base text-slate-600 mt-2">
                {{ __('site.first_aid_summary.subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center text-lg mb-4">1</div>
                    <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step1_title') }}</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">{{ __('site.first_aid_summary.step1_desc') }}</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center text-lg mb-4">2</div>
                    <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step2_title') }}</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">{{ __('site.first_aid_summary.step2_desc') }}</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center text-lg mb-4">3</div>
                    <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step3_title') }}</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">{{ __('site.first_aid_summary.step3_desc') }}</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center text-lg mb-4">4</div>
                    <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step4_title') }}</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">{{ __('site.first_aid_summary.step4_desc') }}</p>
                </div>
            </div>
        </div>

        <!-- Critical Do Nots -->
        <div class="mt-8 bg-red-50 border border-red-200 rounded-2xl p-6 sm:p-8">
            <h4 class="font-extrabold text-red-900 text-base sm:text-lg flex items-center gap-2">
                <svg class="w-5 h-5 text-red-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                <span>{{ __('site.first_aid_summary.dont_title') }}</span>
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4 text-xs sm:text-sm text-red-800 font-medium">
                <div class="flex items-start gap-2 bg-white/70 p-3 rounded-xl border border-red-100">
                    <span class="text-red-600 font-bold">✕</span>
                    <span>{{ __('site.first_aid_summary.dont_mouth') }}</span>
                </div>
                <div class="flex items-start gap-2 bg-white/70 p-3 rounded-xl border border-red-100">
                    <span class="text-red-600 font-bold">✕</span>
                    <span>{{ __('site.first_aid_summary.dont_restrain') }}</span>
                </div>
                <div class="flex items-start gap-2 bg-white/70 p-3 rounded-xl border border-red-100">
                    <span class="text-red-600 font-bold">✕</span>
                    <span>{{ __('site.first_aid_summary.dont_liquids') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Health Navigator Launch Card -->
<section class="py-14 bg-white border-t border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-purple-900 to-indigo-900 rounded-3xl p-8 sm:p-12 text-white shadow-xl flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="space-y-4 max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-700/80 text-purple-200 text-xs font-semibold">
                    <span>Core Feature</span> • <span>Bilingual (English / Kiswahili)</span> • <span>100% Free</span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight">
                    Smart Health Navigator & Facility Finder
                </h2>
                <p class="text-sm sm:text-base text-purple-100/90 leading-relaxed">
                    Unsure where to find an accredited clinic, EEG testing, or epilepsy consultation in Trans-Nzoia?
                    Our free, voice-enabled assistant helps you find verified local care without medical guesswork.
                </p>
                <div class="flex items-center gap-4 text-xs text-purple-300">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        No diagnosis, purely navigation
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Voice-to-Text with transcript check
                    </span>
                </div>
            </div>

            <div class="shrink-0 w-full lg:w-auto">
                <a href="{{ route('navigator') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl bg-white text-purple-950 font-extrabold text-base shadow-lg hover:bg-purple-50 transition transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    <span>Open Smart Navigator</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp & Organizational Contact Channel Banner -->
<section class="py-12 bg-slate-50 border-t border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl border border-purple-100 p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xs">
            <div class="space-y-2">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                    <h3 class="font-bold text-slate-900 text-lg">{{ __('site.whatsapp.title') }}</h3>
                    <span class="text-xs bg-slate-100 text-slate-700 px-2.5 py-0.5 rounded-full font-medium">{{ __('site.whatsapp.status') }}</span>
                </div>
                <p class="text-xs sm:text-sm text-slate-600 max-w-xl">
                    {{ __('site.whatsapp.notice') }}
                </p>
                <p class="text-xs font-semibold text-purple-900">
                    {{ __('site.whatsapp.hours') }}
                </p>
            </div>
            
            <div class="shrink-0">
                <a href="https://wa.me/254700000000?text=Hello%20Life%20Beyond%20Epilepsy%2C%20I%20would%20like%20to%20enquire%20about%20your%20community%20programs." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm shadow hover:bg-emerald-700 transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>{{ __('site.whatsapp.btn') }}</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
