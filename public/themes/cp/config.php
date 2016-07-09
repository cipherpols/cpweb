<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => 'public', //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events'  => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before'             => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(trans('cms.name'));

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme'  => function ($theme) {
            //You may use this event to set up your assets.

            $theme->asset()->usepath()->add('bootstrap', 'bootstrap/css/bootstrap.min.css');
            $theme->asset()->usepath()->add('font-awesome', 'css/font-awesome.min.css');
            $theme->asset()->usepath()->add('style-library-1', 'css/style-library-1.css');
            $theme->asset()->usepath()->add('header-3', 'css/header-3.css');
            $theme->asset()->usepath()->add('content1-3', 'css/content1-3.css');
            $theme->asset()->usepath()->add('content1-4', 'css/content1-4.css');
            $theme->asset()->usepath()->add('content1-7', 'css/content1-7.css');
            $theme->asset()->usepath()->add('promo-3', 'css/promo-3.css');
            $theme->asset()->usepath()->add('team-1', 'css/team-1.css');
            $theme->asset()->usepath()->add('contact-2', 'css/contact-2.css');
            $theme->asset()->usepath()->add('footer-1', 'css/footer-1.css');
            $theme->asset()->usepath()->add('styles', 'css/basic.css');

            $theme->asset()->add('jquery', 'packages/jquery/js/jquery.min.js');
            $theme->asset()->usepath()->add('bskit-scripts', 'js/bskit-scripts.js');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme) {
            },

            'user'    => function ($theme) {
            },

            'public'  => function ($theme) {
            },

            'home'    => function ($theme) {
                $theme->asset()->add('ionicons', 'packages/ionicons/css/ionicons.min.css');
            },

        ],

    ],

];
