<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_login_success()
    {
        $username = 'tronghieu';
        $password = '12345678';

        $user = User::create([
            'first_name' => 'Hieu',
            'last_name' => 'Nguyen Trong',
            'username' => $username,
            'email' => 'hieuntctk42@gmail.com',
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'avatar_name' => 'avatar.jpg',
            'avatar_path' => 'avatar.jpg'
        ]);

        $this
            ->browse(function ($browser) use ($user, $username, $password) {
                $browser->visit('http://localhost:8000/admin/auth/login')
                    ->assertTitleContains('Đăng nhập')
                    ->value('input[name="username"]', $username)
                    ->value('input[name="password"]', $password)
                    ->click('button[type="submit"]')
                    ->assertPathIs('/admin');
            });
    }
}
