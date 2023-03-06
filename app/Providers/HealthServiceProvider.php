<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Facades\Health;

class HealthServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Health::checks([UsedDiskSpaceCheck::new(), DatabaseCheck::new()]);
    }

    public function boot()
    {
        //
    }
}
