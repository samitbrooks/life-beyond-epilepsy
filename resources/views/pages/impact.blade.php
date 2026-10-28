@extends('layouts.app')

@section('title', 'Impact & Transparency | Life Beyond Epilepsy')
@section('meta_description', 'Real outcomes, activity updates, and ethical accountability reporting for Life Beyond Epilepsy in Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Accountability First
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Impact & Transparency
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            We believe in honest, grounded reporting. We do not publish fabricated statistics or inflated figures.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- Ethical Reporting Standard Box -->
    <div class="p-6 rounded-2xl bg-white border border-purple-100 shadow-xs space-y-2">
        <h2 class="text-lg font-bold text-purple-950 flex items-center gap-2">
            <span class="text-purple-600">⚖️</span>
            <span>Beneficiary Privacy & Truth in Reporting</span>
        </h2>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            In strict adherence to Section 3 of our Development Brief, LBE protects the confidentiality and dignity of every child and adult we interact with. Health outcomes are reported in aggregate or anonymized form with explicit consent.
        </p>
    </div>

    <!-- Verified Milestones (Trans-Nzoia Pilot Phase) -->
    <div class="space-y-6">
        <h2 class="text-2xl font-bold text-slate-900">Current Pilot Progress (Trans-Nzoia County)</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-3xl bg-purple-50/50 border border-purple-100 text-center space-y-2">
                <span class="text-3xl sm:text-4xl font-extrabold text-purple-900">5</span>
                <h3 class="font-bold text-slate-900 text-sm">Sub-Counties Mapped</h3>
                <p class="text-xs text-slate-500">Kitale, Kiminini, Cherangany, Endebess, and Saboti public health facilities identified.</p>
            </div>

            <div class="p-6 rounded-3xl bg-purple-50/50 border border-purple-100 text-center space-y-2">
                <span class="text-3xl sm:text-4xl font-extrabold text-purple-900">100%</span>
                <h3 class="font-bold text-slate-900 text-sm">Bilingual Guidance</h3>
                <p class="text-xs text-slate-500">Clinician-reviewed first-aid and myth-busting materials produced in plain English & Kiswahili.</p>
            </div>

            <div class="p-6 rounded-3xl bg-purple-50/50 border border-purple-100 text-center space-y-2">
                <span class="text-3xl sm:text-4xl font-extrabold text-purple-900">Phase 1</span>
                <h3 class="font-bold text-slate-900 text-sm">Digital Platform Launch</h3>
                <p class="text-xs text-slate-500">Establishing free public access to verified health navigation and emergency awareness.</p>
            </div>
        </div>
    </div>

    <!-- Annual Reporting Commitment -->
    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
        <h3 class="font-bold text-slate-900 text-base">Annual Review & Community Audits</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            As clinical referral cohorts and educational camps are rolled out, formal financial statements, facility verification audits, and community feedback summaries will be published as downloadable PDF reports on this page.
        </p>
    </div>
</div>
@endsection

