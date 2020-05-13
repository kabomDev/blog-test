<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/admin/create' => [[['_route' => 'post_create', '_controller' => 'App\\Controller\\PostController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/test/([^/]++)(*:56)'
                .'|/hello(?:/([^/]++))?(*:83)'
                .'|/blog/([^/]++)(*:104)'
                .'|/admin/(?'
                    .'|edit/([^/]++)(*:135)'
                    .'|delete/([^/]++)(*:158)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        56 => [[['_route' => 'test', '_controller' => 'App\\Controller\\HomeController::test'], ['id'], null, null, false, true, null]],
        83 => [[['_route' => 'hello', 'name' => 'World', '_controller' => 'App\\Controller\\HomeController::hello'], ['name'], null, null, false, true, null]],
        104 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], null, null, false, true, null]],
        158 => [
            [['_route' => 'post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
