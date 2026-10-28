<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Facility;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Default LBE Admin User
        User::firstOrCreate(
            ['email' => 'admin@lifebeyondepilepsy.org'],
            [
                'name' => 'LBE Administrator',
                'password' => Hash::make('Epilepsy@2026!'),
            ]
        );

        // Seed Initial Curated Trans-Nzoia Pilot Facilities
        $facilities = [
            [
                'name' => 'Kitale County Referral Hospital',
                'type' => 'County Referral Hospital',
                'sub_county' => 'Kitale',
                'address' => 'Hospital Road, Kitale Town',
                'phone' => '+254 54 30000',
                'services' => ['Emergency Department', 'General Outpatient', 'Pediatric Clinic', 'Specialist Review'],
                'verification_status' => 'Verified',
                'verified_at' => now(),
                'notes' => 'Primary referral centre for Trans-Nzoia. Clinic day schedule confirmed weekly.',
            ],
            [
                'name' => 'Kiminini Sub-County Hospital',
                'type' => 'Sub-County Hospital',
                'sub_county' => 'Kiminini',
                'address' => 'Kiminini Township',
                'phone' => '+254 54 30001',
                'services' => ['Outpatient Triage', 'Pharmacy Dispensary', 'MCH Clinic'],
                'verification_status' => 'Verified',
                'verified_at' => now(),
                'notes' => 'Provides initial assessment and outpatient triage.',
            ],
            [
                'name' => 'Cherangany Sub-County Hospital',
                'type' => 'Sub-County Hospital',
                'sub_county' => 'Cherangany',
                'address' => 'Cherangany Trading Centre',
                'phone' => '+254 54 30002',
                'services' => ['Clinical Assessment', 'Referral Desk', 'Emergency Stabilization'],
                'verification_status' => 'Verified',
                'verified_at' => now(),
                'notes' => 'Referral link to Kitale County Referral.',
            ],
            [
                'name' => 'Endebess Sub-County Hospital',
                'type' => 'Sub-County Hospital',
                'sub_county' => 'Endebess',
                'address' => 'Endebess Centre',
                'phone' => '+254 54 30003',
                'services' => ['Outpatient Consultation', 'Pharmacy Stock'],
                'verification_status' => 'Verified',
                'verified_at' => now(),
                'notes' => 'Serves Mt. Elgon foothills communities.',
            ],
            [
                'name' => 'Saboti Sub-County Hospital',
                'type' => 'Sub-County Hospital',
                'sub_county' => 'Saboti',
                'address' => 'Saboti Centre',
                'phone' => '+254 54 30004',
                'services' => ['General Clinical Care', 'Maternal Child Health'],
                'verification_status' => 'Verified',
                'verified_at' => now(),
                'notes' => 'Community health outreach link.',
            ],
        ];

        foreach ($facilities as $facility) {
            Facility::firstOrCreate(['name' => $facility['name']], $facility);
        }

        // Seed Initial Events
        Event::firstOrCreate(
            ['title' => 'Kitale Community Epilepsy Education Camp'],
            [
                'category' => 'Community Outreach',
                'event_date' => now()->addDays(17),
                'location' => 'Kitale Town Hall Grounds',
                'time_details' => '9:00 AM – 3:30 PM EAT',
                'description' => 'Free public seizure first-aid training, clinician Q&A, and health navigation desk.',
                'is_published' => true,
            ]
        );

        Event::firstOrCreate(
            ['title' => 'Kiminini Sub-County Teacher Workshop'],
            [
                'category' => 'School Initiative',
                'event_date' => now()->addDays(38),
                'location' => 'Kiminini Educational Centre',
                'time_details' => '10:00 AM – 1:00 PM EAT',
                'description' => 'Teacher awareness training on seizure recognition and anti-bullying buddy systems.',
                'is_published' => true,
            ]
        );
    }
}
