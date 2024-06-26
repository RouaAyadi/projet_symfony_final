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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/db' => [[['_route' => 'app_db', '_controller' => 'App\\Controller\\DbController::index'], null, null, null, false, false, null]],
        '/db/first' => [[['_route' => 'db.first', '_controller' => 'App\\Controller\\DbController::first'], null, null, null, false, false, null]],
        '/placeorder' => [[['_route' => 'app_place_order', '_controller' => 'App\\Controller\\PlaceOrderController::index'], null, null, null, false, false, null]],
        '/productss' => [[['_route' => 'app_productss', '_controller' => 'App\\Controller\\ProductssController::index'], null, null, null, false, false, null]],
        '/user/add' => [[['_route' => 'user.add', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
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
                .'|/user(?'
                    .'|/edit(?:/(\\d+))?(*:193)'
                    .'|(?:/(\\d+)(?:/(\\d+))?)?(*:223)'
                    .'|(*:231)'
                    .'|/(?'
                        .'|(\\d+)(*:248)'
                        .'|delete/([^/]++)(*:271)'
                        .'|update/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:339)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'user.edit', 'id' => '0', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'user.findby.pages', 'page' => '1', 'nb' => '12', '_controller' => 'App\\Controller\\UserController::userspage'], ['page', 'nb'], null, null, false, true, null]],
        231 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], [], null, null, true, false, null]],
        248 => [[['_route' => 'find.by', '_controller' => 'App\\Controller\\UserController::findby'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'user.delete', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        339 => [
            [['_route' => 'user.update', '_controller' => 'App\\Controller\\UserController::updateUser'], ['id', 'fullname', 'username', 'email', 'phone', 'password'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
