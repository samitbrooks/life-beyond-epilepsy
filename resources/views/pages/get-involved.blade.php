@extends('layouts.app')

@section('title', 'Get Involved & Volunteer | Life Beyond Epilepsy')
@section('meta_description', 'Volunteer with Life Beyond Epilepsy in Kenya. Join as a community champion, school speaker, or clinical volunteer.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Join the Movement
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Get Involved
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Whether you are a healthcare worker, teacher, student, parent, or passionate advocate, your voice can help dismantle stigma and save lives in Trans-Nzoia and across Kenya.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Volunteer Hero Photo Feature -->
    <div class="relative rounded-3xl overflow-hidden shadow-xl border border-purple-100 bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 items-center">
            <div class="lg:col-span-6 relative h-72 sm:h-80">
                <img src="{{ asset('images/chw-training.jpg') }}" alt="African community volunteers training together in Kenya" class="w-full h-full object-cover">
                <div class="absolute bottom-3 left-3 bg-slate-900/80 backdrop-blur-md px-3 py-1.5 rounded-xl text-white text-xs font-bold">
                    Community Volunteers • Trans-Nzoia County Network
                </div>
            </div>
            <div class="lg:col-span-6 p-6 sm:p-8 space-y-3">
                <span class="text-[11px] font-black uppercase tracking-wider text-[#45017A] bg-purple-100 px-3 py-1 rounded-full">
                    Be the Change
                </span>
                <h2 class="text-xl sm:text-2xl font-black text-slate-900">
                    Stand with Families in Trans-Nzoia
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Volunteering with Life Beyond Epilepsy means equipping a school with seizure safety, calming a worried mother, or organizing a community baraza where myths are erased forever.
                </p>
                <div class="pt-2 text-xs font-bold text-[#45017A]">
                    ✓ No medical experience required for advocacy • Clinical roles available for healthcare workers
                </div>
            </div>
        </div>
    </div>

    <!-- Ways to Volunteer -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="text-2xl">🗣️</div>
            <h3 class="font-bold text-slate-900 text-base">Community Advocate</h3>
            <p class="text-xs text-slate-600">Lead local discussions at markets, churches, and barazas to educate families and debunk harmful myths about seizures.</p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="text-2xl">🏫</div>
            <h3 class="font-bold text-slate-900 text-base">School Inclusion Champion</h3>
            <p class="text-xs text-slate-600">Help distribute educational kits and assist in delivering child-friendly seizure first-aid talks to primary and secondary schools.</p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-2">
            <div class="text-2xl">🩺</div>
            <h3 class="font-bold text-slate-900 text-base">Clinical / Healthcare Volunteer</h3>
            <p class="text-xs text-slate-600">Nurses, clinical officers, and doctors who can volunteer at outreach camps, advise on navigation, or train community health workers.</p>
        </div>
    </div>

    <!-- Volunteer Registration Form -->
    <div class="bg-white p-8 sm:p-10 rounded-3xl border border-purple-100 shadow-sm max-w-2xl mx-auto space-y-6">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Volunteer Interest Form</h2>
            <p class="text-xs sm:text-sm text-slate-600 mt-1">Tell us how you would like to contribute and where you are located.</p>
        </div>

        <form action="{{ route('volunteer.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="full_name" class="block text-xs font-bold uppercase text-slate-700 mb-1">Full Name *</label>
                <input type="text" name="full_name" id="full_name" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
            </div>

            <div>
                <label for="contact_info" class="block text-xs font-bold uppercase text-slate-700 mb-1">Phone Number or Email *</label>
                <input type="text" name="contact_info" id="contact_info" required class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
            </div>

            <div>
                <label for="location" class="block text-xs font-bold uppercase text-slate-700 mb-1">Location (County, Town or Sub-County) *</label>
                <input type="text" name="location" id="location" required placeholder="e.g. Kitale, Trans-Nzoia" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-2">Areas of Interest *</label>
                <div class="space-y-2 text-xs text-slate-700">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="interests[]" value="Community Outreach & Advocacy" class="rounded text-purple-700 focus:ring-purple-600">
                        <span>Community Outreach & Anti-Stigma Advocacy</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="interests[]" value="School Inclusion & Education" class="rounded text-purple-700 focus:ring-purple-600">
                        <span>School Inclusion & Child Safeguarding</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="interests[]" value="Healthcare & Clinical Support" class="rounded text-purple-700 focus:ring-purple-600">
                        <span>Healthcare & Clinical Navigation Support</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="interests[]" value="Event Coordination & Logistics" class="rounded text-purple-700 focus:ring-purple-600">
                        <span>Event Planning (e.g., Purple Day Kenya)</span>
                    </label>
                </div>
            </div>

            <div>
                <label for="experience" class="block text-xs font-bold uppercase text-slate-700 mb-1">Brief Background or Motivation (Optional)</label>
                <textarea name="experience" id="experience" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-purple-600 text-sm" placeholder="Tell us why you want to support Life Beyond Epilepsy..."></textarea>
            </div>

            <div class="flex items-start gap-2 pt-1">
                <input type="checkbox" name="consent" id="consent" required class="mt-1 rounded text-purple-700 focus:ring-purple-600">
                <label for="consent" class="text-xs text-slate-600">
                    I agree to Life Beyond Epilepsy contacting me regarding volunteer activities in accordance with the Kenya Data Protection Act 2019.
                </label>
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-bold text-sm shadow transition">
                Register as Volunteer
            </button>
        </form>
    </div>
</div>
@endsection

