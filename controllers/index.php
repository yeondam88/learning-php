<?php

$tasks = $app['database']->selectAll('todo');

require 'views/index.view.php';