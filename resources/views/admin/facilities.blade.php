@extends('admin.layout')

@section('title', 'Manage Facilities')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-black text-slate-900">Healthcare Facilities Registry</h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Curate and verify clinics, hospitals, and diagnostic centres in Trans-Nzoia County.</p>
        </div>
    </div>

    <!-- Add Facility Form -->
    <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-4">
        <h3 class="font-bold text-slate-900 text-base">Add New Facility to Directory</h3>
        <form action="{{ route('admin.facilities.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Facility Name *</label>
                <input type="text" name="name" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Facility Type *</label>
                <select name="type" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
                    <option value="County Referral Hospital">County Referral Hospital</option>
                    <option value="Sub-County Hospital">Sub-County Hospital</option>
                    <option value="Health Centre / Dispensary">Health Centre / Dispensary</option>
                    <option value="EEG Diagnostic Centre">EEG Diagnostic Centre</option>
                    <option value="Licensed Pharmacy">Licensed Pharmacy</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Sub-County *</label>
                <select name="sub_county" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
                    <option value="Kitale">Kitale</option>
                    <option value="Kiminini">Kiminini</option>
                    <option value="Cherangany">Cherangany</option>
                    <option value="Endebess">Endebess</option>
                    <option value="Saboti">Saboti</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Address / Landmark</label>
                <input type="text" name="address" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Phone Number</label>
                <input type="text" name="phone" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Services (comma separated)</label>
                <input type="text" name="services" placeholder="e.g. Outpatient, Emergency, EEG" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div class="md:col-span-3 flex justify-end">
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-bold text-xs shadow transition">
                    + Add & Verify Facility
                </button>
            </div>
        </form>
    </div>

    <!-- Facility Table -->
    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-700 uppercase font-black tracking-wider">
                    <th class="p-4">Facility</th>
                    <th class="p-4">Type</th>
                    <th class="p-4">Sub-County</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-800">
                @foreach($facilities as $facility)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4 font-bold">
                            {{ $facility->name }}
                            <div class="text-[11px] text-slate-500 font-normal">{{ $facility->address }} • {{ $facility->phone }}</div>
                        </td>
                        <td class="p-4">{{ $facility->type }}</td>
                        <td class="p-4 font-medium">{{ $facility->sub_county }}</td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">
                                ✓ {{ $facility->verification_status }}
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <form action="{{ route('admin.facilities.delete', $facility) }}" method="POST" onsubmit="return confirm('Remove this facility?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 font-bold">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
