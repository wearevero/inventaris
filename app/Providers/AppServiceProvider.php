<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\PingCheck;
use Spatie\Health\Facades\Health;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        Health::checks([
            DatabaseCheck::new(),
            // PingCheck::new()
            //     ->url("127.0.0.1:8000")
            //     ->timeout(2)
            //     ->name("development preview"),
            // PingCheck::new()
            //     ->url("10.10.10.184:8000")
            //     ->timeout(2)
            //     ->name("Production preview"),
            OptimizedAppCheck::new()
                ->checkConfig()
                ->checkRoutes(),
            DebugModeCheck::new()->expectedToBe(true),
            CacheCheck::new(),
            DatabaseTableSizeCheck::new()->table(
                "inventaris",
                maxSizeInMb: 2_000
            ),
            UsedDiskSpaceCheck::new(),
        ]);
    }

    public function boot()
    {
    }
}
