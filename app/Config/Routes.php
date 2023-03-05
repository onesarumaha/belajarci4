<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('create-db', function() {
    $forge = \Config\Database::forge();
    if($forge->createDatabase('yuknikah'))
    {
        echo "Database Create";
    }
});    
// URL HOME
$routes->get('/', 'Home::index');
// URL defoul
$routes->get('gawe', 'Gawe::index');
// URL MENUJU TAMBAH
$routes->get('gawe/add', 'Gawe::create');
// URL ECTION TAMBAH DATA
$routes->post('gawe', 'Gawe::store');
// URL MENUJU EDIT DATA
$routes->get('gawe/edit/(:any)', 'Gawe::edit/$1'); 
// URL ECTION EDIT
$routes->put('gawe/(:any)', 'Gawe::update/$1'); 
// URL ECTION hapus
$routes->delete('gawe/(:segment)', 'Gawe::destroy/$1'); 



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
