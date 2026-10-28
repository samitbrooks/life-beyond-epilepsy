@extends('layouts.app')

@section('title', 'Epilepsy Awareness, Myths & First Aid | Life Beyond Epilepsy')
@section('meta_description', 'Understand what epilepsy is, learn different seizure types, debunk common myths, and master life-saving seizure first aid.')

@section('content')
<!-- Header -->
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Clinician-Reviewed Information
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Understanding Epilepsy & Seizure Care
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Epilepsy is a chronic neurological condition characterized by recurrent, unprovoked seizures. It is not contagious, it is not a curse, and with proper medical care, up to 70% of people can live seizure-free.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- What is Epilepsy -->
    <div class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xs space-y-4">
        <h2 class="text-2xl font-bold text-purple-950">What is a Seizure?</h2>
        <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
            The brain consists of billions of nerve cells (neurons) communicating through tiny electrical impulses. A seizure happens when there is a sudden, brief surge of abnormal electrical activity in the brain. This can temporarily disrupt how a person feels, moves, or experiences their surroundings.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-2">
            <div class="p-4 rounded-2xl bg-purple-50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-sm">Focal (Partial) Seizures</h3>
                <p class="text-xs text-slate-600 mt-1">Starts in one area of the brain. The person may notice tingling, sudden confusion, unusual smells, or twitching of one limb.</p>
            </div>
            <div class="p-4 rounded-2xl bg-purple-50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-sm">Generalized Seizures</h3>
                <p class="text-xs text-slate-600 mt-1">Affects both sides of the brain simultaneously. Includes tonic-clonic convulsions (stiffening and rhythmic shaking) or absence seizures.</p>
            </div>
            <div class="p-4 rounded-2xl bg-purple-50 border border-purple-100">
                <h3 class="font-bold text-purple-900 text-sm">Absence Seizures (Petite Mal)</h3>
                <p class="text-xs text-slate-600 mt-1">Common in children. Appears as a brief 5–10 second blank stare or daydreaming episode, quickly returning to normal.</p>
            </div>
        </div>
    </div>

    <!-- Myths vs Facts (Essential for Trans-Nzoia & Kenya context) -->
    <div class="space-y-6">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Myths vs. Medical Facts</h2>
            <p class="text-sm text-slate-600 mt-2">Dismantling widespread misconceptions that fuel social stigma and delay proper medical treatment.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Myth 1 -->
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="text-xs font-bold text-red-600 uppercase tracking-wider">Myth</div>
                <p class="font-bold text-slate-800 text-sm">"Epilepsy is contagious or transmitted through saliva or touching a person during a seizure."</p>
                <div class="pt-2 border-t border-slate-100 text-xs font-bold text-emerald-700 uppercase tracking-wider">Medical Fact</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Epilepsy is entirely non-communicable. It cannot be caught from saliva, sweat, touch, or breathing near someone having a seizure. You can safely comfort and assist them.
                </p>
            </div>

            <!-- Myth 2 -->
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="text-xs font-bold text-red-600 uppercase tracking-wider">Myth</div>
                <p class="font-bold text-slate-800 text-sm">"Epilepsy is a curse, witchcraft, or caused by evil spirits."</p>
                <div class="pt-2 border-t border-slate-100 text-xs font-bold text-emerald-700 uppercase tracking-wider">Medical Fact</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Epilepsy is a physical neurological condition. Causes can include birth trauma, head injuries, cerebral malaria, meningitis, stroke, or genetic factors. It responds to anti-seizure medication, not spiritual exorcisms.
                </p>
            </div>

            <!-- Myth 3 -->
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="text-xs font-bold text-red-600 uppercase tracking-wider">Myth</div>
                <p class="font-bold text-slate-800 text-sm">"You must put a spoon or cloth in their mouth so they don't swallow their tongue."</p>
                <div class="pt-2 border-t border-slate-100 text-xs font-bold text-emerald-700 uppercase tracking-wider">Medical Fact</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <strong>Never insert anything into the mouth.</strong> It is anatomically impossible to swallow your tongue. Inserting spoons or cloth can break teeth, cause choking, cut the tongue, or block the airway.
                </p>
            </div>

            <!-- Myth 4 -->
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs space-y-2">
                <div class="text-xs font-bold text-red-600 uppercase tracking-wider">Myth</div>
                <p class="font-bold text-slate-800 text-sm">"People with epilepsy cannot go to school, work, or have families."</p>
                <div class="pt-2 border-t border-slate-100 text-xs font-bold text-emerald-700 uppercase tracking-wider">Medical Fact</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    With proper medical management, adherence to anti-seizure medication, and safe environments, people living with epilepsy can complete university, build careers, marry, and lead thriving lives.
                </p>
            </div>
        </div>
    </div>

    <!-- Complete Seizure First Aid Protocol -->
    <div class="bg-gradient-to-br from-purple-900 to-indigo-950 rounded-3xl p-8 sm:p-12 text-white space-y-8">
        <div>
            <span class="text-xs font-bold uppercase tracking-wider text-purple-300 bg-purple-800/80 px-3 py-1 rounded-full">
                Step-by-Step Clinical Protocol
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-3">What To Do During a Seizure</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-purple-800/50 p-5 rounded-2xl border border-purple-700/60">
                <h3 class="font-bold text-emerald-300 text-base mb-2">✓ DO: Stay Calm & Cushion Head</h3>
                <p class="text-xs sm:text-sm text-purple-100 leading-relaxed">
                    Keep calm. Place a soft jacket, pillow, or folded cloth under their head to prevent head impact against the ground. Clear tables, chairs, or sharp items away.
                </p>
            </div>

            <div class="bg-purple-800/50 p-5 rounded-2xl border border-purple-700/60">
                <h3 class="font-bold text-emerald-300 text-base mb-2">✓ DO: Turn on Their Side</h3>
                <p class="text-xs sm:text-sm text-purple-100 leading-relaxed">
                    Once the active jerking slows, roll the person gently onto their side into the recovery position. This ensures saliva drains freely and their airway remains unblocked.
                </p>
            </div>

            <div class="bg-purple-800/50 p-5 rounded-2xl border border-purple-700/60">
                <h3 class="font-bold text-emerald-300 text-base mb-2">✓ DO: Time the Seizure</h3>
                <p class="text-xs sm:text-sm text-purple-100 leading-relaxed">
                    Look at your watch or phone. If the seizure lasts longer than 5 minutes, call 999 or transport them to the nearest hospital immediately.
                </p>
            </div>

            <div class="bg-purple-800/50 p-5 rounded-2xl border border-purple-700/60">
                <h3 class="font-bold text-emerald-300 text-base mb-2">✓ DO: Stay Until Alert</h3>
                <p class="text-xs sm:text-sm text-purple-100 leading-relaxed">
                    After a seizure, the person may feel tired, confused, or sleepy. Stay with them, speak gently, and explain what happened once they are fully conscious.
                </p>
            </div>
        </div>

        <!-- Emergency Triggers Box -->
        <div class="bg-red-600/90 border border-red-400 rounded-2xl p-6 space-y-3">
            <h3 class="text-base sm:text-lg font-extrabold text-white flex items-center gap-2">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                <span>CALL 999 / 112 OR GO TO HOSPITAL IMMEDIATELY IF:</span>
            </h3>
            <ul class="text-xs sm:text-sm text-white/95 space-y-1.5 list-disc list-inside">
                <li>{{ __('site.emergency_triggers.item1') }}</li>
                <li>{{ __('site.emergency_triggers.item2') }}</li>
                <li>{{ __('site.emergency_triggers.item3') }}</li>
                <li>{{ __('site.emergency_triggers.item4') }}</li>
                <li>{{ __('site.emergency_triggers.item5') }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection

