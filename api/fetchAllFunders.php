<?php
	require_once("app\Controllers\FunderController.php");
	
    $funderController = new FunderController();
	$results = $funderController->index();
		
	return $results;
	