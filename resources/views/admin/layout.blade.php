<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') | Life Beyond Epilepsy CMS</title>
    <!-- Lato Typeface -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased text-slate-800">
    <div class="min-h-full flex">
        <!-- Sidebar Navigation with Official Brand Colors (#320059 & #45017A) -->
        <aside class="w-64 bg-[#320059] text-purple-100 flex flex-col shrink-0 border-r border-[#45017A]">
            <!-- Sidebar Header with Brand Logo -->
            <div class="h-24 flex items-center px-4 border-b border-[#45017A] bg-[#240041]">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 w-full group">
                    <div class="bg-white p-2 rounded-2xl shadow-sm border border-purple-200/20 flex items-center justify-center shrink-0 transition group-hover:scale-102">
                        <img src="{{ asset('images/logo.png') }}" alt="Life Beyond Epilepsy" class="h-9 w-auto object-contain">
                    </div>
                    <div class="overflow-hidden leading-tight">
                        <span class="text-xs font-black uppercase tracking-wider text-white block">Life Beyond</span>
                        <span class="text-[11px] font-black uppercase tracking-wider text-[#F29000] block">Epilepsy CMS</span>
                        <span class="text-[9px] text-purple-300 font-semibold truncate block mt-0.5">Trans-Nzoia Desk</span>
                    </div>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="flex-1 px-3 py-6 space-y-1.5 text-sm font-bold">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('admin.dashboard') ? 'bg-[#45017A] text-white shadow-sm border-l-4 border-[#F29000]' : 'text-purple-200 hover:bg-[#45017A]/70 hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.dashboard') ? 'text-[#F29000]' : 'text-purple-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.facilities') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('admin.facilities') ? 'bg-[#45017A] text-white shadow-sm border-l-4 border-[#F29000]' : 'text-purple-200 hover:bg-[#45017A]/70 hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.facilities') ? 'text-[#F29000]' : 'text-purple-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    <span>Healthcare Facilities</span>
                </a>

                <a href="{{ route('admin.events') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('admin.events') ? 'bg-[#45017A] text-white shadow-sm border-l-4 border-[#F29000]' : 'text-purple-200 hover:bg-[#45017A]/70 hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.events') ? 'text-[#F29000]' : 'text-purple-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>Events & Campaigns</span>
                </a>

                <a href="{{ route('admin.enquiries') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('admin.enquiries') ? 'bg-[#45017A] text-white shadow-sm border-l-4 border-[#F29000]' : 'text-purple-200 hover:bg-[#45017A]/70 hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.enquiries') ? 'text-[#F29000]' : 'text-purple-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Enquiries & Forms</span>
                </a>

                <a href="{{ route('admin.volunteers') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('admin.volunteers') ? 'bg-[#45017A] text-white shadow-sm border-l-4 border-[#F29000]' : 'text-purple-200 hover:bg-[#45017A]/70 hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.volunteers') ? 'text-[#F29000]' : 'text-purple-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span>Volunteers</span>
                </a>

                <a href="{{ route('admin.settings') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('admin.settings') ? 'bg-[#45017A] text-white shadow-sm border-l-4 border-[#F29000]' : 'text-purple-200 hover:bg-[#45017A]/70 hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.settings') ? 'text-[#F29000]' : 'text-purple-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Brand & Settings</span>
                </a>
            </nav>

            <!-- Bottom Actions -->
            <div class="p-4 border-t border-[#45017A] bg-[#240041] space-y-2">
                <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-2 text-xs font-bold text-purple-200 hover:text-white px-2.5 py-2 rounded-xl hover:bg-[#45017A] transition">
                    <svg class="w-4 h-4 text-[#F29000]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    <span>View Public Website</span>
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-2 text-xs font-bold text-red-300 hover:text-red-100 px-2.5 py-2 rounded-xl hover:bg-red-900/40 transition">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        <span>Sign Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Workspace -->
        <div class="flex-1 flex flex-col min-h-screen overflow-y-auto">
            <!-- Brand Top Gradient Bar -->
            <div class="h-1.5 w-full bg-gradient-to-r from-[#F29000] via-[#8034FA] to-[#45017A]"></div>

            <!-- Top Header Bar -->
            <header class="h-20 bg-white border-b border-purple-100 px-8 flex items-center justify-between shadow-xs shrink-0">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-black uppercase tracking-wider text-[#45017A] bg-purple-50 px-3 py-1 rounded-xl border border-purple-200 flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-[#F29000] inline-block"></span>
                        <span>Route: /admin</span>
                    </span>
                    <span class="text-xs text-slate-500 font-bold hidden sm:inline">Life Beyond Epilepsy CMS • Trans-Nzoia County Desk</span>
                </div>
                
                <div class="flex items-center gap-4 text-xs">
                    <a href="{{ route('home') }}" target="_blank" class="hidden md:flex items-center gap-1.5 text-xs font-bold text-[#45017A] hover:text-[#F29000] bg-purple-50 hover:bg-purple-100/70 px-3 py-1.5 rounded-xl border border-purple-200 transition">
                        <span>Public Site</span>
                        <span>↗</span>
                    </a>

                    <div class="flex items-center gap-3 pl-2 border-l border-slate-200">
                        <div class="text-right">
                            <span class="font-black text-[#45017A] block leading-none">{{ Auth::user()->name ?? 'Administrator' }}</span>
                            <span class="text-[10px] text-slate-400 font-medium mt-0.5 block">Staff Access</span>
                        </div>
                        <div class="w-9 h-9 rounded-xl bg-[#45017A] border-2 border-[#F29000] text-[#F29000] font-black flex items-center justify-center shadow-xs">
                            A
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-8 flex-1 bg-slate-50/70">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-bold flex items-center gap-2 shadow-xs">
                        <span class="w-5 h-5 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs">✓</span>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>

            <!-- Branded CMS Footer -->
            <footer class="mt-auto px-8 py-4 border-t border-purple-100 bg-white/80 text-slate-500 text-xs flex flex-col sm:flex-row items-center justify-between gap-3 shrink-0">
                <div class="flex items-center gap-2.5">
                    <img src="{{ asset('images/logo.png') }}" alt="Life Beyond Epilepsy" class="h-5 w-auto object-contain">
                    <span class="font-bold text-[#45017A]">Life Beyond Epilepsy</span>
                    <span class="text-slate-300">•</span>
                    <span>Trans-Nzoia County Health Pilot (Kitale, Kiminini, Cherangany, Endebess, Saboti)</span>
                </div>
                <div class="flex items-center gap-2 text-[11px]">
                    <span class="font-bold text-slate-400">Palette:</span>
                    <span class="inline-block w-3 h-3 rounded-full bg-[#45017A]" title="Deep Royal Purple (#45017A)"></span>
                    <span class="inline-block w-3 h-3 rounded-full bg-[#320059]" title="Deep Mountain Purple (#320059)"></span>
                    <span class="inline-block w-3 h-3 rounded-full bg-[#F29000]" title="Rising Sun Gold (#F29000)"></span>
                    <span class="inline-block w-3 h-3 rounded-full bg-[#8034FA]" title="Accent Violet (#8034FA)"></span>
                    <span class="text-slate-400 font-mono ml-1">CMS v1.0</span>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
