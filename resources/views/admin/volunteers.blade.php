@extends('admin.layout')

@section('title', 'Volunteer Applicants')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Volunteer Community Roster</h2>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">Individuals registered to support school inclusion, community drives, and clinical events.</p>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-700 uppercase font-black tracking-wider">
                    <th class="p-4">Name & Contact</th>
                    <th class="p-4">Location</th>
                    <th class="p-4">Interests</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-800">
                @forelse($volunteers as $volunteer)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4 font-bold whitespace-nowrap">
                            {{ $volunteer->full_name }}
                            <div class="text-[11px] text-slate-500 font-normal">{{ $volunteer->contact_info }}</div>
                            <div class="text-[10px] text-slate-400 font-normal">Consent: Kenya DPA 2019 ✓</div>
                        </td>
                        <td class="p-4 font-medium text-slate-700">📍 {{ $volunteer->location }}</td>
                        <td class="p-4 max-w-xs">
                            <div class="flex flex-wrap gap-1">
                                @if(is_array($volunteer->interests))
                                    @foreach($volunteer->interests as $interest)
                                        <span class="bg-purple-50 text-purple-700 px-1.5 py-0.5 rounded text-[10px] font-semibold">{{ $interest }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </td>
                        <td class="p-4">
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold {{ $volunteer->status === 'Pending' ? 'bg-purple-100 text-purple-800' : 'bg-emerald-100 text-emerald-800' }}">
                                {{ $volunteer->status }}
                            </span>
                        </td>
                        <td class="p-4 text-right whitespace-nowrap">
                            @if($volunteer->status === 'Pending')
                                <form action="{{ route('admin.volunteers.contacted', $volunteer) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-purple-700 hover:text-purple-900 font-bold">Mark Contacted</button>
                                </form>
                            @else
                                <span class="text-slate-400 font-medium">Contacted</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-slate-400">No volunteer applications submitted yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
