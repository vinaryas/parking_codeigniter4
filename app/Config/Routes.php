<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('rental', 'RentalController::index');
$routes->get('registration', 'RegistrationController::index');
$routes->post('registration/register', 'RegistrationController::register');
