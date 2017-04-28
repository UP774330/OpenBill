<?php
	
	require('connect.php');
    /* Enters the data the user inputs into the database, saving the created bill. */
    if(isset($_POST) & !empty($_POST)){
			$billName = mysqli_real_escape_string($connection, $_POST['billName']);
			$totalCost = mysqli_real_escape_string($connection, $_POST['totalCost']);
			$date = mysqli_real_escape_string($connection, $_POST['dueDate']);
			$payers = mysqli_real_escape_string($connection, $_POST['payers']);
			$percent =  mysqli_real_escape_string($connection, $_POST['percentage']);

        $query = "INSERT INTO "; /* Not sure what to put to finish this line, need database information */
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "The bill was saved";
        }else{
            $fmsg ="Failed to save bill";
        }
    }
	
	/* Temp variables for html format */
	
	$total = $_POST['totalCost'];
	$name = $_POST['billName'];
	$date = $_POST['dueDate'];
	$payers = $_POST['payers'];
	$percent = $_POST['percentage'];
	
	$x = ($total / 100) * $percent;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Bill Confirmation</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/maincss.css" rel="stylesheet">
 
   
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <div class="row login">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
            <form role="form">
              <div class="form-group text-center">
                <div class="logo">
                    <p>Open Bill</p>
					<p>You have successfully created a new bill <p>
                    <p>Your new bill: <?php echo $name; ?> is a due on the <?php echo $date; ?></p>
                    <p>Spilt between <?php echo $payers; ?> people at a percentage of <?php echo $percent; ?>% each </p>
                    <p>This comes to an amount of £<?php echo $x; ?> per person. </p>
					
                </div>
				<div>
					
              </div>
			  <div class="form-group">
                <a class="btn btn-default btn-lg btn-block btn-success"href="#">Pay Bill Now</a>
              </div>
			  <div class="form-group">
                <a class="btn btn-default btn-lg btn-block btn-success"href="savebill.html">Pay Bill Later</a>
              </div>
			  <div class="form-group">
                <a class="btn btn-default btn-lg btn-block btn-success"href="emailbill.html">Email Bill</a>
              </div>
			  <div class="form-group last-row">
                <a href="menu.html" class="pull-right">Menu</a>
				<a href="index.html" class="pull-left">Sign Out</a>
              </div>
              
            </form>
        </div>
    </div>
</div>
 
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

