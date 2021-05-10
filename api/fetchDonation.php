<?php
	require_once("app\Controllers\DonationController.php");

    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    $donationController = new DonationController();
	$results = $donationController->show($params['id']);
	
	return $results;

	