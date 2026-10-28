@extends('admin.layout')

@section('title', 'Manage Events')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Events & Community Outreach</h2>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">Schedule and publish school workshops, community awareness camps, and Purple Day Kenya.</p>
    </div>

    <!-- Add Event Form -->
    <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-4">
        <h3 class="font-bold text-slate-900 text-base">Schedule New Event</h3>
        <form action="{{ route('admin.events.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Event Title *</label>
                <input type="text" name="title" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Category *</label>
                <select name="category" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
                    <option value="Community Outreach">Community Outreach</option>
                    <option value="School Initiative">School Initiative</option>
                    <option value="Purple Day Campaign">Purple Day Campaign</option>
                    <option value="Clinician Workshop">Clinician Workshop</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Date *</label>
                <input type="date" name="event_date" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Location *</label>
                <input type="text" name="location" required placeholder="e.g. Kitale Town Hall" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Time Details</label>
                <input type="text" name="time_details" placeholder="e.g. 9:00 AM – 3:30 PM EAT" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none">
            </div>

            <div class="md:col-span-3">
                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Event Description *</label>
                <textarea name="description" rows="3" required class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-purple-600 focus:outline-none"></textarea>
            </div>

            <div class="md:col-span-3 flex justify-end">
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-purple-700 hover:bg-purple-800 text-white font-bold text-xs shadow transition">
                    Schedule & Publish Event
                </button>
            </div>
        </form>
    </div>

    <!-- Event List -->
    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
        <table class="w-full text-left border-collapse text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-700 uppercase font-black tracking-wider">
                    <th class="p-4">Date</th>
                    <th class="p-4">Event Details</th>
                    <th class="p-4">Category</th>
                    <th class="p-4">Location</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-800">
                @foreach($events as $event)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4 font-bold text-purple-900 whitespace-nowrap">{{ $event->event_date->format('M d, Y') }}</td>
                        <td class="p-4">
                            <span class="font-bold text-slate-900">{{ $event->title }}</span>
                            <div class="text-[11px] text-slate-500 mt-0.5 line-clamp-1">{{ $event->description }}</div>
                        </td>
                        <td class="p-4">{{ $event->category }}</td>
                        <td class="p-4 text-slate-600">📍 {{ $event->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
