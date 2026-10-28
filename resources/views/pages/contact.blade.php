@extends('layouts.app')

@section('title', 'Contact Us & WhatsApp | Life Beyond Epilepsy')
@section('meta_description', 'Get in touch with Life Beyond Epilepsy. Official email, phone, and WhatsApp contact hours for Trans-Nzoia County, Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            We Are Here to Listen & Guide
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Contact Life Beyond Epilepsy
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Reach our administrative team in Trans-Nzoia County for general enquiries, school outreach requests, and partnership questions.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- Mandatory Non-Emergency Notice (Section 6 Requirement) -->
    <div class="p-6 rounded-2xl bg-red-50 border border-red-200 text-red-900 text-xs sm:text-sm flex items-start gap-3">
        <svg class="w-6 h-6 text-red-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
        <div class="space-y-1">
            <h3 class="font-extrabold text-red-950">NOT A 24/7 HELPLINE OR EMERGENCY SERVICE</h3>
            <p class="text-red-800 leading-relaxed">
                Our contact form, email, and WhatsApp channels are <strong>not staffed continuously</strong> and are not monitored for acute medical emergencies. If someone is having a life-threatening seizure, respiratory distress, or severe injury, please call <strong>999 / 112</strong> or go to your nearest county hospital immediately.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Details & WhatsApp Box -->
        <div class="space-y-8">
            <!-- Dedicated WhatsApp Card (Section 6 Requirement) -->
            <div id="whatsapp" class="bg-white p-6 sm:p-8 rounded-3xl border border-purple-100 shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                        <h2 class="text-xl font-bold text-slate-900">WhatsApp Official Desk</h2>
                    </div>
                    <span class="text-[11px] bg-emerald-50 text-emerald-800 border border-emerald-200 px-2 py-0.5 rounded-full font-bold">Office Hours</span>
                </div>
                
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Our team is available on WhatsApp to answer administrative enquiries, event registrations, and community questions.
                </p>

                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-700 space-y-1">
                    <p><strong>Operating Hours:</strong> Monday – Friday, 8:30 AM – 5:00 PM (East Africa Time)</p>
                    <p><strong>Response Time:</strong> Messages received during business hours are typically answered within 2 to 4 hours. Out-of-hours messages are attended to on the next working morning.</p>
                </div>

                <div class="p-3 bg-amber-50 rounded-xl border border-amber-200 text-[11px] text-amber-900 leading-relaxed">
                    ⚠️ <strong>Notice on Sensitive Health Information:</strong> Please avoid transmitting sensitive medical histories, national ID numbers, or photographs of minors over WhatsApp.
                </div>

                <a href="https://wa.me/254700000000?text=Hello%20Life%20Beyond%20Epilepsy%2C%20I%20have%20an%20enquiry%20regarding%20your%20community%20programs." target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>Click to Chat on WhatsApp</span>
                </a>
            </div>

            <!-- Postal & Email Card -->
            <div class="bg-white p-6 sm:p-8 rounded-3xl border border-purple-100 shadow-sm space-y-4 text-xs sm:text-sm text-slate-700">
                <h3 class="font-bold text-slate-900 text-base">Direct Organisational Contact</h3>
                <div class="space-y-3">
                    <p class="flex items-center gap-3">
                        <span class="text-purple-700 font-bold">Email:</span>
                        <a href="mailto:info@lifebeyondepilepsy.org" class="text-slate-900 hover:text-purple-700 underline font-medium">info@lifebeyondepilepsy.org</a>
                    </p>
                    <p class="flex items-center gap-3">
                        <span class="text-purple-700 font-bold">Location:</span>
                        <span>Kitale Town, Trans-Nzoia County, Kenya</span>
                    </p>
                    <p class="flex items-center gap-3">
                        <span class="text-purple-700 font-bold">Safeguarding:</span>
                        <a href="mailto:safeguarding@lifebeyondepilepsy.org" class="text-slate-900 hover:text-purple-700 underline">safeguarding@lifebeyondepilepsy.org</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-8 sm:p-10 rounded-3xl border border-purple-100 shadow-sm space-y-6">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Send Us an Enquiry</h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">Fill out this secure form and we will reply promptly during operating hours.</p>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-xs font-bold uppercase text-slate-700 mb-1">Your Name *</label>
                    <input type="text" name="name" id="name" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
                </div>

                <div>
                    <label for="email_or_phone" class="block text-xs font-bold uppercase text-slate-700 mb-1">Email or Phone Number *</label>
                    <input type="text" name="email_or_phone" id="email_or_phone" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
                </div>

                <div>
                    <label for="subject" class="block text-xs font-bold uppercase text-slate-700 mb-1">Subject *</label>
                    <input type="text" name="subject" id="subject" required placeholder="e.g. Community Outreach, School Training, Question" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
                </div>

                <div>
                    <label for="message" class="block text-xs font-bold uppercase text-slate-700 mb-1">Message *</label>
                    <textarea name="message" id="message" rows="4" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm" placeholder="Please type your enquiry here..."></textarea>
                </div>

                <div class="flex items-start gap-2 pt-1">
                    <input type="checkbox" name="consent" id="consent" required class="mt-1 rounded text-purple-700 focus:ring-purple-600">
                    <label for="consent" class="text-xs text-slate-600">
                        I consent to Life Beyond Epilepsy processing my contact details to reply to my query in accordance with the Kenya Data Protection Act 2019.
                    </label>
                </div>

                <button type="submit" class="w-full py-3.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-bold text-sm shadow transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

