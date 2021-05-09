<?php
    require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\DonationController.php");

    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    $donationController = new DonationController();
	$results = $donationController->destroy($params['id']);

    header("Location: http://localhost/SMU-Advancement-And-Internalisation-Office/all-donations.php");
