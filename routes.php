<?php

$routes = [
	# Main page / Home
	''                  => [
		'redirect_to'   => 'controller/main_controller.php'
	],

	'hello'			    => [
		'redirect_to'   => 'controller/hello_controller.php',
		'callback'      => 'hello'
	],

	'hi'			    => [
		'redirect_to'   => 'controller/hello_controller.php',
		'callback'      => 'hi'
	],

	'converse'          => [
		'redirect_to'   => 'controller/converse_controller.php',
		'callback'      => 'converse'
	]
];