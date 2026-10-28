@extends('admin.layout')

@section('title', 'Manage Enquiries')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
                <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Communications & Intake</span>
            </div>
            <h2 class="text-2xl font-black text-slate-900">Enquiries & Partnership Requests</h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Submitted through public contact and collaboration forms from schools, caregivers, and partners.</p>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-purple-100 overflow-hidden shadow-xs">
        <div class="px-6 py-4 bg-purple-50/60 border-b border-purple-100 flex items-center justify-between">
            <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Enquiries Inbox ({{ $enquiries->count() }})</span>
            <span class="text-[11px] text-slate-500">Non-emergency public desk</span>
        </div>

        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50/80 border-b border-purple-100 text-slate-600 uppercase font-black tracking-wider text-[11px]">
                    <th class="p-4 pl-6">Sender & Contact</th>
                    <th class="p-4">Subject</th>
                    <th class="p-4">Message</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 pr-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-purple-50 text-slate-800">
                @forelse($enquiries as $enquiry)
                    <tr class="hover:bg-purple-50/30 transition">
                        <td class="p-4 pl-6 font-bold whitespace-nowrap">
                            <span class="text-slate-900 font-black">{{ $enquiry->name }}</span>
                            <div class="text-[11px] text-slate-500 font-normal mt-0.5">{{ $enquiry->email_or_phone }}</div>
                            <div class="text-[10px] text-slate-400 font-normal">{{ $enquiry->created_at->format('M d, H:i') }}</div>
                        </td>
                        <td class="p-4 font-black text-[#45017A]">{{ $enquiry->subject }}</td>
                        <td class="p-4 text-slate-600 max-w-md leading-relaxed">{{ $enquiry->message }}</td>
                        <td class="p-4">
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider {{ $enquiry->status === 'New' ? 'bg-[#F29000]/15 text-amber-900 border border-amber-300' : 'bg-slate-200 text-slate-700' }}">
                                {{ $enquiry->status }}
                            </span>
                        </td>
                        <td class="p-4 pr-6 text-right whitespace-nowrap">
                            @if($enquiry->status === 'New')
                                <form action="{{ route('admin.enquiries.respond', $enquiry) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="px-3 py-1.5 rounded-lg bg-[#45017A] hover:bg-[#320059] text-white font-black text-[11px] shadow-xs transition">
                                        Mark Responded
                                    </button>
                                </form>
                            @else
                                <span class="text-slate-400 font-medium text-xs">Archived</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-slate-400">
                            No public enquiries received yet. Messages sent via the Contact page will be routed here.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

