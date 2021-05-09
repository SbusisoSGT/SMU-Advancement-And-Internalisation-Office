<?php
    require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Controllers\FunderController.php");
    $resultsDonation = require_once("api/fetchDonation.php");
     
    $donation = $resultsDonation->fetch_assoc();

    $funderController = new FunderController();
	$funder = $funderController->show($donation['funder_id'])->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <title>Edit Funders Details</title>
</head>
<body class="container" style="display:flex; align-items: center; flex-direction: column; padding: 2rem;">
    
    <h1 class="header" style="margin-bottom: 2rem;">Edit Donation</h1>
    <?php
			if(isset($_COOKIE['success']))
				echo "<span class='alert alert-success'>".$_COOKIE['success']."</span>";
			else if(isset($_COOKIE['error']))
				echo "<span class='alert alert-danger'>".$_COOKIE['error']."</span>";
	?>

    <form action="api/editDonation.php?id=<?php echo $funder['id']?>" method="post" style="width: 60vw; margin-top: 4rem">
        <input type="hidden" name="funder_id" value="<?php echo $funder['id']?>">

        <input type="hidden" name="id" value="<?php echo $donation['id']?>">
        
        <input type="hidden" name="timestamp" value="<?php echo $donation['timestamp']?>">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $funder['name']?>" disabled>

        <label for="name" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $funder['email']?>" disabled>
        
        <label for="type">Type of Donation</label>
        <select name="type" class="form-control" required>
            <option value=>--Select Type of Donation</option>
            <option value="cash">Cash</option>
            <option value="EFT">EFT</option>
            <option value="debit_order">Debit Order</option>
        </select>

        <label for="Description">Description</label>
        <textarea name="description" class="form-control" ><?php echo $donation['description']?></textarea>
        <input type="submit" value="Update" class="btn btn-primary btn-block" style="margin-top: 1rem">
    </form>
</body>
</html>

<style>

input{
    margin-bottom: 1rem;
}
</style>