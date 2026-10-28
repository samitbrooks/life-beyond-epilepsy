@extends('admin.layout')

@section('title', 'Overview')

@section('content')
<div class="space-y-8 max-w-6xl">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Platform Overview & Management</h2>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">Manage public facilities, scheduled campaigns, community forms, and volunteer rosters.</p>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-1">
            <span class="text-xs font-bold uppercase text-purple-700">Health Facilities</span>
            <div class="text-3xl font-black text-slate-900">{{ $facilitiesCount }}</div>
            <div class="text-[11px] text-slate-500">Trans-Nzoia directory</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-1">
            <span class="text-xs font-bold uppercase text-purple-700">Events & Outreach</span>
            <div class="text-3xl font-black text-slate-900">{{ $eventsCount }}</div>
            <div class="text-[11px] text-slate-500">Active public campaigns</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-1">
            <span class="text-xs font-bold uppercase text-purple-700">New Enquiries</span>
            <div class="text-3xl font-black text-amber-600">{{ $enquiriesCount }}</div>
            <div class="text-[11px] text-slate-500">Awaiting staff response</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-1">
            <span class="text-xs font-bold uppercase text-purple-700">Pending Volunteers</span>
            <div class="text-3xl font-black text-purple-700">{{ $volunteersCount }}</div>
            <div class="text-[11px] text-slate-500">Community signups</div>
        </div>
    </div>

    <!-- Recent Items Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Enquiries -->
        <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-slate-900 text-base">Recent Enquiries</h3>
                <a href="{{ route('admin.enquiries') }}" class="text-xs font-bold text-purple-700 hover:underline">View All</a>
            </div>

            @if($recentEnquiries->isEmpty())
                <p class="text-xs text-slate-500 py-4">No recent messages.</p>
            @else
                <div class="space-y-3">
                    @foreach($recentEnquiries as $enquiry)
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 flex items-start justify-between gap-3 text-xs">
                            <div>
                                <span class="font-bold text-slate-900">{{ $enquiry->name }}</span>
                                <div class="text-slate-600 font-medium">{{ $enquiry->subject }}</div>
                                <div class="text-[11px] text-slate-400 mt-0.5">{{ $enquiry->created_at->diffForHumans() }}</div>
                            </div>
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold {{ $enquiry->status === 'New' ? 'bg-amber-100 text-amber-800' : 'bg-slate-200 text-slate-700' }}">
                                {{ $enquiry->status }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Recent Volunteers -->
        <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-slate-900 text-base">Recent Volunteer Applications</h3>
                <a href="{{ route('admin.volunteers') }}" class="text-xs font-bold text-purple-700 hover:underline">View All</a>
            </div>

            @if($recentVolunteers->isEmpty())
                <p class="text-xs text-slate-500 py-4">No recent volunteer submissions.</p>
            @else
                <div class="space-y-3">
                    @foreach($recentVolunteers as $volunteer)
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 flex items-start justify-between gap-3 text-xs">
                            <div>
                                <span class="font-bold text-slate-900">{{ $volunteer->full_name }}</span>
                                <div class="text-slate-600 font-medium">📍 {{ $volunteer->location }}</div>
                                <div class="text-[11px] text-slate-400 mt-0.5">{{ $volunteer->created_at->diffForHumans() }}</div>
                            </div>
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold {{ $volunteer->status === 'Pending' ? 'bg-purple-100 text-purple-800' : 'bg-emerald-100 text-emerald-800' }}">
                                {{ $volunteer->status }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

