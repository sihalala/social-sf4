<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, true, false, null]],
        '/blog/add' => [[['_route' => 'blog_add', '_controller' => 'App\\Controller\\BlogController::add'], null, null, null, false, false, null]],
        '/micro-post' => [[['_route' => 'micro_post_index', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, true, false, null]],
        '/micro-post/add' => [[['_route' => 'micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
        '/notification/unread-count' => [[['_route' => 'notification_unread', '_controller' => 'App\\Controller\\NotificationController::unreadCount'], null, null, null, false, false, null]],
        '/notification/all' => [[['_route' => 'notification_all', '_controller' => 'App\\Controller\\NotificationController::notifications'], null, null, null, false, false, null]],
        '/notification/acknowledge-all' => [[['_route' => 'notification_acknowledge_all', '_controller' => 'App\\Controller\\NotificationController::acknowledgeAll'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/blog/show/([^/]++)(*:188)'
                .'|/following/(?'
                    .'|follow/([^/]++)(*:225)'
                    .'|unfollow/([^/]++)(*:250)'
                .')'
                .'|/likes/(?'
                    .'|like/([^/]++)(*:282)'
                    .'|unlike/([^/]++)(*:305)'
                .')'
                .'|/micro\\-post/(?'
                    .'|edit/([^/]++)(*:343)'
                    .'|delete/([^/]++)(*:366)'
                    .'|user/([^/]++)(*:387)'
                    .'|([^/]++)(*:403)'
                .')'
                .'|/notification/acknowledge/([^/]++)(*:446)'
                .'|/confirm/([^/]++)(*:471)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'following_follow', '_controller' => 'App\\Controller\\FollowingController::follow'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'following_unfollow', '_controller' => 'App\\Controller\\FollowingController::unfollow'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'likes_like', '_controller' => 'App\\Controller\\LikesController::like'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'likes_unlike', '_controller' => 'App\\Controller\\LikesController::unlike'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['id'], null, null, false, true, null]],
        366 => [[['_route' => 'micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'micro_post_user', '_controller' => 'App\\Controller\\MicroPostController::userPosts'], ['username'], null, null, false, true, null]],
        403 => [[['_route' => 'micro_post_post', '_controller' => 'App\\Controller\\MicroPostController::post'], ['id'], null, null, false, true, null]],
        446 => [[['_route' => 'notification_acknowledge', '_controller' => 'App\\Controller\\NotificationController::acknowledge'], ['id'], null, null, false, true, null]],
        471 => [
            [['_route' => 'security_confirm', '_controller' => 'App\\Controller\\SecurityController::confirm'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
