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
    <!-- Trans-Nzoia Regional Focus & Mount Elgon Landscape -->
    <div class="relative rounded-3xl overflow-hidden border border-purple-100 shadow-xl bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
            <div class="lg:col-span-7 p-8 sm:p-12 space-y-4 flex flex-col justify-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 text-[#45017A] text-xs font-black uppercase tracking-wider w-fit">
                    <span class="w-2 h-2 rounded-full bg-[#F29000]"></span>
                    <span>County Pilot Region</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                    Rooted in Trans-Nzoia: The Mount Elgon Healthcare Pilot
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Trans-Nzoia County—stretching from the agricultural plains of Kitale up to the lush slopes of Mount Elgon—presents unique healthcare navigation challenges. Rural distance to diagnostic facilities, misconceptions regarding seizure disorders, and limited specialized neurologist access mean that early intervention is vital.
                </p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs font-bold text-[#45017A]">
                    <div class="p-3 rounded-xl bg-purple-50/60 border border-purple-100 text-center">
                        <span class="block text-slate-900 font-black text-sm">Kitale Base</span>
                        <span class="text-[11px] text-slate-500">Central Referral</span>
                    </div>
                    <div class="p-3 rounded-xl bg-purple-50/60 border border-purple-100 text-center">
                        <span class="block text-slate-900 font-black text-sm">5 Sub-Counties</span>
                        <span class="text-[11px] text-slate-500">Full Coverage</span>
                    </div>
                    <div class="p-3 rounded-xl bg-purple-50/60 border border-purple-100 text-center col-span-2 sm:col-span-1">
                        <span class="block text-[#F29000] font-black text-sm">Community Led</span>
                        <span class="text-[11px] text-slate-500">Local Volunteers</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5 relative min-h-64 sm:min-h-80">
                <img src="{{ asset('images/trans-nzoia-landscape.jpg') }}" alt="Mount Elgon National Park and forest landscape in Trans-Nzoia, Kenya" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent lg:hidden"></div>
                <div class="absolute bottom-3 left-3 right-3 text-white text-[11px] font-bold p-2 bg-black/40 backdrop-blur-sm rounded-xl">
                    📍 Mount Elgon & Trans-Nzoia County Landscape
                </div>
            </div>
        </div>
    </div>

    <!-- Community Health Promoters in Action -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="rounded-3xl overflow-hidden shadow-lg border border-purple-100">
            <img src="{{ asset('images/chw-training.jpg') }}" alt="Community Health Promoters in Kenya training for epilepsy awareness" class="w-full h-72 object-cover">
            <div class="p-4 bg-white text-xs text-slate-600">
                <span class="font-bold text-[#45017A] block">Grassroots Mobilization:</span>
                Empowering Community Health Promoters (CHPs) with clinical seizure first aid training and stigma-reduction toolkits.
            </div>
        </div>

        <div class="space-y-4">
            <span class="text-xs font-black uppercase tracking-wider text-[#45017A] bg-purple-100 px-3 py-1 rounded-full">
                Frontline Impact
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900">
                Bridging the Gap Between Clinics & Households
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Families facing first-time seizures often delay clinical visits because of superstition or fear of high diagnostic costs. By equipping community leaders and local champions with knowledge, LBE ensures families find verified care at Kitale County Referral Hospital and sub-county dispensaries without delay.
            </p>
            <div class="pt-2">
                <a href="{{ route('navigator') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#45017A] text-white font-bold text-xs shadow hover:bg-[#320059] transition">
                    <span>Find Verified Facilities in Trans-Nzoia →</span>
                </a>
            </div>
        </div>
    </div>

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

