@extends('layouts.app')

@section('title', 'Donate & Support | Life Beyond Epilepsy')
@section('meta_description', 'Support Life Beyond Epilepsy. Learn how contributions fund community education, EEG diagnostic transport, and school awareness in Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Transparent Stewardship
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Support Our Mission
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Your generous contributions fund life-changing community education, school inclusion kits, and diagnostic travel subsidies for vulnerable children in Kenya.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- What Donations Support -->
    <div class="space-y-6">
        <h2 class="text-2xl font-bold text-slate-900">Where Your Support Goes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl bg-white border border-purple-100 shadow-xs space-y-2">
                <div class="text-2xl">🧠</div>
                <h3 class="font-bold text-slate-900 text-sm">Diagnostic EEG Subsidies</h3>
                <p class="text-xs text-slate-600">Helping low-income families cover specialized electroencephalogram testing and travel costs to referral centers.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-purple-100 shadow-xs space-y-2">
                <div class="text-2xl">📚</div>
                <h3 class="font-bold text-slate-900 text-sm">School Inclusion Kits</h3>
                <p class="text-xs text-slate-600">Equipping primary school classrooms with child-friendly epilepsy educational storybooks and teacher first-aid manuals.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-purple-100 shadow-xs space-y-2">
                <div class="text-2xl">📢</div>
                <h3 class="font-bold text-slate-900 text-sm">Grassroots Anti-Stigma Drives</h3>
                <p class="text-xs text-slate-600">Conducting village outreach, local barazas, and radio education to challenge myths and protect individuals from abuse.</p>
            </div>
        </div>
    </div>

    <!-- Transparent Financial Protocols (Section 3 Requirement) -->
    <div class="bg-purple-900 text-white rounded-3xl p-8 sm:p-10 space-y-6">
        <div class="space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-300 bg-purple-800 px-3 py-1 rounded-full">
                Financial Accountability Notice
            </span>
            <h2 class="text-2xl font-bold text-white">Verified Donation Channels</h2>
            <p class="text-xs sm:text-sm text-purple-200 leading-relaxed">
                To prevent financial fraud and protect our donors, Life Beyond Epilepsy only accepts donations through verified institutional accounts. We do not publish unverified personal mobile numbers or unconfirmed accounts.
            </p>
        </div>

        <div class="p-6 rounded-2xl bg-purple-950/80 border border-purple-800 space-y-4">
            <div class="flex items-center justify-between border-b border-purple-800/80 pb-3">
                <span class="text-xs font-bold uppercase text-purple-300">Official Channel</span>
                <span class="text-[11px] bg-emerald-900/60 text-emerald-300 px-2 py-0.5 rounded border border-emerald-700">Official LBE Account</span>
            </div>
            
            <div class="space-y-2 text-sm text-purple-100">
                <p><strong>M-Pesa Paybill / Bank Details:</strong> Verification in progress with national banking partners for our dedicated charity account.</p>
                <p class="text-xs text-purple-300">
                    If you wish to make an institutional donation or sponsor an educational camp immediately, please contact our finance desk directly at <a href="mailto:donate@lifebeyondepilepsy.org" class="text-white underline font-semibold">donate@lifebeyondepilepsy.org</a>.
                </p>
            </div>

            <div class="pt-2 text-[11px] text-purple-300/80">
                ✓ All contributions are issued official written receipts and accounted for in our annual public transparency reports.
            </div>
        </div>
    </div>
</div>
@endsection
