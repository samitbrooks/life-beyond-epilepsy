@extends('layouts.app')

@section('title', __('site.org_name') . ' | ' . __('site.tagline'))

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#320059] via-[#45017A] to-[#1F0038] text-white py-16 sm:py-24">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Text Column -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-purple-200 text-xs sm:text-sm font-bold">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#F29000] animate-pulse"></span>
                    <span>{{ __('site.pilot_badge') }}</span>
                </div>
                
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-tight">
                    {{ __('site.home.hero_title') }}
                </h1>

                <p class="text-base sm:text-xl text-purple-100/90 leading-relaxed font-normal">
                    {{ __('site.home.hero_subtitle') }}
                </p>

                <!-- Main CTA Buttons (From Section 3 Home requirements) -->
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="{{ route('awareness') }}" class="px-5 py-3 rounded-xl bg-white text-[#45017A] font-black text-sm shadow hover:bg-purple-50 transition flex items-center gap-2">
                        <span>{{ __('site.home.cta_learn') }}</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    <a href="{{ route('navigator') }}" class="px-5 py-3 rounded-xl bg-[#8034FA] text-white font-bold text-sm shadow hover:bg-[#6D28D9] border border-purple-400/30 transition flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#F29000]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        <span>{{ __('site.home.cta_navigator') }}</span>
                    </a>
                    <a href="{{ route('get-involved') }}" class="px-5 py-3 rounded-xl bg-white/10 text-purple-100 font-bold text-sm hover:bg-white/20 border border-white/20 transition">
                        {{ __('site.home.cta_involved') }}
                    </a>
                    <a href="{{ route('donate') }}" class="px-5 py-3 rounded-xl bg-[#F29000] text-slate-950 font-black text-sm shadow hover:bg-[#D97706] transition">
                        {{ __('site.home.cta_donate') }}
                    </a>
                </div>
            </div>

            <!-- Right Hero Image Column (Authentic Clinical Consultation in Kenya) -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-white/20 bg-purple-950/40">
                    <img src="{{ asset('images/hero-clinical.jpg') }}" alt="Kenyan healthcare professional consulting with mother and child in Trans-Nzoia" class="w-full h-80 sm:h-96 object-cover object-center transform hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1F0038]/90 via-transparent to-transparent"></div>
                    
                    <!-- Floating Pill Badge -->
                    <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-3.5 rounded-2xl shadow-lg border border-purple-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#45017A] text-[#F29000] flex items-center justify-center font-black text-lg shrink-0">
                            ✓
                        </div>
                        <div class="overflow-hidden">
                            <span class="text-xs font-black text-[#45017A] block leading-tight">Dignified Care & Medical Navigation</span>
                            <span class="text-[11px] text-slate-600 font-medium block truncate">Trans-Nzoia County • Pilot Clinical Network</span>
                        </div>
                    </div>
                </div>

                <!-- Sun Accent Glow -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#F29000]/20 rounded-full blur-2xl pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>

