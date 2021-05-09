<?php
    require_once("api/fetchAllDonations.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <title>All Donations</title>
</head>
<body class="container" style="display:flex; align-items: center; flex-direction: column; padding: 2rem;">
    
    <h1 class="header" style="margin-bottom: 2rem;">Donations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Funder</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($donation = $results->fetch_assoc()){
            
                echo "<tr>";
                    echo "<th>".($donation['id'])."</th>";
                    echo "<td>".($donation['name'])."</td>";
                    echo "<td>".$donation['type']."</td>";
                    echo "<td>".$donation['description']."</td>";
                    echo "<td>".$donation['timestamp']."</td>";
                    echo "<td>";
                    echo "<a href='edit-donation.php?id=".$donation['id']."' style='margin-right: .5rem'>
                            <button type='submit' class='btn btn-warning'>Edit</button>
                        </a>";
                    echo "<a href='api/deleteDonation.php?id=".$donation['id']."' style='margin-right: .5rem'>
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </a>";
                    echo "</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
<style>
    form button{
        margin-right: .5rem;
    }

</style>
