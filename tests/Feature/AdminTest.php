<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_login_page_renders_successfully(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('LBE Administration CMS');
    }

    public function test_unauthenticated_admin_redirects_to_login(): void
    {
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/admin/login');
    }

    public function test_authenticated_admin_can_access_cms(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/admin/dashboard');
        $response->assertStatus(200);
        $response->assertSee('Platform Overview');

        $facilities = $this->get('/admin/facilities');
        $facilities->assertStatus(200);

        $events = $this->get('/admin/events');
        $events->assertStatus(200);

        $enquiries = $this->get('/admin/enquiries');
        $enquiries->assertStatus(200);

        $volunteers = $this->get('/admin/volunteers');
        $volunteers->assertStatus(200);

        $settings = $this->get('/admin/settings');
        $settings->assertStatus(200);
    }
}