<!-- Epilepsy.com Style Emergency First Aid Action Ribbon -->
<section class="bg-red-50 border-b border-red-200 py-3.5 px-4">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3 text-xs sm:text-sm">
        <div class="flex items-center gap-2.5 text-red-900 font-bold text-center sm:text-left">
            <span class="w-2.5 h-2.5 rounded-full bg-red-600 animate-ping shrink-0"></span>
            <span>{{ __('site.emergency_ribbon.witnessing') }}</span>
        </div>
        <div class="flex items-center gap-2 shrink-0">
            <a href="{{ route('awareness') }}#first-aid" class="text-xs font-black text-red-700 bg-white px-3 py-1 rounded-full border border-red-300 shadow-xs hover:bg-red-100 transition">
                {{ __('site.emergency_ribbon.view_guide') }}
            </a>
            <a href="tel:999" class="text-xs font-black text-white bg-red-700 px-3 py-1 rounded-full shadow-xs hover:bg-red-800 transition">
                {{ __('site.emergency_ribbon.call_emergency') }}
            </a>
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
            <span class="text-xs font-bold uppercase tracking-wider text-[#45017A] bg-purple-100 px-3 py-1 rounded-full">
                Clinician-Reviewed Guidance
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">
                {{ __('site.first_aid_summary.title') }}
            </h2>
            <p class="text-sm sm:text-base text-slate-600 mt-2">
                {{ __('site.first_aid_summary.subtitle') }}
            </p>
        </div>

        <!-- First Aid Steps with Action Photo Card -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-8">
            <!-- First Aid Documentary Photo Card -->
            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden shadow-xl border border-purple-100 bg-white">
                    <img src="{{ asset('images/first-aid-care.jpg') }}" alt="Kenyan community first aid volunteer assisting person in recovery position" class="w-full h-80 object-cover object-center">
                    <div class="p-4 bg-white/95 border-t border-purple-100">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
                            <span class="text-xs font-black uppercase text-[#45017A]">Safe Recovery Position</span>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            Gently cushion the head with soft folded cloth, loosen tight neckwear, and turn onto one side to maintain an open, clear airway.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Steps Grid -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-[#45017A] font-black flex items-center justify-center text-lg mb-3">1</div>
                        <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step1_title') }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1.5 leading-relaxed">{{ __('site.first_aid_summary.step1_desc') }}</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-[#45017A] font-black flex items-center justify-center text-lg mb-3">2</div>
                        <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step2_title') }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1.5 leading-relaxed">{{ __('site.first_aid_summary.step2_desc') }}</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-[#45017A] font-black flex items-center justify-center text-lg mb-3">3</div>
                        <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step3_title') }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1.5 leading-relaxed">{{ __('site.first_aid_summary.step3_desc') }}</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-[#45017A] font-black flex items-center justify-center text-lg mb-3">4</div>
                        <h3 class="font-bold text-slate-900 text-base">{{ __('site.first_aid_summary.step4_title') }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1.5 leading-relaxed">{{ __('site.first_aid_summary.step4_desc') }}</p>
                    </div>
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

<!-- School Inclusion & Children in Classrooms Section -->
<section class="py-16 bg-white border-t border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <!-- Left Text Content -->
            <div class="lg:col-span-6 space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 border border-purple-200 text-[#45017A] text-xs font-bold">
                    <span class="w-2 h-2 rounded-full bg-[#F29000]"></span>
                    <span>Youth & Education Initiative</span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                    Every Child with Epilepsy Has the Right to Learn in Safety
                </h2>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    Stigma and fear should never prevent a child in Trans-Nzoia from completing their education. Through school workshops, teacher sensitization, and classmate peer empathy, we build classrooms where seizures are met with calm first aid rather than fear.
                </p>

                <div class="space-y-3 pt-2 text-xs sm:text-sm text-slate-700">
                    <div class="flex items-start gap-3">
                        <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Individual Seizure Action Plans:</strong> Practical, 1-page emergency guides shared with teachers and headmasters.</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Anti-Bullying Peer Education:</strong> Dispelling misconceptions that epilepsy is contagious, evil, or cursed.</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                        <span><strong>Kenyan Curriculum Inclusion:</strong> Ensuring academic continuity and test accommodations during recovery.</span>
                    </div>
                </div>

                <div class="pt-3">
                    <a href="{{ route('children') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-[#45017A] hover:bg-[#320059] text-white font-black text-sm shadow-md transition group">
                        <span>Explore School Toolkit & Resources</span>
                        <span class="text-[#F29000] group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>
            </div>

            <!-- Right Classroom Photo -->
            <div class="lg:col-span-6 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-purple-100">
                    <img src="{{ asset('images/school-inclusion.jpg') }}" alt="African primary school children learning together in Kenyan classroom" class="w-full h-80 sm:h-96 object-cover object-center transform hover:scale-102 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white p-2">
                        <span class="text-xs font-black uppercase tracking-wider text-[#F29000] block">Inclusive Classrooms</span>
                        <span class="text-xs text-white/90">Supporting students across Kitale, Kiminini, Cherangany, Endebess and Saboti</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Advocacy & Voices of Hope Section -->
<section class="py-16 bg-slate-50 border-t border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-[#45017A] bg-purple-100 px-3 py-1 rounded-full">
                Grassroots Impact
            </span>
            <h2 class="text-2xl sm:text-4xl font-black text-slate-900 mt-3">
                Breaking Myths, Building Dignity in Trans-Nzoia
            </h2>
            <p class="text-sm sm:text-base text-slate-600 mt-2">
                Real community members, caregivers, and clinicians uniting across Mount Elgon to transform epilepsy perception.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
            <!-- Community Outreach Card -->
            <div class="bg-white rounded-3xl overflow-hidden border border-purple-100 shadow-sm flex flex-col justify-between group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/community-outreach.jpg') }}" alt="Community healthcare meeting in Kenya" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-black text-[#45017A] shadow-xs">
                        Community Barazas
                    </div>
                </div>
                <div class="p-6 sm:p-8 space-y-3 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-black text-slate-900">Grassroots Village Workshops</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            We partner with local chiefs, pastors, and Community Health Promoters (CHPs) to engage families, educate village elders, and debunk dangerous myths that associate seizures with curses or witchcraft.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold text-[#45017A]">5 Sub-Counties Covered</span>
                        <a href="{{ route('events') }}" class="text-xs font-black text-[#F29000] hover:underline">View Campaigns →</a>
                    </div>
                </div>
            </div>

            <!-- Youth Empowerment Card -->
            <div class="bg-white rounded-3xl overflow-hidden border border-purple-100 shadow-sm flex flex-col justify-between group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/spirited-young-woman.jpg') }}" alt="Empowered young Kenyan woman living beyond epilepsy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-black text-[#45017A] shadow-xs">
                        Empowered Living
                    </div>
                </div>
                <div class="p-6 sm:p-8 space-y-3 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-black text-slate-900">Life Beyond Epilepsy: Thriving in Youth</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            "Epilepsy is a neurological condition that can be managed. With adherence to anti-seizure medication and empathetic friends, I have excelled in college and am pursuing my career without shame."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-500">Peer Support Champions</span>
                        <a href="{{ route('impact') }}" class="text-xs font-black text-[#45017A] hover:underline">Read Stories →</a>
                    </div>
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
                    <span>{{ __('site.home.navigator_card_badge') }}</span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight">
                    {{ __('site.home.navigator_card_title') }}
                </h2>
                <p class="text-sm sm:text-base text-purple-100/90 leading-relaxed">
                    {{ __('site.home.navigator_card_desc') }}
                </p>
                <div class="flex items-center gap-4 text-xs text-purple-300">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        {{ __('site.home.navigator_card_point1') }}
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        {{ __('site.home.navigator_card_point2') }}
                    </span>
                </div>
            </div>

            <div class="shrink-0 w-full lg:w-auto">
                <a href="{{ route('navigator') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl bg-white text-purple-950 font-extrabold text-base shadow-lg hover:bg-purple-50 transition transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    <span>{{ __('site.home.navigator_card_btn') }}</span>
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

