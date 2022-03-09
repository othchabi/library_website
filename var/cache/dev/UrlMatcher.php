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
        '/bookland/auteur' => [[['_route' => 'auteur_index', '_controller' => 'App\\Controller\\AuteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bookland/auteur/new' => [[['_route' => 'auteur_new', '_controller' => 'App\\Controller\\AuteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bookland/genre' => [[['_route' => 'genre_index', '_controller' => 'App\\Controller\\GenreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bookland/genre/new' => [[['_route' => 'genre_new', '_controller' => 'App\\Controller\\GenreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bookland/livre/filtrerlivredate' => [[['_route' => 'filtre_livre_dates', '_controller' => 'App\\Controller\\LivreController::listerEntreDeuxDate'], null, null, null, false, false, null]],
        '/bookland/livre' => [[['_route' => 'livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bookland/livre/new' => [[['_route' => 'livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bookland' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, true, false, null]],
        '/bookland/init' => [[['_route' => 'init', '_controller' => 'App\\Controller\\InitController::init'], null, null, null, false, false, null]],
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
                .'|/bookland/(?'
                    .'|auteur/([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                        .'|(*:221)'
                    .')'
                    .'|genre/([^/]++)(?'
                        .'|(*:247)'
                        .'|/edit(*:260)'
                        .'|(*:268)'
                    .')'
                    .'|livre/([^/]++)(?'
                        .'|(*:294)'
                        .'|/edit(*:307)'
                        .'|(*:315)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'auteur_show', '_controller' => 'App\\Controller\\AuteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'auteur_edit', '_controller' => 'App\\Controller\\AuteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'auteur_delete', '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'genre_show', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [
            [['_route' => 'livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
