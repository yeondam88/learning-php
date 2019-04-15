<?php

$tasks = App::get('database')->selectAll('todo');
$users = App::get('database')->selectAll('users');

require 'views/index.view.php';