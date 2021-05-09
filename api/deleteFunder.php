<?php
    require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\FunderController.php");

    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    $funderController = new FunderController();
	$results = $funderController->destroy($params['id']);

    header("Location: http://localhost/SMU-Advancement-And-Internalisation-Office/all-funders.php");
