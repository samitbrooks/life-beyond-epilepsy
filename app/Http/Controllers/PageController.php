<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function awareness()
    {
        return view('pages.awareness');
    }

    public function navigator()
    {
        return view('pages.navigator');
    }

    public function medicalSupport()
    {
        return view('pages.medical-support');
    }

    public function children()
    {
        return view('pages.children');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function partnerships()
    {
        return view('pages.partnerships');
    }

    public function donate()
    {
        return view('pages.donate');
    }

    public function impact()
    {
        return view('pages.impact');
    }

    public function getInvolved()
    {
        return view('pages.get-involved');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email_or_phone' => 'required|string|max:100',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:1500',
            'consent' => 'accepted',
        ]);

        // In production, dispatch notification or store securely according to Kenya Data Protection Act.
        return back()->with('success', app()->getLocale() === 'sw' 
            ? 'Asante kwa kuwasiliana nasi. Ujumbe wako umepokelewa na tutakujibu wakati wa saa za kazi.' 
            : 'Thank you for contacting us. Your message has been received and our team will respond during business hours.');
    }

    public function submitVolunteer(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'contact_info' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'interests' => 'required|array',
            'experience' => 'nullable|string|max:1000',
            'consent' => 'accepted',
        ]);

        return back()->with('success', app()->getLocale() === 'sw'
            ? 'Asante kwa nia yako ya kujitolea na Life Beyond Epilepsy! Tutawasiliana nawe hivi karibuni.'
            : 'Thank you for your interest in volunteering with Life Beyond Epilepsy! Our coordinator will be in touch shortly.');
    }
}
