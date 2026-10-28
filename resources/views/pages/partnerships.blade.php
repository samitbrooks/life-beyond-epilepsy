@extends('layouts.app')

@section('title', 'Partnerships & Clinical Collaboration | Life Beyond Epilepsy')
@section('meta_description', 'Partner with Life Beyond Epilepsy. Collaborate as a hospital, clinician, school, NGO, or corporate partner in Kenya.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Collaborative Impact
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Partnerships & Collaboration
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Joining hands with county health departments, neurologists, hospitals, educators, and organizations to scale reliable epilepsy care across Kenya.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Partnership Streams -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-lg">🏥</div>
            <h3 class="font-bold text-slate-900 text-base">Hospitals & Clinics</h3>
            <p class="text-xs text-slate-600 leading-relaxed">Referral integration, verified clinical listing, and joint diagnostic camps.</p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-lg">👨‍⚕️</div>
            <h3 class="font-bold text-slate-900 text-base">Clinicians & Doctors</h3>
            <p class="text-xs text-slate-600 leading-relaxed">Advisory review, telemedicine consultations, and specialized medical lectures.</p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-lg">🏫</div>
            <h3 class="font-bold text-slate-900 text-base">Schools & Counties</h3>
            <p class="text-xs text-slate-600 leading-relaxed">Teacher sensitization programs, student buddy clubs, and inclusive education policies.</p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-lg">🌍</div>
            <h3 class="font-bold text-slate-900 text-base">NGOs & Donors</h3>
            <p class="text-xs text-slate-600 leading-relaxed">Grant partnerships, EEG subsidization funds, and community health volunteer equipment.</p>
        </div>
    </div>

    <!-- Partnership Enquiry Form -->
    <div class="bg-white p-8 sm:p-10 rounded-3xl border border-purple-100 shadow-sm max-w-2xl mx-auto space-y-6">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Partnership Enquiry</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-1">Submit your organization's proposal or clinical interest and our leadership team will respond promptly.</p>
        </div>

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-xs font-bold uppercase text-slate-700 mb-1">Organization / Contact Person Name *</label>
                <input type="text" name="name" id="name" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
            </div>

            <div>
                <label for="email_or_phone" class="block text-xs font-bold uppercase text-slate-700 mb-1">Official Email or Phone Number *</label>
                <input type="text" name="email_or_phone" id="email_or_phone" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
            </div>

            <div>
                <label for="subject" class="block text-xs font-bold uppercase text-slate-700 mb-1">Partnership Stream *</label>
                <select name="subject" id="subject" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
                    <option value="Healthcare Facility Collaboration">Healthcare Facility / Hospital Collaboration</option>
                    <option value="Neurologist / Clinician Advisory">Neurologist / Clinician Advisory</option>
                    <option value="School Outreach Partnership">School / Ministry of Education Partnership</option>
                    <option value="NGO / Grant / Institutional Funding">NGO / Institutional Funding</option>
                    <option value="Corporate Social Responsibility">Corporate Social Responsibility (CSR)</option>
                </select>
            </div>

            <div>
                <label for="message" class="block text-xs font-bold uppercase text-slate-700 mb-1">Collaboration Objectives *</label>
                <textarea name="message" id="message" rows="4" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm" placeholder="Please outline how your organization would like to partner with LBE..."></textarea>
            </div>

            <div class="flex items-start gap-2 pt-1">
                <input type="checkbox" name="consent" id="consent" required class="mt-1 rounded text-purple-700 focus:ring-purple-600">
                <label for="consent" class="text-xs text-slate-600">
                    I consent to Life Beyond Epilepsy storing these details to review and reply to this partnership enquiry in accordance with the Kenya Data Protection Act 2019.
                </label>
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-bold text-sm shadow transition">
                Submit Partnership Enquiry
            </button>
        </form>
    </div>
</div>
@endsection
