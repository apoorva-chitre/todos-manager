<?php

$tasks = $query->selectAll('myTasks.tasks');

require 'views/index.view.php';