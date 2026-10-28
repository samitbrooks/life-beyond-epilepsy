@extends('admin.layout')

@section('title', 'Overview')

@section('content')
<div class="space-y-8 max-w-6xl">
    <!-- Branded Hero Banner -->
    <div class="p-8 rounded-3xl bg-gradient-to-r from-[#320059] via-[#45017A] to-[#320059] text-white shadow-lg relative overflow-hidden">
        <!-- Background Sun Burst Glow -->
        <div class="absolute -right-16 -top-16 w-64 h-64 bg-[#F29000]/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-2 max-w-2xl">
                <div class="flex items-center gap-2">
                    <span class="px-2.5 py-0.5 rounded-full bg-[#F29000] text-[#320059] text-[10px] font-black uppercase tracking-wider">
                        Trans-Nzoia Pilot Portal
                    </span>
                    <span class="text-xs text-purple-200">Kitale • Kiminini • Cherangany • Endebess • Saboti</span>
                </div>
                <h1 class="text-2xl sm:text-3xl font-black tracking-tight text-white">Platform Overview & Management</h1>
                <p class="text-xs sm:text-sm text-purple-100/90 leading-relaxed">
                    Manage certified healthcare facilities, community awareness campaigns, clinical first aid resources, and public enquiries across Trans-Nzoia County.
                </p>
            </div>

            <!-- Quick Action Buttons -->
            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <a href="{{ route('admin.facilities') }}" class="px-4 py-2.5 rounded-xl bg-[#F29000] hover:bg-[#D97706] text-[#320059] font-black text-xs shadow-md transition flex items-center gap-1.5">
                    <span>+</span>
                    <span>Add Facility</span>
                </a>
                <a href="{{ route('admin.events') }}" class="px-4 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs border border-white/20 transition flex items-center gap-1.5">
                    <span>+</span>
                    <span>Schedule Event</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="px-4 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs border border-white/20 transition flex items-center gap-1.5">
                    <span>Website</span>
                    <span>↗</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Stats Grid with Brand Accent Borders -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-2 border-t-4 border-t-[#45017A]">
            <div class="flex items-center justify-between">
                <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Health Facilities</span>
                <span class="w-7 h-7 rounded-lg bg-purple-50 text-[#45017A] flex items-center justify-center text-xs">🏥</span>
            </div>
            <div class="text-3xl font-black text-[#45017A]">{{ $facilitiesCount }}</div>
            <div class="text-[11px] text-slate-500 font-medium">Trans-Nzoia verified network</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-2 border-t-4 border-t-[#8034FA]">
            <div class="flex items-center justify-between">
                <span class="text-xs font-black uppercase tracking-wider text-[#8034FA]">Events & Outreach</span>
                <span class="w-7 h-7 rounded-lg bg-purple-50 text-[#8034FA] flex items-center justify-center text-xs">📅</span>
            </div>
            <div class="text-3xl font-black text-slate-900">{{ $eventsCount }}</div>
            <div class="text-[11px] text-slate-500 font-medium">Active public campaigns</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-2 border-t-4 border-t-[#F29000]">
            <div class="flex items-center justify-between">
                <span class="text-xs font-black uppercase tracking-wider text-[#F29000]">New Enquiries</span>
                <span class="w-7 h-7 rounded-lg bg-amber-50 text-[#F29000] flex items-center justify-center text-xs">💬</span>
            </div>
            <div class="text-3xl font-black text-[#F29000]">{{ $enquiriesCount }}</div>
            <div class="text-[11px] text-slate-500 font-medium">Awaiting staff response</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-purple-100 shadow-xs space-y-2 border-t-4 border-t-[#320059]">
            <div class="flex items-center justify-between">
                <span class="text-xs font-black uppercase tracking-wider text-[#45017A]">Volunteers</span>
                <span class="w-7 h-7 rounded-lg bg-purple-50 text-[#45017A] flex items-center justify-center text-xs">🤝</span>
            </div>
            <div class="text-3xl font-black text-[#320059]">{{ $volunteersCount }}</div>
            <div class="text-[11px] text-slate-500 font-medium">Registered community champions</div>
        </div>
    </div>

    <!-- Recent Items Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Enquiries -->
        <div class="bg-white rounded-3xl border border-purple-100 p-6 shadow-xs space-y-4">
            <div class="flex items-center justify-between pb-3 border-b border-purple-100">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#F29000]"></span>
                    <h3 class="font-black text-[#45017A] text-base">Recent Enquiries</h3>
                </div>
                <a href="{{ route('admin.enquiries') }}" class="text-xs font-bold text-[#45017A] hover:text-[#F29000] transition flex items-center gap-1">
                    <span>View All</span>
                    <span>→</span>
                </a>
            </div>

            @if($recentEnquiries->isEmpty())
                <div class="text-center py-8 text-slate-400 text-xs">
                    No recent enquiries. Incoming questions from the public contact forms will appear here.
                </div>
            @else
                <div class="space-y-3">
                    @foreach($recentEnquiries as $enquiry)
                        <div class="p-4 rounded-2xl bg-purple-50/40 border border-purple-100/70 flex items-start justify-between gap-3 text-xs hover:border-[#45017A]/40 transition">
                            <div class="space-y-0.5">
                                <span class="font-black text-slate-900">{{ $enquiry->name }}</span>
                                <div class="text-slate-600 font-medium line-clamp-1">{{ $enquiry->subject }}</div>
                                <div class="text-[11px] text-slate-400">{{ $enquiry->created_at->diffForHumans() }}</div>
                            </div>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider {{ $enquiry->status === 'New' ? 'bg-[#F29000]/15 text-amber-900 border border-amber-300' : 'bg-slate-200 text-slate-700' }}">
                                {{ $enquiry->status }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Recent Volunteers -->
        <div class="bg-white rounded-3xl border border-purple-100 p-6 shadow-xs space-y-4">
            <div class="flex items-center justify-between pb-3 border-b border-purple-100">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#45017A]"></span>
                    <h3 class="font-black text-[#45017A] text-base">Recent Volunteer Applications</h3>
                </div>
                <a href="{{ route('admin.volunteers') }}" class="text-xs font-bold text-[#45017A] hover:text-[#F29000] transition flex items-center gap-1">
                    <span>View All</span>
                    <span>→</span>
                </a>
            </div>

            @if($recentVolunteers->isEmpty())
                <div class="text-center py-8 text-slate-400 text-xs">
                    No recent volunteer submissions. When community members sign up, they will appear here.
                </div>
            @else
                <div class="space-y-3">
                    @foreach($recentVolunteers as $volunteer)
                        <div class="p-4 rounded-2xl bg-purple-50/40 border border-purple-100/70 flex items-start justify-between gap-3 text-xs hover:border-[#45017A]/40 transition">
                            <div class="space-y-0.5">
                                <span class="font-black text-slate-900">{{ $volunteer->full_name }}</span>
                                <div class="text-slate-600 font-medium">📍 {{ $volunteer->location }}</div>
                                <div class="text-[11px] text-slate-400">{{ $volunteer->created_at->diffForHumans() }}</div>
                            </div>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider {{ $volunteer->status === 'Pending' ? 'bg-[#45017A]/10 text-[#45017A] border border-purple-300' : 'bg-emerald-100 text-emerald-800' }}">
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

