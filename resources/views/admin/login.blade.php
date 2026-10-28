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
<body class="h-full flex items-center justify-center p-4 font-sans text-slate-800">
    <div class="w-full max-w-md space-y-6">
        <div class="text-center space-y-2">
            <div class="inline-flex w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-800 to-indigo-900 text-white items-center justify-center font-black text-2xl shadow-lg">
                LBE
            </div>
            <h1 class="text-2xl font-black text-purple-950 tracking-tight">LBE Administration CMS</h1>
            <p class="text-xs text-slate-500 font-medium">Secured staff portal at <span class="font-bold text-purple-700">/admin</span></p>
        </div>

        <div class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xl space-y-6">
            @if($errors->any())
                <div class="p-3 bg-red-50 border border-red-200 text-red-700 text-xs rounded-xl font-bold">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-xs font-bold uppercase text-slate-700 mb-1">Admin Email Address</label>
                    <input type="email" name="email" id="email" required value="{{ old('email', 'admin@lifebeyondepilepsy.org') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
                </div>

                <div>
                    <label for="password" class="block text-xs font-bold uppercase text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" id="password" required value="Epilepsy@2026!" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
                </div>

                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" class="rounded text-purple-700 focus:ring-purple-600">
                        <span class="text-slate-600">Remember session</span>
                    </label>
                    <span class="text-slate-400">Default: Epilepsy@2026!</span>
                </div>

                <button type="submit" class="w-full py-3.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-black text-sm shadow transition">
                    Sign In to /admin CMS
                </button>
            </form>
        </div>

        <div class="text-center">
            <a href="{{ route('home') }}" class="text-xs font-bold text-purple-700 hover:underline">
                ← Return to Public Website
            </a>
        </div>
    </div>
</body>
</html>

