<?php


use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    public function test_log_user_in_success_redirect_to_admin_page()
    {
        $response = $this->post('/admin/auth/login', [
           'username' => 'tronghieu',
           'password' => 'tronghieu'
        ]);

        $response->assertRedirect('/admin');
    }

    public function test_log_user_in_fail_redirect_to_login_page()
    {
        $response = $this->post('/admin/auth/login', [
            'username' => 'tronghieu',
            'password' => 'fail'
        ]);

        $response->assertRedirect('/admin/auth/login');
    }
}
