@extends('layouts.app')

@section('title', 'About Us | Life Beyond Epilepsy')
@section('meta_description', 'Learn about Life Beyond Epilepsy (LBE), our leadership, mission, vision, and grassroots work in Trans-Nzoia County, Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Our Story & Vision
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            About Life Beyond Epilepsy (LBE)
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Building a dignified, inclusive, and medically supported future for people living with epilepsy in Trans-Nzoia County and throughout Kenya.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Mission & Vision -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-xl mb-4">
                🎯
            </div>
            <h2 class="text-2xl font-bold text-purple-950">Our Mission</h2>
            <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                To dispel myths surrounding epilepsy, eliminate discrimination, and empower affected children and adults by providing accessible, verified health navigation and community care pathways.
            </p>
        </div>

        <div class="p-8 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-xl mb-4">
                👁️
            </div>
            <h2 class="text-2xl font-bold text-purple-950">Our Vision</h2>
            <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                A Kenya where epilepsy is understood as a manageable neurological condition, free from stigma, where every individual has timely access to diagnosis, care, and equal opportunities in education and society.
            </p>
        </div>
    </div>

    <!-- Core Values -->
    <div class="space-y-6">
        <h2 class="text-2xl font-extrabold text-slate-900 text-center">Our Guiding Values</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-2xl bg-purple-50/50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-base">Dignity & Respect</h3>
                <p class="text-xs sm:text-sm text-slate-600 mt-2">Every individual deserves compassionate, respectful engagement free from cultural shame or marginalization.</p>
            </div>
            <div class="p-6 rounded-2xl bg-purple-50/50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-base">Clinical Integrity</h3>
                <p class="text-xs sm:text-sm text-slate-600 mt-2">All health information and service navigation is grounded in verified medical evidence and vetted by licensed clinicians.</p>
            </div>
            <div class="p-6 rounded-2xl bg-purple-50/50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-base">Community Empowerment</h3>
                <p class="text-xs sm:text-sm text-slate-600 mt-2">Partnering with schools, local churches, village elders, and Community Health Promoters (CHPs) for sustainable impact.</p>
            </div>
            <div class="p-6 rounded-2xl bg-purple-50/50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-base">Transparency</h3>
                <p class="text-xs sm:text-sm text-slate-600 mt-2">Honest reporting of resources, realistic medical promises, and ethical stewardship of all support received.</p>
            </div>
        </div>
    </div>

    <!-- Governance & Legal Transparency (Section 3 Requirement) -->
    <div class="p-8 rounded-3xl bg-slate-100 border border-slate-200 space-y-4">
        <h2 class="text-xl font-bold text-slate-900">Governance & Institutional Transparency</h2>
        <p class="text-sm text-slate-600 leading-relaxed">
            Life Beyond Epilepsy (LBE) is established as a grassroots community health initiative in Kenya. In accordance with Section 3 of our operational guidelines, we publish only verified administrative details:
        </p>
        <ul class="text-xs sm:text-sm text-slate-700 space-y-2 list-disc list-inside bg-white p-5 rounded-2xl border border-slate-200">
            <li><strong>Initial Focus County:</strong> Trans-Nzoia County (Headquarters & Pilot coordination based in Kitale, Kenya).</li>
            <li><strong>Medical Oversight:</strong> Advisory clinical review panel for public educational materials.</li>
            <li><strong>Non-Emergency Mandate:</strong> LBE operates as an educational and navigation body, not an acute emergency response unit or clinical dispensary.</li>
            <li><strong>Official Registration:</strong> Institutional registration documentation and certified filings are maintained with relevant county and national authorities.</li>
        </ul>
    </div>
</div>
@endsection
