<?php

use WebServer\Core\Session;
use WebServer\Core\Router;

include '../vendor/autoload.php';

Session::start();
$router = new Router();

