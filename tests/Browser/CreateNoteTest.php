<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testCreateNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/create-note')
                    ->clikLink('Notes');
        });
    }
}
