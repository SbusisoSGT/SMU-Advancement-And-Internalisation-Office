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
    <title>Update Funders Details</title>
</head>
<body class="container" style="display:flex; align-items: center; flex-direction: column; padding: 2rem;">
    
    <h1 class="header" style="margin-bottom: 2rem;">Edit Funder</h1>
    <?php
			if(isset($_COOKIE['success']))
				echo "<span class='alert alert-success'>".$_COOKIE['success']."</span>";
			else if(isset($_COOKIE['error']))
				echo "<span class='alert alert-danger'>".$_COOKIE['error']."</span>";
	?>
    <form action="api/editFunder.php?id=<?php echo $funder['id']?>" method="post" style="width: 60vw; margin-top: 4rem">
        <input type="hidden" name="id" value="<?php echo $funder['id']?>">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $funder['name']?>" required>

        <label for="name" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $funder['email']?>" required>

        <label for="name" class="form-label">Mobile Numbers</label>
        <input type="text" name="mobileNumbers" class="form-control" value="<?php echo $funder['mobile_numbers']?>" required>
        <input type="submit" value="Update" class="btn btn-primary btn-block">
    </form>
</body>
</html>

<style>

input{
    margin-bottom: 1rem;
}
</style>