<?php
    $results = require_once("api/fetchFunder.php");
    $funder = $results->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <title>Thank You Letter</title>
</head>
<body class="container" style="width: 60vw; margin-top: 3rem;">
    <div class="card">
        <div class="card-header">
				<h3>Thank You <?php echo $funder['name']?></h3>
		</div>
		<div class="card-body">
            Dear Sir/Madam
            <br/><br/>
            On behalf of SMU Advancement and Internalisation Office we'd like to express our sincere appreciation for your kind donation. This kind of donation goes a long way in helping misfortunate students uin
            need. Once again, many thanks for your kind act. <br/>
            <br/><br/>
            A letter of appreciation from the assisted student will follow promptly. 
            <br/><br/>
            Sincerely<br/>
            Chief Director<br/>
            SMU Advancement and Internalisation Office
        </div>

        <a href="show-funder.php?id=<?php echo $funder['id']?>" style="margin-top: 2rem;">
            <button class="btn btn-primary btn-block">Back</button>
        </a>
    </div>
</body>
</html>