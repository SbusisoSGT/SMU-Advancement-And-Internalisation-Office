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
			$result = $donationController->edit($_POST);
			
			if($result)
				$page = "all-donations.php";
			else{
				setcookie("error", "An error has occured! Please try again later.", time() + 2, '/');
				$page = "edit-donation.php?id=".$_POST['funder_id'];
			}					
		}else{
			setcookie("error", "Please fill in all required fields!");
			$page = "edit-donation.php".$_POST['funder_id'];
		}
		
		header("Location: http://localhost/SMU-Advancement-And-Internalisation-Office/".$page);
	}else{
		die("403 Forbidden!");
	}