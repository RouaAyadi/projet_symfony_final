<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_db' => [[], ['_controller' => 'App\\Controller\\DbController::index'], [], [['text', '/db']], [], [], []],
    'db.first' => [[], ['_controller' => 'App\\Controller\\DbController::first'], [], [['text', '/db/first']], [], [], []],
    'app_place_order' => [[], ['_controller' => 'App\\Controller\\PlaceOrderController::index'], [], [['text', '/placeorder']], [], [], []],
    'app_productss' => [[], ['_controller' => 'App\\Controller\\ProductssController::index'], [], [['text', '/productss']], [], [], []],
    'user.add' => [[], ['_controller' => 'App\\Controller\\UserController::addUser'], [], [['text', '/user/add']], [], [], []],
    'user.edit' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\UserController::editUser'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/user/edit']], [], [], []],
    'user.findby.pages' => [['page', 'nb'], ['page' => '1', 'nb' => '12', '_controller' => 'App\\Controller\\UserController::userspage'], ['page' => '\\d+', 'nb' => '\\d+'], [['variable', '/', '\\d+', 'nb', true], ['variable', '/', '\\d+', 'page', true], ['text', '/user']], [], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'find.by' => [['id'], ['_controller' => 'App\\Controller\\UserController::findby'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/user']], [], [], []],
    'user.delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/delete']], [], [], []],
    'user.update' => [['id', 'fullname', 'username', 'email', 'phone', 'password'], ['_controller' => 'App\\Controller\\UserController::updateUser'], [], [['variable', '/', '[^/]++', 'password', true], ['variable', '/', '[^/]++', 'phone', true], ['variable', '/', '[^/]++', 'email', true], ['variable', '/', '[^/]++', 'username', true], ['variable', '/', '[^/]++', 'fullname', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/update']], [], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
];
