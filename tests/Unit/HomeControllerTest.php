<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function test_home_page_success_status_code_200()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_home_page_return_correct_view()
    {
        $response = $this->get('/');
        $response->assertViewIs('Frontend.Home.index');
    }
}
