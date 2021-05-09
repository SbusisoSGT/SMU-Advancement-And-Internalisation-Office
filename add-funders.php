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
    
    <h1 class="header" style="margin-bottom: 2rem;">Add Funder</h1>
    <?php
			if(isset($_COOKIE['success']))
				echo "<span class='alert alert-success'>".$_COOKIE['success']."</span>";
			else if(isset($_COOKIE['error']))
				echo "<span class='alert alert-danger'>".$_COOKIE['error']."</span>";
	?>
    <form action="api/saveFundersDetails.php" method="post" style="width: 60vw; margin-top: 4rem">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>

        <label for="name" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>

        <label for="name" class="form-label">Mobile Numbers</label>
        <input type="text" name="mobileNumbers"class="form-control" required>
        <input type="submit" value="Submit" class="btn btn-primary btn-block">
    </form>
</body>
</html>

<style>

input{
    margin-bottom: 1rem;
}
</style>