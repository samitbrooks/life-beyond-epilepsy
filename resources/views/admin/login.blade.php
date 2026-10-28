<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Life Beyond Epilepsy CMS</title>
    <!-- Lato Typeface -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex items-center justify-center p-4 font-sans text-slate-800 bg-gradient-to-br from-purple-100/50 via-slate-50 to-amber-50/40">
    <div class="w-full max-w-md space-y-6">
        <!-- Brand Header with Logo -->
        <div class="text-center space-y-3">
            <a href="{{ route('home') }}" class="inline-block group">
                <div class="bg-white p-4 rounded-3xl shadow-sm border border-purple-100 inline-block transition group-hover:shadow-md group-hover:scale-[1.02]">
                    <img src="{{ asset('images/logo.png') }}" alt="Life Beyond Epilepsy" class="h-16 w-auto object-contain mx-auto">
                </div>
            </a>
            <div class="space-y-1">
                <h1 class="text-2xl font-black text-[#45017A] tracking-tight">LBE Administration CMS</h1>
                <p class="text-xs text-slate-600 font-medium flex items-center justify-center gap-2">
                    <span>Secured portal at</span>
                    <span class="font-bold text-[#F29000] bg-amber-50 px-2 py-0.5 rounded border border-amber-200 font-mono">/admin</span>
                </p>
            </div>
        </div>

        <!-- Login Form Card -->
        <div class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xl space-y-6 relative overflow-hidden">
            <!-- Top brand gradient bar -->
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-[#F29000] via-[#8034FA] to-[#45017A]"></div>

            @if($errors->any())
                <div class="p-3 bg-red-50 border border-red-200 text-red-700 text-xs rounded-xl font-bold">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-xs font-bold uppercase text-[#45017A] mb-1">Admin Email Address</label>
                    <input type="email" name="email" id="email" required value="{{ old('email', 'admin@lifebeyondepilepsy.org') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] text-sm">
                </div>

                <div>
                    <label for="password" class="block text-xs font-bold uppercase text-[#45017A] mb-1">Password</label>
                    <input type="password" name="password" id="password" required value="Epilepsy@2026!" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] text-sm">
                </div>

                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded text-[#45017A] focus:ring-[#45017A]">
                        <span class="text-slate-600 font-medium">Remember session</span>
                    </label>
                    <span class="text-slate-400 font-medium">Default: Epilepsy@2026!</span>
                </div>

                <button type="submit" class="w-full py-3.5 rounded-xl bg-[#45017A] hover:bg-[#320059] text-white font-black text-sm shadow-md hover:shadow-lg transition flex items-center justify-center gap-2 group">
                    <span>Sign In to /admin CMS</span>
                    <span class="text-[#F29000] group-hover:translate-x-1 transition-transform">→</span>
                </button>
            </form>

            <!-- Brand Color Dots Strip -->
            <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500">
                <span class="font-bold text-[#45017A]">Trans-Nzoia County Pilot</span>
                <div class="flex items-center gap-1.5">
                    <span class="w-3 h-3 rounded-full bg-[#45017A]" title="Deep Royal Purple (#45017A)"></span>
                    <span class="w-3 h-3 rounded-full bg-[#320059]" title="Deep Mountain Purple (#320059)"></span>
                    <span class="w-3 h-3 rounded-full bg-[#F29000]" title="Rising Sun Gold (#F29000)"></span>
                    <span class="w-3 h-3 rounded-full bg-[#8034FA]" title="Accent Violet (#8034FA)"></span>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('home') }}" class="text-xs font-bold text-[#45017A] hover:text-[#F29000] transition flex items-center justify-center gap-1">
                <span>←</span>
                <span>Return to Public Website</span>
            </a>
        </div>
    </div>
</body>
</html>
