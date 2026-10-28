<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // County Referral, Sub-County Hospital, Health Centre, Private Clinic, Pharmacy
            $table->string('sub_county'); // Kitale, Kiminini, Cherangany, Endebess, Saboti
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->json('services')->nullable(); // ['Emergency', 'EEG', 'Pediatric', 'Pharmacy']
            $table->string('verification_status')->default('Verified'); // Verified, Pending, Unverified
            $table->date('verified_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category'); // Outreach, Workshop, Purple Day
            $table->date('event_date');
            $table->string('location');
            $table->string('time_details')->nullable();
            $table->text('description');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_or_phone');
            $table->string('subject');
            $table->text('message');
            $table->string('status')->default('New'); // New, Responded, Archived
            $table->boolean('consent')->default(true);
            $table->timestamps();
        });

        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact_info');
            $table->string('location');
            $table->json('interests');
            $table->text('experience')->nullable();
            $table->string('status')->default('Pending'); // Pending, Contacted, Active
            $table->boolean('consent')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
        Schema::dropIfExists('enquiries');
        Schema::dropIfExists('events');
        Schema::dropIfExists('facilities');
    }
};
