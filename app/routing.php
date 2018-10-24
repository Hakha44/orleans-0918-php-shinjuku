<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Article' => [
        ['index', '/products', 'GET'], // action, url, method
        ['add', '/article/add', ['GET', 'POST']], // action, url, method
        ['show', '/article/{id:\d+}', 'GET'], // action, url, method
        ['listByCategory', '/article/{category}', 'GET'], // action, url, method
//        ['delete', '/article/delete/{id:\d+}', 'GET'],
    ],

    'About' => [ // Controller
        ['index', '/about', 'GET'], //rajout du lien
    ],
    'Home' => [ // Controller
        ['index', '/', 'GET'], // action, url, method
        ['delete', '/home/delete/{id:\d+}', 'GET'],

   ],
    'Contact' => [ // Controller
        ['send', '/contact', ['GET', 'POST']], // action, url, method
    ],
];
