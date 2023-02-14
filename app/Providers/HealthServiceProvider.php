<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;

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
