<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Life Beyond Epilepsy | Kenya')</title>
    <meta name="description" content="@yield('meta_description', 'Life Beyond Epilepsy (LBE) is a community organization in Kenya improving understanding, challenging stigma, and guiding families to accredited healthcare.')">
    
    <!-- OpenGraph / Social Sharing -->
    <meta property="og:title" content="@yield('title', 'Life Beyond Epilepsy | Kenya')">
    <meta property="og:description" content="@yield('meta_description', 'Epilepsy awareness, medical navigation, and children\'s empowerment in Trans-Nzoia County, Kenya.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Lato Typeface (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Compiled CSS & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased font-sans selection:bg-purple-200 selection:text-purple-900 flex flex-col min-h-screen">
    <!-- Skip link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:px-4 focus:py-2 focus:bg-purple-700 focus:text-white focus:rounded-md focus:shadow-lg">
        Skip to main content
    </a>

    <!-- Navigation Header (Directly at top - NO toolbar above navbar) -->
    @include('partials.header')

    <!-- Flash notifications -->
    @if(session('success'))
        <div class="bg-emerald-50 border-b border-emerald-200 text-emerald-800 px-4 py-3 text-sm text-center font-medium">
            <div class="max-w-4xl mx-auto flex items-center justify-center gap-2">
                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const isHidden = menu.classList.contains('hidden');
                    if (isHidden) {
                        menu.classList.remove('hidden');
                        btn.setAttribute('aria-expanded', 'true');
                    } else {
                        menu.classList.add('hidden');
                        btn.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            // Mobile Accordion Dropdowns
            document.querySelectorAll('.mobile-dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const targetId = toggle.getAttribute('data-target');
                    const target = document.getElementById(targetId);
                    const icon = toggle.querySelector('.accordion-chevron');
                    if (target) {
                        target.classList.toggle('hidden');
                        if (icon) icon.classList.toggle('rotate-180');
                    }
                });
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
