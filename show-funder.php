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
    
    <h1 class="header" style="margin-bottom: 2rem;">Sbusiso</h1>
    <?php
        echo "<a href='make-donation.php?id=".$funder['id']."' style='align-self: flex-end; margin-bottom: 1rem;'>";
	?>	
        <button type="submit" class="btn btn-info">Make Donation</button>

	</a>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Numbers</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <th>Mercedes Benz SA</th>
                <th>info@mercedes.co.za</th>
                <th>0128376453</th>
                <th>
                <button type="submit" class="btn btn-primary">View</button>
                <button type="submit" class="btn btn-success">Update</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </th>
            </tr>
        </tbody>
    </table>
</body>
</html>