<?php
	//Constantes
	$configs = new HXPHP\System\Configs\Config;

	$configs->env->add('development');

	$configs->env->development->baseURI = '/sistema/';

	$configs->env->development->database->setConnectionData(array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => '',
		'dbname' => 'sistemahx'
	));

	$configs->env->development->auth->setURLs('/sistema/home/', '/sistema/login/');

	$configs->env->development->menu->setMenus(array(
		'Home/dashboard' => '%baseURI%/home',
		'Link/user' => 'http://www.google.com',
		'Submenus/cog' => array(
			'Painel/dashboard' => '%baseURI%/home',
			'Atualizações/hand-o-up' => '%baseURI%/atualizacoes'
		)
	), 'user');

	$configs->env->development->menu->setMenus(array(
		'Home/dashboard' => '%baseURI%/home'
	));

	$configs->env->development->menu->setConfigs(array(
		'container' => 'nav',
		'container_class' => 'navbar navbar-default',
		'menu_class' => 'nav navbar-nav'
	));

	$configs->env->add('production');

	$configs->env->production->baseURI = '/';

	$configs->env->production->database->setConnectionData(array(
		'host' => 'localhost',
		'user' => 'hxphp190_sistema',
		'password' => '^EKI1LK(&kV[',
		'dbname' => 'hxphp190_sistemahx'
	));

	$configs->env->production->auth->setURLs('/home/', '/login/');

	return $configs;
