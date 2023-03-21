<?php

return [
    "docs" => [
        "route" => "/docs",
        "path" => "/resources/docs",
        "landing" => "overview",
        "middleware" => ["web"],
    ],

    "versions" => [
        "default" => "1.0",
        "published" => ["1.0"],
    ],

    "settings" => [
        "auth" => true,
        "guard" => null,
        "ga_id" => "",
        "middleware" => ["web"],
    ],

    "cache" => [
        "enabled" => false,
        "period" => 5,
    ],

    "search" => [
        "enabled" => false,
        "default" => "algolia",
        "engines" => [
            "internal" => [
                "index" => ["h2", "h3"],
            ],
            "algolia" => [
                "key" => "",
                "index" => "",
            ],
        ],
    ],

    "ui" => [
        "code_theme" => "dark", // or: light
        "fav" => "", // eg: fav.png
        "fa_v4_shims" => true, // Add FontAwesome v4 shims prevent BC break
        "show_side_bar" => true,
        "colors" => [
            "primary" => "#787AF6",
            "secondary" => "#2b9cf2",
        ],

        "theme_order" => null, // ['LaRecipeDarkTheme', 'customTheme']
    ],

    "seo" => [
        "author" => "",
        "description" => "",
        "keywords" => "",
        "og" => [
            "title" => "",
            "type" => "article",
            "url" => "",
            "image" => "",
            "description" => "",
        ],
    ],

    /*
   |--------------------------------------------------------------------------
   | Forum
   |--------------------------------------------------------------------------
   |
   | Giving a chance to your users to post their questions or feedback
   | directly on your docs, is pretty nice way to engage them more.
   | However, you can also enable/disable the forum's visibility.
   |
   | Supported Services: 'disqus'
   |
   */

    "forum" => [
        "enabled" => false,
        "default" => "disqus",
        "services" => [
            "disqus" => [
                "site_name" => "", // yoursite.disqus.com
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Components and Packages
    |--------------------------------------------------------------------------
    |
    | Once you create a new asset or theme, its directory will be
    | published under `larecipe-components` folder. However, If
    | you want a different location, feel free to change it.
    |
    |
    */

    "packages" => [
        "path" => "larecipe-components",
    ],

    "blade-parser" => [
        "regex" => [
            "code-blocks" => [
                "match" => '/\<pre\>(.|\n)*?<\/pre\>/',
                "replacement" => "<code-block>",
            ],
        ],
    ],
];
