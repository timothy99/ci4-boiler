<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Home::index");
$routes->get("/home", "Home::index");
$routes->get("/home/home", "Usr\Home::home");
$routes->get("/member", "Usr\Member::index");
$routes->get("/member/myinfo", "Usr\Member::myinfo");
$routes->get("/member/login", "Usr\Member::login");
$routes->get("/member/join", "Usr\Member::join");