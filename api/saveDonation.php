<?php
	session_start();
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\DonationController.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(
			!empty($_POST['type']) && 
			!empty($_POST['description']) && 
			!empty($_POST['funder_id'])
		){
			$donationController = new DonationController();
			$result = $donationController->store($_POST);
			
			if($result){
				$name = "success";
				$message = "Donation successfully made!";
			}else{
				$name = "error";
				$message = "An error has occured! Please try again later.";
			}					
		}else{
			$name = "error";
			$message = "Please fill in all required fields!";
		}
		
		setcookie($name, $message, time() + 2, '/');
		header("Location: http://localhost/SMU-Advancement-And-Internalisation-Office/make-donation.php");
	}else{
		die("403 Forbidden!");
	}