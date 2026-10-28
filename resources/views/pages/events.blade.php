@extends('layouts.app')

@section('title', 'Events & Campaigns | Life Beyond Epilepsy')
@section('meta_description', 'Upcoming community outreach camps, Purple Day celebrations, and school awareness campaigns in Trans-Nzoia County.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Community Outreach
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Events & Awareness Campaigns
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Join our grassroots outreach drives, school workshops, and clinical education days across Trans-Nzoia County.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- Upcoming Events -->
    <div class="space-y-6">
        <h2 class="text-2xl font-bold text-slate-900">Upcoming Events (2026/2027)</h2>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-purple-700 text-white flex flex-col items-center justify-center font-bold shrink-0">
                        <span class="text-xs uppercase tracking-wider">NOV</span>
                        <span class="text-xl">14</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-purple-700 uppercase tracking-wider">Community Outreach</span>
                        <h3 class="text-lg font-bold text-slate-900 mt-0.5">Kitale Community Epilepsy Education Camp</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">Free public seizure first-aid training, clinician Q&A, and healthcare navigation desk.</p>
                        <div class="flex items-center gap-3 text-xs text-slate-500 mt-2">
                            <span>📍 Kitale Town Hall Grounds</span>
                            <span>⏰ 9:00 AM – 3:30 PM EAT</span>
                        </div>
                    </div>
                </div>
                <div class="shrink-0">
                    <a href="{{ route('get-involved') }}" class="px-5 py-2.5 rounded-xl bg-purple-100 text-purple-800 font-bold text-xs hover:bg-purple-200 transition">
                        Volunteer Here
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-purple-700 text-white flex flex-col items-center justify-center font-bold shrink-0">
                        <span class="text-xs uppercase tracking-wider">DEC</span>
                        <span class="text-xl">05</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-purple-700 uppercase tracking-wider">Schools Initiative</span>
                        <h3 class="text-lg font-bold text-slate-900 mt-0.5">Kiminini Sub-County Teacher Workshop</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">Epilepsy inclusion training for primary school headteachers and guidance counselors.</p>
                        <div class="flex items-center gap-3 text-xs text-slate-500 mt-2">
                            <span>📍 Kiminini Educational Centre</span>
                            <span>⏰ 10:00 AM – 1:00 PM EAT</span>
                        </div>
                    </div>
                </div>
                <div class="shrink-0">
                    <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-xl bg-purple-100 text-purple-800 font-bold text-xs hover:bg-purple-200 transition">
                        Request Invite
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Purple Day Kenya -->
    <div class="bg-gradient-to-r from-purple-800 to-indigo-900 rounded-3xl p-8 sm:p-10 text-white space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-300 bg-purple-700 px-3 py-1 rounded-full">Annual Campaign</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Purple Day Kenya (March 26)</h2>
        <p class="text-xs sm:text-sm text-purple-100 max-w-2xl leading-relaxed">
            Every year on March 26th, people around the world wear purple to support epilepsy awareness. Life Beyond Epilepsy leads county walks, school talks, and social media campaigns across Trans-Nzoia to say: <em>You are not alone.</em>
        </p>
        <div class="pt-2">
            <a href="{{ route('get-involved') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-white text-purple-900 font-bold text-xs shadow hover:bg-purple-50 transition">
                Become a Purple Day Ambassador
            </a>
        </div>
    </div>
</div>
@endsection
