<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Define the routes here where 
//  ------- First "book" is URL's Name
//  ------- Second "Book" is CONTROLLER'S Name
//  ------- Third "Index" is the Method Name
$routes->get('/book/list', 'Book::index');
$routes->get('/book/create', 'Book::create');
$routes->post('/book/create', 'Book::create');
