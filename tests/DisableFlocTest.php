<?php

namespace Spatie\DisableTopicsApi\Tests;

use Illuminate\Support\Facades\Route;
use Spatie\DisableTopicsApi\DisableTopicsApi;

class DisableTopicsApiTest extends TestCase
{
    /** @test */
    public function it_will_add_the_floc_header()
    {
        Route::get('test', function () {
            return 'Computer says no, Google';
        })->middleware(DisableTopicsApi::class);

        $this
            ->get('test')
            ->assertSuccessful()
            ->assertHeader('Permissions-Policy', 'browsing-topics=()');
    }
}
