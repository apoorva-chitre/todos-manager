<?php 



return [


	'database' => [

		'name' => 'myTasks',

		'username' => 'root',

		'password' => '',

		'connection' => 'mysql:host=localhost' ,

		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

		]

	]

];