@extends('layouts.app')

@section('title', 'Medical Support Pathways | Life Beyond Epilepsy')
@section('meta_description', 'Learn about LBE\'s planned medical-support pathways, transparent criteria, and patient assistance programs in Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Transparent Care Navigation
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Medical Support Pathways
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Connecting families to diagnostic evaluation, specialized neurology consultations, and medication adherence support.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- Non-Negotiable Transparency Box (Section 3 Requirement) -->
    <div class="p-6 rounded-2xl bg-slate-100 border border-slate-300 text-slate-800 text-sm space-y-2">
        <h3 class="font-bold text-slate-900 flex items-center gap-2">
            <svg class="w-5 h-5 text-purple-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span>Ethical Commitment & Support Boundaries</span>
        </h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            In compliance with our founding charter, Life Beyond Epilepsy does <strong>not</strong> promise free treatments, specialized tests, or direct financial handouts that have not been secured and independently verified. Our role is to navigate families to existing accredited healthcare facilities and partner subsidies as resources become available.
        </p>
    </div>

    <!-- The 3-Step Pathway -->
    <div class="space-y-6">
        <h2 class="text-2xl font-bold text-slate-900">How Support Pathways Work</h2>
        
        <div class="space-y-4">
            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center shrink-0">1</div>
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Initial Assessment & Referral</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">Families experiencing recurrent seizures are guided to accredited sub-county health centres or Kitale County Referral Hospital for clinical history evaluation.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center shrink-0">2</div>
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Diagnostic Facilitation (EEG & Scans)</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">As clinical partnerships are solidified in Trans-Nzoia and Eldoret, LBE coordinates scheduling and transport subsidies for electroencephalogram (EEG) diagnostic testing.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 font-bold flex items-center justify-center shrink-0">3</div>
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Long-Term Medication Adherence & Counseling</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">Partnering with local Community Health Promoters (CHPs) to support regular clinic visits, avoid sudden drug withdrawal, and provide psychosocial support.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Eligibility Criteria -->
    <div class="p-8 rounded-3xl bg-purple-50/60 border border-purple-100 space-y-4">
        <h2 class="text-xl font-bold text-purple-950">Intended Eligibility Criteria</h2>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            When structured diagnostic and medical assistance programs open for cohort applications, candidates will be prioritized based on:
        </p>
        <ul class="text-xs sm:text-sm text-slate-700 space-y-2 list-disc list-inside">
            <li>Children and school-going youth with suspected or diagnosed epilepsy in Trans-Nzoia County.</li>
            <li>Low-income families lacking Social Health Insurance Fund (SHIF/SHA) coverage or facing economic hardship.</li>
            <li>Referral from a registered public clinician, community health worker, or partnering school headteacher.</li>
        </ul>
    </div>
</div>
@endsection

