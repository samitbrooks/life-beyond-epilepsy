<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_core_pages_render_successfully(): void
    {
        $routes = [
            '/',
            '/about',
            '/awareness',
            '/navigator',
            '/medical-support',
            '/children',
            '/events',
            '/partnerships',
            '/donate',
            '/impact',
            '/get-involved',
            '/contact',
            '/privacy',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_bilingual_language_switching(): void
    {
        // Switch to Kiswahili
        $swResponse = $this->get('/?lang=sw');
        $swResponse->assertStatus(200);
        $swResponse->assertSee('Kuishi Maisha Kamili Zaidi ya Kifafa');
        $swResponse->assertSee('Kaunti ya Trans-Nzoia');

        // Switch to English
        $enResponse = $this->get('/?lang=en');
        $enResponse->assertStatus(200);
        $enResponse->assertSee('Living Fully Beyond Epilepsy');
        $enResponse->assertSee('Trans-Nzoia County');
    }

    public function test_contact_form_submission(): void
    {
        $response = $this->post('/contact', [
            'name' => 'John Wafula',
            'email_or_phone' => '0712345678',
            'subject' => 'School Training Request',
            'message' => 'We would like to request an epilepsy awareness talk at our school in Kitale.',
            'consent' => '1',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('enquiries', [
            'name' => 'John Wafula',
            'subject' => 'School Training Request',
        ]);
    }
}
