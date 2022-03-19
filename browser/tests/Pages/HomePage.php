<?php

namespace Tests\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class HomePage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }
}
