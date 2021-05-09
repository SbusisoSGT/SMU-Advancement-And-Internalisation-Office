<?php
    $results = require_once("api/fetchFunder.php");
    $funder = $results->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <title>Show Funders Details</title>
</head>
<body class="container" style="display:flex; align-items: center; flex-direction: column; padding: 2rem;">
    
    <h1 class="header" style="margin-bottom: 2rem;"><?php echo $funder['name'] ?></h1>
    <h3 class="header">Donations</h3>
    <?php
        echo "<a href='make-donation.php?id=".$funder['id']."' style='align-self: flex-end; margin-bottom: 1rem;'>";
	?>	
        <button type="submit" class="btn btn-info">Make Donation</button>

	</a>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>

                <!-- <td>1</td>
                <td>EFT</td>
                <td>Some books and stuff</td>
                <td>09/May/2021</td> -->
            <tr>
                <td style="transform: translateX(50%)">No donations have been made</td>
            </tr>
        </tbody>
    </table>
</body>
</html>