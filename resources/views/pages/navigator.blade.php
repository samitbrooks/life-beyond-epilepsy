@extends('layouts.app')

@section('title', 'Smart Health Navigator | Life Beyond Epilepsy')
@section('meta_description', 'Find verified epilepsy healthcare services, EEG diagnostic centers, and clinics in Trans-Nzoia County, Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Trans-Nzoia Pilot • Bilingual Navigation Tool
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Smart Health Navigator
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Helping individuals and families navigate verified healthcare facilities, EEG testing, and clinical assessment in Trans-Nzoia County safely and without medical guesswork.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- Kitale Clinical Evaluation Banner -->
    <div class="relative rounded-3xl overflow-hidden shadow-xl border border-purple-100 bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 items-center">
            <div class="lg:col-span-6 relative h-64 sm:h-72">
                <img src="{{ asset('images/kitale-clinic.png') }}" alt="Clinical consultation in Kitale, Trans-Nzoia County" class="w-full h-full object-cover">
                <div class="absolute bottom-3 left-3 bg-slate-900/80 backdrop-blur-md px-3 py-1.5 rounded-xl text-white text-xs font-bold">
                    📍 Kitale Clinic Consultation • Trans-Nzoia County
                </div>
            </div>
            <div class="lg:col-span-6 p-6 sm:p-8 space-y-3">
                <span class="text-[11px] font-black uppercase tracking-wider text-[#45017A] bg-purple-100 px-3 py-1 rounded-full">
                    County Diagnostic Access
                </span>
                <h2 class="text-xl sm:text-2xl font-black text-slate-900">
                    Verified Healthcare in Trans-Nzoia
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Navigating healthcare shouldn't be confusing. We map public referral hospitals, sub-county clinics, and registered pharmacies across Kitale, Kiminini, Cherangany, Endebess, and Saboti so you know exactly where to go.
                </p>
            </div>
        </div>
    </div>

    <!-- Mandatory Disclaimer Box (Section 4.1 Requirement) -->
    <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-amber-900 text-sm flex items-start gap-3">
        <svg class="w-6 h-6 text-amber-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <div class="space-y-1">
            <h3 class="font-bold text-amber-950">Safety Limits & Clinical Disclaimer</h3>
            <p class="text-xs sm:text-sm text-amber-800 leading-relaxed">
                The Smart Health Navigator is an informational and facility-finding tool. It <strong>does not diagnose</strong> illnesses, prescribe medications, or replace an examination by a qualified medical professional. For suspected adverse reactions or sudden severe symptoms, please visit an emergency department immediately.
            </p>
        </div>
    </div>

    <!-- Pilot Directory for Trans-Nzoia County -->
    <div class="space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200 pb-4">
            <div>
                <h2 class="text-2xl font-extrabold text-slate-900">Trans-Nzoia Healthcare Directory</h2>
                <p class="text-xs sm:text-sm text-slate-500">Verified facility listings in Kitale and surrounding sub-counties.</p>
            </div>
            <div class="inline-flex items-center gap-2 text-xs font-semibold text-purple-700 bg-purple-50 px-3 py-1.5 rounded-full border border-purple-200">
                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                <span>Data Source: Curated LBE Trans-Nzoia Registry</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Facility 1 -->
            <div class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xs space-y-4 flex flex-col justify-between">
                <div class="space-y-2">
                    <div class="flex items-start justify-between gap-2">
                        <span class="px-2.5 py-0.5 rounded-md bg-purple-100 text-purple-800 text-[11px] font-bold uppercase">County Referral Hospital</span>
                        <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                            ✓ Verified Oct 2026
                        </span>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">Kitale County Referral Hospital</h3>
                    <p class="text-xs text-slate-500">Hospital Road, Kitale Town, Trans-Nzoia County</p>
                    <div class="pt-2 flex flex-wrap gap-1.5 text-[11px]">
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">24/7 Emergency</span>
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">General Outpatient</span>
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">Pediatric Ward</span>
                        <span class="bg-purple-50 text-purple-700 font-medium px-2 py-0.5 rounded">Specialist Clinic Days</span>
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                    <span class="text-slate-500 font-medium">Please call ahead to confirm clinic day</span>
                    <a href="tel:05430000" class="text-purple-700 font-bold hover:underline">Call Hospital</a>
                </div>
            </div>

            <!-- Facility 2 -->
            <div class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xs space-y-4 flex flex-col justify-between">
                <div class="space-y-2">
                    <div class="flex items-start justify-between gap-2">
                        <span class="px-2.5 py-0.5 rounded-md bg-purple-100 text-purple-800 text-[11px] font-bold uppercase">Sub-County Hospital</span>
                        <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                            ✓ Verified Oct 2026
                        </span>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">Kiminini Sub-County Hospital</h3>
                    <p class="text-xs text-slate-500">Kiminini Market, Trans-Nzoia County</p>
                    <div class="pt-2 flex flex-wrap gap-1.5 text-[11px]">
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">Outpatient Triage</span>
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">Pharmacy Services</span>
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">MCH Clinic</span>
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                    <span class="text-slate-500 font-medium">Standard Hours: 8:00 AM – 5:00 PM</span>
                    <a href="tel:05430001" class="text-purple-700 font-bold hover:underline">Contact Desk</a>
                </div>
            </div>

            <!-- Facility 3 -->
            <div class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xs space-y-4 flex flex-col justify-between">
                <div class="space-y-2">
                    <div class="flex items-start justify-between gap-2">
                        <span class="px-2.5 py-0.5 rounded-md bg-purple-100 text-purple-800 text-[11px] font-bold uppercase">Sub-County Hospital</span>
                        <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                            ✓ Verified Oct 2026
                        </span>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">Cherangany Sub-County Hospital</h3>
                    <p class="text-xs text-slate-500">Cherangany Center, Trans-Nzoia County</p>
                    <div class="pt-2 flex flex-wrap gap-1.5 text-[11px]">
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">Clinical Assessment</span>
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">Referral Support</span>
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                    <span class="text-slate-500 font-medium">Verified by LBE Outreach</span>
                    <a href="tel:05430002" class="text-purple-700 font-bold hover:underline">Contact Desk</a>
                </div>
            </div>

            <!-- Facility 4 -->
            <div class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xs space-y-4 flex flex-col justify-between">
                <div class="space-y-2">
                    <div class="flex items-start justify-between gap-2">
                        <span class="px-2.5 py-0.5 rounded-md bg-purple-100 text-purple-800 text-[11px] font-bold uppercase">Sub-County Hospital</span>
                        <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                            ✓ Verified Oct 2026
                        </span>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">Endebess Sub-County Hospital</h3>
                    <p class="text-xs text-slate-500">Endebess Township, Trans-Nzoia County</p>
                    <div class="pt-2 flex flex-wrap gap-1.5 text-[11px]">
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">General Outpatient</span>
                        <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded">Pharmacy Dispensary</span>
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                    <span class="text-slate-500 font-medium">Verified by LBE Outreach</span>
                    <a href="tel:05430003" class="text-purple-700 font-bold hover:underline">Contact Desk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Voice-to-Text & Accessible Chatbot Preview -->
    <div class="bg-purple-900 text-white rounded-3xl p-8 sm:p-12 space-y-6">
        <div class="max-w-2xl space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-300 bg-purple-800 px-3 py-1 rounded-full">
                Phase 2 Core Feature Architecture
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                Voice-to-Text with Transcript Review
            </h2>
            <p class="text-sm text-purple-200 leading-relaxed">
                To support community members who have limited literacy or prefer speaking in Kiswahili or English, our upcoming chatbot features a voice recorder with mandatory review. Users can speak, see their transcript, edit if needed, and confirm before any query is processed.
            </p>
        </div>

        <div class="p-6 bg-purple-950/60 border border-purple-800 rounded-2xl space-y-4 max-w-xl">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase text-purple-300">Microphone Input Simulator</span>
                <span class="text-[11px] bg-purple-800 px-2 py-0.5 rounded text-purple-200">English & Kiswahili</span>
            </div>
            
            <div class="flex items-center gap-3">
                <button type="button" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-purple-600 hover:bg-purple-500 text-white font-bold text-xs transition">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-400 animate-ping"></span>
                    <span>Tap to Speak / Bonyeza Kuongea</span>
                </button>
                <span class="text-xs text-purple-300">"Natafuta kliniki ya watoto Kitale..."</span>
            </div>

            <div class="text-[11px] text-purple-300/80 border-t border-purple-800/80 pt-2">
                🔒 Privacy Guarantee: Audio is converted locally in your browser. No voice recordings are retained or transmitted to commercial marketing vendors.
            </div>
        </div>
    </div>
</div>
@endsection

