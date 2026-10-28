@extends('admin.layout')

@section('title', 'Manage Facilities')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
                <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Navigator Database</span>
            </div>
            <h2 class="text-2xl font-black text-slate-900">Healthcare Facilities Registry</h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Curate and verify clinics, hospitals, and diagnostic centres across Trans-Nzoia County.</p>
        </div>
    </div>

    <!-- Add Facility Form -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-purple-100 shadow-xs space-y-5 relative overflow-hidden">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#F29000] via-[#8034FA] to-[#45017A]"></div>

        <div class="flex items-center justify-between pb-3 border-b border-purple-100">
            <h3 class="font-black text-[#45017A] text-base flex items-center gap-2">
                <span>➕</span>
                <span>Add New Facility to Directory</span>
            </h3>
            <span class="text-xs bg-purple-50 text-[#45017A] font-bold px-3 py-1 rounded-full border border-purple-200">
                County Verification Queue
            </span>
        </div>

        <form action="{{ route('admin.facilities.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @csrf
            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Facility Name *</label>
                <input type="text" name="name" required placeholder="e.g. Kitale County Referral Hospital" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Facility Type *</label>
                <select name="type" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
                    <option value="County Referral Hospital">County Referral Hospital</option>
                    <option value="Sub-County Hospital">Sub-County Hospital</option>
                    <option value="Health Centre / Dispensary">Health Centre / Dispensary</option>
                    <option value="EEG Diagnostic Centre">EEG Diagnostic Centre</option>
                    <option value="Licensed Pharmacy">Licensed Pharmacy</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Sub-County *</label>
                <select name="sub_county" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
                    <option value="Kitale">Kitale</option>
                    <option value="Kiminini">Kiminini</option>
                    <option value="Cherangany">Cherangany</option>
                    <option value="Endebess">Endebess</option>
                    <option value="Saboti">Saboti</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Address / Landmark</label>
                <input type="text" name="address" placeholder="e.g. Hospital Road, Kitale Town" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Phone Number</label>
                <input type="text" name="phone" placeholder="e.g. +254 700 000000" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Services (comma separated)</label>
                <input type="text" name="services" placeholder="e.g. Outpatient, Emergency, EEG, Pharmacy" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div class="md:col-span-3 flex justify-end pt-2">
                <button type="submit" class="px-6 py-3 rounded-xl bg-[#45017A] hover:bg-[#320059] text-white font-black text-xs shadow-md hover:shadow-lg transition flex items-center gap-2 group">
                    <span>+ Add & Verify Facility</span>
                    <span class="text-[#F29000] group-hover:translate-x-1 transition-transform">→</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Facility Table -->
    <div class="bg-white rounded-3xl border border-purple-100 overflow-hidden shadow-xs">
        <div class="px-6 py-4 bg-purple-50/60 border-b border-purple-100 flex items-center justify-between">
            <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Registered Facilities ({{ $facilities->count() }})</span>
            <span class="text-[11px] text-slate-500">Public health directory for Smart Health Navigator</span>
        </div>

        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50/80 border-b border-purple-100 text-slate-600 uppercase font-black tracking-wider text-[11px]">
                    <th class="p-4 pl-6">Facility</th>
                    <th class="p-4">Type</th>
                    <th class="p-4">Sub-County</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 pr-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-purple-50 text-slate-800">
                @foreach($facilities as $facility)
                    <tr class="hover:bg-purple-50/30 transition">
                        <td class="p-4 pl-6 font-bold">
                            <span class="text-slate-900 font-black">{{ $facility->name }}</span>
                            <div class="text-[11px] text-slate-500 font-normal mt-0.5">{{ $facility->address }} • {{ $facility->phone }}</div>
                        </td>
                        <td class="p-4">
                            <span class="px-2.5 py-1 rounded-lg bg-purple-50 text-[#45017A] border border-purple-200 font-bold text-[10px]">
                                {{ $facility->type }}
                            </span>
                        </td>
                        <td class="p-4 font-bold text-[#45017A]">📍 {{ $facility->sub_county }}</td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-200">
                                ✓ {{ $facility->verification_status }}
                            </span>
                        </td>
                        <td class="p-4 pr-6 text-right">
                            <form action="{{ route('admin.facilities.delete', $facility) }}" method="POST" onsubmit="return confirm('Remove this facility?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-600 hover:text-rose-800 font-bold transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

