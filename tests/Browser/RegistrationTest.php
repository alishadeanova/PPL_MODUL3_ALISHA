<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    public function testRegistration(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/register')
                    ->assertSee('Name')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('name', 'Alisha')
                    ->type('email', 'alisha@gmail.com')
                    ->type('password', '123456')
                    ->type('password_confirmation', '123456')
                    ->assertSee('Confirm Password')
                    ->clickLink('Already registered?');

        });
    }

    
}
