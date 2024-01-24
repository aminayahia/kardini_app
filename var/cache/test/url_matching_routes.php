<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/listeclient' => [[['_route' => 'app_listeclient', '_controller' => 'App\\Controller\\AdminController::clients'], null, null, null, false, false, null]],
        '/admin/listevendeur' => [[['_route' => 'app_listevendeur', '_controller' => 'App\\Controller\\AdminController::vendeurs'], null, null, null, false, false, null]],
        '/admin/listereclamations' => [[['_route' => 'app_listereclamations', '_controller' => 'App\\Controller\\AdminController::reclamations'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/seller' => [[['_route' => 'app_seller', '_controller' => 'App\\Controller\\SellerController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
