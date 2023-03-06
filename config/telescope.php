<?php

use Laravel\Telescope\Http\Middleware\Authorize;
use Laravel\Telescope\Watchers;

return [
    /*
    |--------------------------------------------------------------------------
    | Telescope Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Telescope will be accessible from. If the
    | setting is null, Telescope will reside under the same domain as the
    | application. Otherwise, this value will be used as the subdomain.
    |
    */

    'domain' => env('TELESCOPE_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | Telescope Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Telescope will be accessible from. Feel free
    | to change this path to anything you like. Note that the URI will not
    | affect the paths of its internal API that aren't exposed to users.
    |
    */

    'path' => env('TELESCOPE_PATH', 'telescope'),

    'driver' => env('TELESCOPE_DRIVER', 'database'),
    'storage' => [
        'database' => [
            'connection' => env('DB_CONNECTION', 'mysql'),
            'chunk' => 1000,
        ],
    ],

    'enabled' => env('TELESCOPE_ENABLED', true),
    'middleware' => ['web', Authorize::class],
    'only_paths' => [
        // 'api/*'
    ],

    'ignore_paths' => ['nova-api*'],

    'ignore_commands' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Telescope Watchers
    |--------------------------------------------------------------------------
    |
    | The following array lists the "watchers" that will be registered with
    | Telescope. The watchers gather the application's profile data when
    | a request or task is executed. Feel free to customize this list.
    |
    */

    'watchers' => [
        Watchers\BatchWatcher::class => env('TELESCOPE_BATCH_WATCHER', true),

        Watchers\CacheWatcher::class => [
            'enabled' => env('TELESCOPE_CACHE_WATCHER', true),
            'hidden' => [],
        ],

        Watchers\ClientRequestWatcher::class => env(
            'TELESCOPE_CLIENT_REQUEST_WATCHER',
            true
        ),

        Watchers\CommandWatcher::class => [
            'enabled' => env('TELESCOPE_COMMAND_WATCHER', true),
            'ignore' => [],
        ],

        Watchers\DumpWatcher::class => [
            'enabled' => env('TELESCOPE_DUMP_WATCHER', true),
            'always' => env('TELESCOPE_DUMP_WATCHER_ALWAYS', false),
        ],

        Watchers\EventWatcher::class => [
            'enabled' => env('TELESCOPE_EVENT_WATCHER', true),
            'ignore' => [],
        ],

        Watchers\ExceptionWatcher::class => env(
            'TELESCOPE_EXCEPTION_WATCHER',
            true
        ),

        Watchers\GateWatcher::class => [
            'enabled' => env('TELESCOPE_GATE_WATCHER', true),
            'ignore_abilities' => [],
            'ignore_packages' => true,
            'ignore_paths' => [],
        ],

        Watchers\JobWatcher::class => env('TELESCOPE_JOB_WATCHER', true),
        Watchers\LogWatcher::class => env('TELESCOPE_LOG_WATCHER', true),
        Watchers\MailWatcher::class => env('TELESCOPE_MAIL_WATCHER', true),

        Watchers\ModelWatcher::class => [
            'enabled' => env('TELESCOPE_MODEL_WATCHER', true),
            'events' => ['eloquent.*'],
            'hydrations' => true,
        ],

        Watchers\NotificationWatcher::class => env(
            'TELESCOPE_NOTIFICATION_WATCHER',
            true
        ),

        Watchers\QueryWatcher::class => [
            'enabled' => env('TELESCOPE_QUERY_WATCHER', true),
            'ignore_packages' => true,
            'ignore_paths' => [],
            'slow' => 100,
        ],

        Watchers\RedisWatcher::class => env('TELESCOPE_REDIS_WATCHER', true),

        Watchers\RequestWatcher::class => [
            'enabled' => env('TELESCOPE_REQUEST_WATCHER', true),
            'size_limit' => env('TELESCOPE_RESPONSE_SIZE_LIMIT', 64),
            'ignore_http_methods' => [],
            'ignore_status_codes' => [],
        ],

        Watchers\ScheduleWatcher::class => env(
            'TELESCOPE_SCHEDULE_WATCHER',
            true
        ),
        Watchers\ViewWatcher::class => env('TELESCOPE_VIEW_WATCHER', true),
    ],
];
