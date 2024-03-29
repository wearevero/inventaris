<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command("test:crone")->everyMinute();
        $schedule
            ->command(\Spatie\Health\Commands\RunHealthChecksCommand::class)
            ->everyMinute();
        $schedule->command("telescope:prune")->daily();
    }

    protected function commands()
    {
        $this->load(__DIR__ . "/Commands");
        require base_path("routes/console.php");
    }
}
