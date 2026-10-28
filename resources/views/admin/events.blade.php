@extends('admin.layout')

@section('title', 'Manage Events')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
                <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Outreach & Advocacy</span>
            </div>
            <h2 class="text-2xl font-black text-slate-900">Events & Community Outreach</h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Schedule and publish school workshops, community awareness camps, and Purple Day Kenya.</p>
        </div>
    </div>

    <!-- Add Event Form -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-purple-100 shadow-xs space-y-5 relative overflow-hidden">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#F29000] via-[#8034FA] to-[#45017A]"></div>

        <div class="flex items-center justify-between pb-3 border-b border-purple-100">
            <h3 class="font-black text-[#45017A] text-base flex items-center gap-2">
                <span>➕</span>
                <span>Schedule New Event</span>
            </h3>
            <span class="text-xs bg-purple-50 text-[#45017A] font-bold px-3 py-1 rounded-full border border-purple-200">
                Public Calendar Sync
            </span>
        </div>

        <form action="{{ route('admin.events.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @csrf
            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Event Title *</label>
                <input type="text" name="title" required placeholder="e.g. Purple Day Trans-Nzoia 2026" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Category *</label>
                <select name="category" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
                    <option value="Community Outreach">Community Outreach</option>
                    <option value="School Initiative">School Initiative</option>
                    <option value="Purple Day Campaign">Purple Day Campaign</option>
                    <option value="Clinician Workshop">Clinician Workshop</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Date *</label>
                <input type="date" name="event_date" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Location *</label>
                <input type="text" name="location" required placeholder="e.g. Kitale Town Hall" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Time Details</label>
                <input type="text" name="time_details" placeholder="e.g. 9:00 AM – 3:30 PM EAT" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none">
            </div>

            <div class="md:col-span-3">
                <label class="block text-xs font-black uppercase text-[#45017A] mb-1.5">Event Description *</label>
                <textarea name="description" rows="3" required placeholder="Provide clear details on what community attendees can expect..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-[#45017A] focus:border-[#45017A] focus:outline-none"></textarea>
            </div>

            <div class="md:col-span-3 flex justify-end pt-2">
                <button type="submit" class="px-6 py-3 rounded-xl bg-[#45017A] hover:bg-[#320059] text-white font-black text-xs shadow-md hover:shadow-lg transition flex items-center gap-2 group">
                    <span>Schedule & Publish Event</span>
                    <span class="text-[#F29000] group-hover:translate-x-1 transition-transform">→</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Event List -->
    <div class="bg-white rounded-3xl border border-purple-100 overflow-hidden shadow-xs">
        <div class="px-6 py-4 bg-purple-50/60 border-b border-purple-100 flex items-center justify-between">
            <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Scheduled Events ({{ $events->count() }})</span>
            <span class="text-[11px] text-slate-500">Live on public website events calendar</span>
        </div>

        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50/80 border-b border-purple-100 text-slate-600 uppercase font-black tracking-wider text-[11px]">
                    <th class="p-4 pl-6">Date</th>
                    <th class="p-4">Event Details</th>
                    <th class="p-4">Category</th>
                    <th class="p-4 pr-6">Location</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-purple-50 text-slate-800">
                @foreach($events as $event)
                    <tr class="hover:bg-purple-50/30 transition">
                        <td class="p-4 pl-6 font-black text-[#45017A] whitespace-nowrap">
                            <span class="bg-purple-50 text-[#45017A] border border-purple-200 px-2.5 py-1 rounded-lg inline-block">
                                {{ $event->event_date->format('M d, Y') }}
                            </span>
                        </td>
                        <td class="p-4">
                            <span class="font-black text-slate-900 text-sm">{{ $event->title }}</span>
                            <div class="text-[11px] text-slate-500 mt-1 line-clamp-1">{{ $event->description }}</div>
                        </td>
                        <td class="p-4">
                            <span class="px-2.5 py-1 rounded-lg bg-amber-50 text-amber-900 border border-amber-200 font-bold text-[10px]">
                                {{ $event->category }}
                            </span>
                        </td>
                        <td class="p-4 pr-6 text-slate-700 font-bold">📍 {{ $event->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

