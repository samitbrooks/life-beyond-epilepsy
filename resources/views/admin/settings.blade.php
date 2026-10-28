@extends('admin.layout')

@section('title', 'Brand & Platform Settings')

@section('content')
<div class="space-y-8 max-w-5xl">
    <div>
        <div class="flex items-center gap-2 mb-1">
            <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
            <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Platform Governance</span>
        </div>
        <h2 class="text-2xl font-black text-slate-900">Brand Identity & Platform Settings</h2>
        <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Manage brand assets, custom production domain routing (/admin), and operational governance parameters.</p>
    </div>

    <!-- Official Brand Assets & Colors Showcase -->
    <div class="p-6 sm:p-8 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-6 relative overflow-hidden">
        <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-[#F29000] via-[#8034FA] to-[#45017A]"></div>

        <div class="flex items-center justify-between pb-3 border-b border-purple-100">
            <div>
                <h3 class="font-black text-[#45017A] text-base flex items-center gap-2">
                    <span>🎨</span>
                    <span>Official Brand Assets & Color System</span>
                </h3>
                <p class="text-xs text-slate-500 mt-0.5">Extracted and configured from official Life Beyond Epilepsy Kenya brand identity guidelines</p>
            </div>
            <span class="text-xs bg-[#45017A] text-white font-bold px-3 py-1 rounded-full">
                Active in Public & CMS
            </span>
        </div>

        <!-- Logo Showcase in Light and Dark Frames -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Light Surface Logo -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-black uppercase text-slate-700">Logo (Light Surface)</span>
                    <span class="text-[10px] bg-slate-200 text-slate-700 px-2 py-0.5 rounded font-mono font-bold">public/images/logo.png</span>
                </div>
                <div class="h-24 bg-white rounded-xl border border-slate-200 flex items-center justify-center p-3 shadow-inner">
                    <img src="{{ asset('images/logo.png') }}" alt="Life Beyond Epilepsy" class="max-h-full max-w-full object-contain">
                </div>
                <p class="text-[11px] text-slate-500">Used across public navigation header, white paper documentation, and CMS login.</p>
            </div>

            <!-- Dark Surface Logo (CMS Sidebar Style) -->
            <div class="p-6 rounded-2xl bg-[#320059] text-white border border-[#45017A] space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-black uppercase text-purple-200">Logo on Brand Surface (#320059)</span>
                    <span class="text-[10px] bg-[#240041] text-[#F29000] px-2 py-0.5 rounded font-mono font-bold">CMS Sidebar Style</span>
                </div>
                <div class="h-24 bg-white/95 rounded-xl border border-white/20 flex items-center justify-center p-3 shadow-inner">
                    <img src="{{ asset('images/logo.png') }}" alt="Life Beyond Epilepsy" class="max-h-full max-w-full object-contain">
                </div>
                <p class="text-[11px] text-purple-200">Employed in CMS sidebar header and footer with high-contrast framing.</p>
            </div>
        </div>

        <!-- Official Brand Color Palette Swatches -->
        <div class="space-y-3">
            <h4 class="text-xs font-black uppercase tracking-wider text-[#45017A]">Official Color Palette</h4>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <!-- Color 1: #45017A -->
                <div class="rounded-2xl border border-purple-100 overflow-hidden shadow-2xs">
                    <div class="h-16 bg-[#45017A] flex items-end p-2.5">
                        <span class="text-white text-[11px] font-mono font-bold">#45017A</span>
                    </div>
                    <div class="p-3 bg-white">
                        <span class="text-xs font-black text-slate-900 block">Deep Royal Purple</span>
                        <span class="text-[10px] text-slate-500">Primary Brand & Nav</span>
                    </div>
                </div>

                <!-- Color 2: #320059 -->
                <div class="rounded-2xl border border-purple-100 overflow-hidden shadow-2xs">
                    <div class="h-16 bg-[#320059] flex items-end p-2.5">
                        <span class="text-white text-[11px] font-mono font-bold">#320059</span>
                    </div>
                    <div class="p-3 bg-white">
                        <span class="text-xs font-black text-slate-900 block">Deep Mountain Purple</span>
                        <span class="text-[10px] text-slate-500">Sidebar & Dark Surfaces</span>
                    </div>
                </div>

                <!-- Color 3: #F29000 -->
                <div class="rounded-2xl border border-purple-100 overflow-hidden shadow-2xs">
                    <div class="h-16 bg-[#F29000] flex items-end p-2.5">
                        <span class="text-[#320059] text-[11px] font-mono font-bold">#F29000</span>
                    </div>
                    <div class="p-3 bg-white">
                        <span class="text-xs font-black text-slate-900 block">Rising Sun Gold</span>
                        <span class="text-[10px] text-slate-500">Donate & Emergency CTA</span>
                    </div>
                </div>

                <!-- Color 4: #8034FA -->
                <div class="rounded-2xl border border-purple-100 overflow-hidden shadow-2xs">
                    <div class="h-16 bg-[#8034FA] flex items-end p-2.5">
                        <span class="text-white text-[11px] font-mono font-bold">#8034FA</span>
                    </div>
                    <div class="p-3 bg-white">
                        <span class="text-xs font-black text-slate-900 block">Accent Violet</span>
                        <span class="text-[10px] text-slate-500">Underlines & Badges</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Typography -->
        <div class="p-4 rounded-2xl bg-purple-50/50 border border-purple-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs">
            <div>
                <span class="font-black text-[#45017A] text-sm block">Typography: Lato Typeface</span>
                <span class="text-slate-600">Google Fonts • Weights: 300, 400, 700, 900 • Clean, warm, and highly legible healthcare font.</span>
            </div>
            <span class="font-bold text-[#45017A] bg-white px-3 py-1.5 rounded-xl border border-purple-200 shrink-0">
                font-family: 'Lato', sans-serif
            </span>
        </div>
    </div>

    <!-- Domain Readiness Card -->
    <div class="p-6 sm:p-8 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-4 relative overflow-hidden">
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
            <h3 class="font-black text-[#45017A] text-base">Custom Domain /admin Routing Architecture</h3>
        </div>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            The platform is built with an absolute route prefix for <strong>/admin</strong>. When your production domain (e.g., <code class="bg-purple-50 px-2 py-0.5 rounded text-[#45017A] font-mono font-bold">lifebeyondepilepsy.org</code>) is pointed at this Laravel installation, the public site loads seamlessly at the apex domain, and the CMS portal immediately resolves at:
        </p>
        <div class="p-4 rounded-2xl bg-[#240041] border border-[#45017A] text-white font-mono text-sm font-bold flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="text-[#F29000]">🔒</span>
                <span>https://&lt;your-domain&gt;<span class="text-[#F29000]">/admin</span></span>
            </div>
            <span class="text-xs bg-[#45017A] text-purple-200 font-sans px-3 py-1 rounded-full border border-purple-300/30">DNS Ready</span>
        </div>
        <div class="text-xs text-slate-500">
            To configure your live domain when ready, update <code class="text-[#45017A] font-mono font-bold">APP_URL=https://your-domain.org</code> in your environment file.
        </div>
    </div>

    <!-- Contact & Operating Parameters -->
    <div class="p-6 sm:p-8 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-4">
        <h3 class="font-black text-[#45017A] text-base">Operational Governance Parameters</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
                <span class="font-black text-[#45017A] block">WhatsApp Response Desk:</span>
                <span class="text-slate-600 font-medium">Mon – Fri, 8:30 AM – 5:00 PM EAT (Non-acute helpline)</span>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
                <span class="font-black text-[#45017A] block">Kenya Emergency Dispatch:</span>
                <span class="text-slate-600 font-medium">999 / 112 (National Police & Ambulance Dispatch)</span>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
                <span class="font-black text-[#45017A] block">Data Protection Framework:</span>
                <span class="text-slate-600 font-medium">Kenya Data Protection Act No. 24 of 2019 (ODPC Compliant)</span>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
                <span class="font-black text-[#45017A] block">Pilot County Focus:</span>
                <span class="text-slate-600 font-medium">Trans-Nzoia County (Kitale Base HQ)</span>
            </div>
        </div>
    </div>
</div>
@endsection

