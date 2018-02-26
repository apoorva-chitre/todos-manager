<?php

$tasks = $app['database']->selectAll('myTasks.tasks');

require 'views/index.view.php';