<?php

namespace Spatie\DisableTopicsApi;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class DisableDisableTopicsApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->make(Kernel::class)->prependMiddlewareToGroup('web', DisableFloc::class);
    }
}
