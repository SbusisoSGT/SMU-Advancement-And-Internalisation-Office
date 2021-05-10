<?php
	session_start();
	require_once("..\app\Controllers\FunderController.php");

	if($_SERVER['REQUEST_METHOD'] == "POST" || isset($_POST['csrf'], $_SESSION['csrf']) || $_POST['csrf'] == $_SESSION['csrf']){
		if(
			!empty($_POST['name']) && 
			!empty($_POST['email']) && 
			!empty($_POST['mobileNumbers'])
		){
			$funderController = new FunderController();
			$result = $funderController->store($_POST);
			
			if($result){
				$name = "success";
				$message = "Funder's details successfully saved!";
			}else{
				$name = "error";
				$message = "An error has occured! Please try again later.";
			}					
		}else{
			$name = "error";
			$message = "Please fill in all required fields!";
		}
		
		setcookie($name, $message, time() + 2, '/');
		header("Location: http://localhost/SMU-Advancement-And-Internalisation-Office/add-funder.php");
	}else{
		die("403 Forbidden!");
	}