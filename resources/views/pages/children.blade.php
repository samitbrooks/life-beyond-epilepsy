@extends('layouts.app')

@section('title', 'Children\'s Empowerment & School Inclusion | Life Beyond Epilepsy')
@section('meta_description', 'Empowering children living with epilepsy in Kenya through school education, teacher training, peer inclusion, and child safeguarding.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Safe Schools & Dignity
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Children's Empowerment & School Inclusion
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Every child with epilepsy deserves a safe classroom, supportive teachers, and freedom from bullying or isolation.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Key Pillars for Children -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-3">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg">🏫</div>
            <h3 class="font-bold text-slate-900 text-base">Teacher & School Training</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Educating primary and secondary school teachers on how to recognize absence and convulsive seizures, respond with calm first aid, and keep the child safe.
            </p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-3">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg">🤝</div>
            <h3 class="font-bold text-slate-900 text-base">Anti-Bullying & Peer Support</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Empowering classmates to understand that epilepsy is not contagious. Creating buddy systems so children never feel ashamed or left out during activities.
            </p>
        </div>

        <div class="p-6 rounded-3xl bg-white border border-purple-100 shadow-xs space-y-3">
            <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-lg">🎨</div>
            <h3 class="font-bold text-slate-900 text-base">Child-Friendly Educational Tools</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Storybooks, comic illustrations, and activity sheets in English and Kiswahili that explain the brain and seizures in an engaging, reassuring format.
            </p>
        </div>
    </div>

    <!-- Mandatory Child Safeguarding Policy (Section 3 Requirement) -->
    <div class="p-8 rounded-3xl bg-purple-50/70 border border-purple-200 space-y-4">
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-purple-700"></span>
            <h2 class="text-xl font-bold text-purple-950">Child Safeguarding & Parental Consent Protocol</h2>
        </div>
        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
            Life Beyond Epilepsy strictly adheres to Kenya’s Children Act and global safeguarding benchmarks. To protect the privacy and psychological well-being of all minors:
        </p>
        <ul class="text-xs sm:text-sm text-slate-700 space-y-2 list-disc list-inside bg-white p-6 rounded-2xl border border-purple-100">
            <li>No photographs, video recordings, or identifiable stories of children are ever published without written, informed consent from a parent or legal guardian.</li>
            <li>Pseudonyms and generalized scenarios are utilized whenever presenting educational case studies to safeguard identity.</li>
            <li>All LBE volunteers and staff undergoing school visits are vetted and trained in child protection.</li>
            <li>Concerns regarding child welfare or educational exclusion can be reported confidentially to our safeguarding lead at <a href="mailto:safeguarding@lifebeyondepilepsy.org" class="text-purple-700 underline font-semibold">safeguarding@lifebeyondepilepsy.org</a>.</li>
        </ul>
    </div>
</div>
@endsection

