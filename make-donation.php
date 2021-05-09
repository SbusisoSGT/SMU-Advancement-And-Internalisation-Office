<?php
    $results = require_once("api/fetchOneFunderDetails.php");
    $funder = $results->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <title>Store Funders Details</title>
</head>
<body class="container" style="display:flex; align-items: center; flex-direction: column; padding: 2rem;">
    
    <h1 class="header" style="margin-bottom: 2rem;">Make a Donation</h1>
    <?php
			if(isset($_COOKIE['success']))
				echo "<span class='alert alert-success'>".$_COOKIE['success']."</span>";
			else if(isset($_COOKIE['error']))
				echo "<span class='alert alert-danger'>".$_COOKIE['error']."</span>";
	?>
    <form action="api/saveDonation.php" method="post" style="width: 60vw; margin-top: 4rem">
        <input type="hidden" name="funder_id" value="<?php echo $funder['id']?>">
        
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $funder['name']?>" disabled>

        <label for="name" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $funder['email']?>" disabled>
        
        <label for="type">Type of Donation</label>
        <select name="type" class="form-control">
            <option value=>--Select Type of Donation</option>
            <option value="">Cash</option>
            <option value="">EFT</option>
            <option value="">Debit Order</option>
        </select>

        <label for="Description">Description</label>
        <textarea name="description" class="form-control"></textarea>
        <input type="submit" value="Donate" class="btn btn-primary btn-block" style="margin-top: 1rem">
    </form>
</body>
</html>

<style>

input{
    margin-bottom: 1rem;
}
</style>