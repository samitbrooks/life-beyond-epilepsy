@extends('layouts.app')

@section('title', 'Privacy Notice, Medical Disclaimer & Terms | Life Beyond Epilepsy')
@section('meta_description', 'Privacy notice compliant with the Kenya Data Protection Act 2019, terms of use, clinical disclaimers, and safeguarding policies.')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white py-12 sm:py-16 border-b border-purple-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-purple-700 bg-purple-100 px-3 py-1 rounded-full">
            Legal & Data Protection Compliance
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-purple-950 tracking-tight">
            Privacy Policy, Terms & Safety
        </h1>
        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Our legal commitments, adherence to the Kenya Data Protection Act 2019, clinical disclaimers, and child safeguarding standards.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- 1. Medical Disclaimer -->
    <section class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xs space-y-4">
        <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
            <span class="text-red-600">⚠️</span>
            <span>1. Medical Disclaimer & Clinical Boundaries</span>
        </h2>
        <div class="text-xs sm:text-sm text-slate-600 space-y-2 leading-relaxed">
            <p>
                The content on this website, including educational articles, seizure first-aid flowcharts, and the Smart Health Navigator, is created for informational and health navigation purposes only. It <strong>does not constitute medical diagnosis, individualized clinical advice, prescription, or treatment planning</strong>.
            </p>
            <p>
                Users must never alter, stop, or initiate anti-seizure medication (such as Carbamazepine, Sodium Valproate, Levetiracetam, Phenobarbital, or others) based on content found on this website. Always consult a licensed physician, clinical officer, or neurologist.
            </p>
            <p>
                Life Beyond Epilepsy does not operate a 24/7 acute medical helpline. In any life-threatening situation (e.g. status epilepticus $>5$ minutes), contact Kenya emergency services (<strong>999 / 112</strong>) or proceed immediately to the nearest hospital casualty department.
            </p>
        </div>
    </section>

    <!-- 2. Privacy Notice (Kenya Data Protection Act 2019) -->
    <section class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xs space-y-4">
        <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
            <span class="text-purple-700">🔒</span>
            <span>2. Privacy Notice (Kenya Data Protection Act 2019 / ODPC)</span>
        </h2>
        <div class="text-xs sm:text-sm text-slate-600 space-y-3 leading-relaxed">
            <p>
                Life Beyond Epilepsy (LBE) respects the privacy rights of every individual. Under the Kenya Data Protection Act, No. 24 of 2019, overseen by the Office of the Data Protection Commissioner (ODPC), we adhere to the principles of lawfulness, data minimization, and transparency.
            </p>
            <div class="bg-purple-50 p-4 rounded-2xl border border-purple-100 space-y-2 text-xs text-purple-950">
                <p><strong>• Data Minimization:</strong> We only collect the minimal personal information necessary to respond to voluntary enquiries or volunteer applications. We do not ask for national ID numbers, detailed health histories, or biometric data on public forms.</p>
                <p><strong>• Geolocation Data:</strong> If you use the facility finder with device location enabled, your coordinates are processed temporarily in your browser to calculate proximity to accredited facilities in Trans-Nzoia County. Location data is never stored on persistent tracking servers.</p>
                <p><strong>• Voice & Audio Data:</strong> Our voice-to-text input processes audio to text only upon user actuation. Transcripts must be verified by the user prior to submission. Audio recordings are not retained on our servers.</p>
                <p><strong>• Data Subject Rights:</strong> You have the right to request access to, rectification of, or permanent deletion of your contact records by emailing our data protection desk at <a href="mailto:privacy@lifebeyondepilepsy.org" class="font-bold underline text-purple-700">privacy@lifebeyondepilepsy.org</a>.</p>
            </div>
        </div>
    </section>

    <!-- 3. Child Safeguarding Policy -->
    <section id="safeguarding" class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xs space-y-4">
        <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
            <span class="text-purple-700">🛡️</span>
            <span>3. Child Safeguarding & Vulnerable Persons Protocol</span>
        </h2>
        <div class="text-xs sm:text-sm text-slate-600 space-y-2 leading-relaxed">
            <p>
                LBE enforces zero tolerance toward abuse, exploitation, or discriminatory exposure of minors. Any child-centered activity, educational workshop, or photography requires informed written authorization from a parent or legal guardian.
            </p>
            <p>
                Concerns regarding the welfare of a minor or violation of safeguarding guidelines should be escalated to <a href="mailto:safeguarding@lifebeyondepilepsy.org" class="font-bold underline text-purple-700">safeguarding@lifebeyondepilepsy.org</a>.
            </p>
        </div>
    </section>

    <!-- 4. Terms of Use -->
    <section id="terms" class="bg-white p-8 rounded-3xl border border-purple-100 shadow-xs space-y-4">
        <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
            <span class="text-purple-700">📄</span>
            <span>4. Terms of Use & Intellectual Property</span>
        </h2>
        <div class="text-xs sm:text-sm text-slate-600 space-y-2 leading-relaxed">
            <p>
                All educational materials, first-aid infographics, and written content published by Life Beyond Epilepsy are provided for community education under non-commercial educational fair-use principles. Healthcare facilities listed in our directory are compiled from public health registries and vetted community surveys in Trans-Nzoia County.
            </p>
        </div>
    </section>
</div>
@endsection

