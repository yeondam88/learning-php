<?php

$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUSET_URI'], '/');

require Router::load('routes.php')->direct(Request::uri());
