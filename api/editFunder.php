<?php
	session_start();
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\FunderController.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(
			!empty($_POST['name']) && 
			!empty($_POST['email']) && 
			!empty($_POST['mobileNumbers'])
		){
			$funderController = new FunderController();
			$result = $funderController->edit($_POST);
			
			if($result){
				$name = "success";
				$message = "Funder's details successfully updated!";
			}else{
				$name = "error";
				$message = "An error has occured! Please try again later.";
			}					
		}else{
			$name = "error";
			$message = "Please fill in all required fields!";
		}
		
		setcookie($name, $message, time() + 2, '/');
		header("Location: http://localhost/SMU-Advancement-And-Internalisation-Office/edit-funder.php?id=".$_POST['id']);
	}else{
		die("403 Forbidden!");
	}