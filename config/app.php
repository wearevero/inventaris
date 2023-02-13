<?php

use Illuminate\Support\Facades\Facade;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

return [
    "name" => env("APP_NAME", "Inventaris"),

    "env" => env("APP_ENV", "production"),

    "debug" => (bool) env("APP_DEBUG", false),

    "url" => env("APP_URL", "http://localhost"),

    "asset_url" => env("ASSET_URL"),

    "timezone" => env("APP_TIMEZONE", "Asia/Jakarta"),

    "locale" => "id",

    "fallback_locale" => "en",

    "faker_locale" => "en_US",

    "key" => env("APP_KEY"),

    "cipher" => "AES-256-CBC",

    "maintenance" => [
        "driver" => "file",
        // 'store'  => 'redis',
    ],

    "providers" => [
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Maatwebsite\Excel\ExcelServiceProvider::class,
        RealRashid\SweetAlert\SweetAlertServiceProvider::class,
    ],

    "aliases" => Facade::defaultAliases()
        ->merge([
            "Excel" => Maatwebsite\Excel\Facades\Excel::class,
            "Alert" => RealRashid\SweetAlert\Facades\Alert::class,
        ])
        ->toArray(),
];
