<?php
	require_once("app\Controllers\DonationController.php");

    
    $donationController = new DonationController();
	$results = $donationController->index();
		
	return $results;
	