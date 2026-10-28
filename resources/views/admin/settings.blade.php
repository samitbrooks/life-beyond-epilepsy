@extends('admin.layout')

@section('title', 'Domain & CMS Settings')

@section('content')
<div class="space-y-8 max-w-4xl">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Domain & Platform Settings</h2>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">Configure your custom production domain, administrative routes, and contact channels.</p>
    </div>

    <!-- Domain Readiness Card -->
    <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-4">
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
            <h3 class="font-bold text-slate-900 text-base">Custom Domain /admin Routing</h3>
        </div>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            The platform is configured with an absolute route prefix for <strong>/admin</strong>. Once you connect your custom domain (e.g., <code class="bg-slate-100 px-2 py-0.5 rounded text-purple-800 font-mono">lifebeyondepilepsy.org</code>), the entire public website will load at the root domain, and the CMS portal will immediately and securely resolve at:
        </p>
        <div class="p-4 rounded-xl bg-purple-50 border border-purple-200 text-purple-950 font-mono text-sm font-bold flex items-center justify-between">
            <span>https://&lt;your-domain&gt;/admin</span>
            <span class="text-xs bg-purple-200 text-purple-800 font-sans px-2.5 py-0.5 rounded-full">Ready for DNS</span>
        </div>
        <div class="text-xs text-slate-500">
            To set your live domain when ready, simply update <code class="text-purple-750 font-mono">APP_URL=https://your-domain.org</code> in your <code class="font-mono">.env</code> file.
        </div>
    </div>

    <!-- Contact & Operating Parameters -->
    <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-4">
        <h3 class="font-bold text-slate-900 text-base">Operational Parameters</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                <span class="font-bold text-slate-700 block mb-1">WhatsApp Response Hours:</span>
                <span class="text-slate-600">Mon – Fri, 8:30 AM – 5:00 PM EAT</span>
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                <span class="font-bold text-slate-700 block mb-1">Kenya Emergency Dispatch:</span>
                <span class="text-slate-600">999 / 112 (National Police & Ambulance)</span>
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                <span class="font-bold text-slate-700 block mb-1">Data Protection Framework:</span>
                <span class="text-slate-600">Kenya Data Protection Act No. 24 of 2019 (ODPC)</span>
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                <span class="font-bold text-slate-700 block mb-1">Pilot County Focus:</span>
                <span class="text-slate-600">Trans-Nzoia County (Kitale Base)</span>
            </div>
        </div>
    </div>
</div>
@endsection

