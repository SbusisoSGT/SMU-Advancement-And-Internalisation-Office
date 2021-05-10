<?php
	require_once("app\Controllers\FunderController.php");

    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    $funderController = new FunderController();
	$results = $funderController->show($params['id']);
	
	return $results;

	