<?php

/**
 * Start session if not already started 
 */
if (!isset($_SESSION)) session_start();

// Load enviroment varibles 
require_once __DIR__ . '/../app/config/_env.php';
require_once __DIR__ . '/../app/routing/routes.php';

new \App\RouteDispatcher($router);
