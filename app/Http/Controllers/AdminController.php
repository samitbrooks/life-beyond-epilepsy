<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Event;
use App\Models\Facility;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our administrative records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $facilitiesCount = Facility::count();
        $eventsCount = Event::count();
        $enquiriesCount = Enquiry::where('status', 'New')->count();
        $volunteersCount = Volunteer::where('status', 'Pending')->count();

        $recentEnquiries = Enquiry::latest()->take(5)->get();
        $recentVolunteers = Volunteer::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'facilitiesCount',
            'eventsCount',
            'enquiriesCount',
            'volunteersCount',
            'recentEnquiries',
            'recentVolunteers'
        ));
    }

    public function facilities()
    {
        $facilities = Facility::latest()->get();
        return view('admin.facilities', compact('facilities'));
    }

    public function storeFacility(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'type' => 'required|string|max:100',
            'sub_county' => 'required|string|max:100',
            'address' => 'nullable|string|max:200',
            'phone' => 'nullable|string|max:50',
            'services' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $servicesArray = array_map('trim', explode(',', $request->input('services', '')));

        Facility::create([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'sub_county' => $validated['sub_county'],
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'services' => $servicesArray,
            'verification_status' => 'Verified',
            'verified_at' => now(),
            'notes' => $validated['notes'],
        ]);

        return back()->with('success', 'Healthcare facility added and verified successfully.');
    }

    public function deleteFacility(Facility $facility)
    {
        $facility->delete();
        return back()->with('success', 'Facility listing removed.');
    }

    public function events()
    {
        $events = Event::latest()->get();
        return view('admin.events', compact('events'));
    }

    public function storeEvent(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:150',
            'category' => 'required|string|max:100',
            'event_date' => 'required|date',
            'location' => 'required|string|max:150',
            'time_details' => 'nullable|string|max:100',
            'description' => 'required|string',
        ]);

        Event::create($validated);
        return back()->with('success', 'Community event scheduled successfully.');
    }

    public function enquiries()
    {
        $enquiries = Enquiry::latest()->get();
        return view('admin.enquiries', compact('enquiries'));
    }

    public function markEnquiryResponded(Enquiry $enquiry)
    {
        $enquiry->update(['status' => 'Responded']);
        return back()->with('success', 'Enquiry marked as responded.');
    }

    public function volunteers()
    {
        $volunteers = Volunteer::latest()->get();
        return view('admin.volunteers', compact('volunteers'));
    }

    public function markVolunteerContacted(Volunteer $volunteer)
    {
        $volunteer->update(['status' => 'Contacted']);
        return back()->with('success', 'Volunteer status updated.');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}

