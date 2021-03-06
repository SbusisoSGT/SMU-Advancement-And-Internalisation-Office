<?php
    require_once("api/fetchAllFunders.php");
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
    
    <h1 class="header" style="margin-bottom: 2rem;">Funders</h1>
    <a href="add-funder.php" style="align-self: flex-end; margin-bottom: 1rem;">
		<button type="submit" class="btn btn-info">Add Funder</button>
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
        <?php
            while($funder = $results->fetch_assoc()){
            
                echo "<tr>";
                    echo "<td>".($funder['id'])."</td>";
                    echo "<td>".$funder['name']."</td>";
                    echo "<td>".$funder['email']."</td>";
                    echo "<td>".$funder['mobile_numbers']."</td>";

                    echo "<td>";
                    echo "<a href='show-funder.php?id=".$funder['id']."' style='margin-right: .5rem'>
                            <button type='submit' class='btn btn-success'>View</button>
                        </a>";
                    echo "<a href='edit-funder.php?id=".$funder['id']."' style='margin-right: .5rem'>
                            <button type='submit' class='btn btn-warning'>Edit</button>
                        </a>";
                    echo "<a href='api/deleteFunder.php?id=".$funder['id']."' style='margin-right: .5rem'>
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
