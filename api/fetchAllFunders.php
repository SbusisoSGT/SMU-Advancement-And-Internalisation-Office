<?php
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\FunderController.php");

    
    $funderController = new FunderController();
	$results = $funderController->index();
		
	return $results;
	