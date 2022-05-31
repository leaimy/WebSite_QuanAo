<?php

namespace Tests\Unit;

use Tests\TestCase;

class AdminCategoryControllerTest extends TestCase
{
    public function test_admin_category_redirect_to_login_page()
    {
        $response = $this->get('/admin/categories');

        $response->assertRedirect('/admin/auth/login');
    }
}
