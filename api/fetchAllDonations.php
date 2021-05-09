<?php
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\DonationController.php");

    
    $donationController = new DonationController();
	$results = $donationController->index();
		
	return $results;
	