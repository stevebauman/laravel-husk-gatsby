<?php

use Laravel\Dusk\Browser;
use Tests\Pages\HomePage;

it('loads', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit(new HomePage)->assertSee('Congratulations')->assertSee('— you just made a Gatsby site!');
    });
});
