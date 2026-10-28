@extends('admin.layout')

@section('title', 'Manage Enquiries')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Enquiries & Partnership Requests</h2>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">Submitted through public contact and collaboration forms.</p>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-700 uppercase font-black tracking-wider">
                    <th class="p-4">Sender & Contact</th>
                    <th class="p-4">Subject</th>
                    <th class="p-4">Message</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-800">
                @forelse($enquiries as $enquiry)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4 font-bold whitespace-nowrap">
                            {{ $enquiry->name }}
                            <div class="text-[11px] text-slate-500 font-normal">{{ $enquiry->email_or_phone }}</div>
                            <div class="text-[10px] text-slate-400 font-normal">{{ $enquiry->created_at->format('M d, H:i') }}</div>
                        </td>
                        <td class="p-4 font-semibold text-purple-950">{{ $enquiry->subject }}</td>
                        <td class="p-4 text-slate-600 max-w-md">{{ $enquiry->message }}</td>
                        <td class="p-4">
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold {{ $enquiry->status === 'New' ? 'bg-amber-100 text-amber-800' : 'bg-slate-200 text-slate-700' }}">
                                {{ $enquiry->status }}
                            </span>
                        </td>
                        <td class="p-4 text-right whitespace-nowrap">
                            @if($enquiry->status === 'New')
                                <form action="{{ route('admin.enquiries.respond', $enquiry) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-purple-700 hover:text-purple-900 font-bold">Mark Responded</button>
                                </form>
                            @else
                                <span class="text-slate-400 font-medium">Archived</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-slate-400">No public enquiries received yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

