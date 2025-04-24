<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{

    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email', 'alisha@gmail.com')
                    ->type('password', '123456')
                    ->clickLink('Forgot your password?')
                    ->press('Log In');

        });
    }
}
