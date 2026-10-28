@extends('admin.layout')

@section('title', 'Volunteer Applicants')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
                <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Community Mobilization</span>
            </div>
            <h2 class="text-2xl font-black text-slate-900">Volunteer Community Roster</h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Individuals registered to support school inclusion, community drives, and clinical events in Trans-Nzoia.</p>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-purple-100 overflow-hidden shadow-xs">
        <div class="px-6 py-4 bg-purple-50/60 border-b border-purple-100 flex items-center justify-between">
            <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Volunteer Network ({{ $volunteers->count() }})</span>
            <span class="text-[11px] text-slate-500">Governed under Kenya Data Protection Act 2019</span>
        </div>

        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50/80 border-b border-purple-100 text-slate-600 uppercase font-black tracking-wider text-[11px]">
                    <th class="p-4 pl-6">Name & Contact</th>
                    <th class="p-4">Location</th>
                    <th class="p-4">Interests</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 pr-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-purple-50 text-slate-800">
                @forelse($volunteers as $volunteer)
                    <tr class="hover:bg-purple-50/30 transition">
                        <td class="p-4 pl-6 font-bold whitespace-nowrap">
                            <span class="text-slate-900 font-black">{{ $volunteer->full_name }}</span>
                            <div class="text-[11px] text-slate-500 font-normal mt-0.5">{{ $volunteer->contact_info }}</div>
                            <div class="text-[10px] text-emerald-700 font-bold mt-0.5">DPA 2019 Consent Verified ✓</div>
                        </td>
                        <td class="p-4 font-bold text-[#45017A]">📍 {{ $volunteer->location }}</td>
                        <td class="p-4 max-w-xs">
                            <div class="flex flex-wrap gap-1.5">
                                @if(is_array($volunteer->interests))
                                    @foreach($volunteer->interests as $interest)
                                        <span class="bg-purple-50 text-[#45017A] border border-purple-200 px-2 py-0.5 rounded-lg text-[10px] font-bold">{{ $interest }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </td>
                        <td class="p-4">
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider {{ $volunteer->status === 'Pending' ? 'bg-[#F29000]/15 text-amber-900 border border-amber-300' : 'bg-emerald-50 text-emerald-800 border border-emerald-200' }}">
                                {{ $volunteer->status }}
                            </span>
                        </td>
                        <td class="p-4 pr-6 text-right whitespace-nowrap">
                            @if($volunteer->status === 'Pending')
                                <form action="{{ route('admin.volunteers.contacted', $volunteer) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="px-3 py-1.5 rounded-lg bg-[#45017A] hover:bg-[#320059] text-white font-black text-[11px] shadow-xs transition">
                                        Mark Contacted
                                    </button>
                                </form>
                            @else
                                <span class="text-slate-400 font-medium text-xs">Contacted</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-slate-400">
                            No volunteer applications submitted yet. Community advocates joining through the Get Involved page will appear here.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

