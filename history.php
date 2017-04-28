<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bill History</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/maincss.css" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
					<p>Bill History</p>
    <?php

		require('connect.php');
	
		$sql = "SELECT billName, billDate, billPayers, billPercent, billTotal FROM billhistory";
	
		$result = mysqli_query($connection, $sql);
	
		if ($result->num_rows > 0) {
   		 // output data of each row
    		while($row = $result->fetch_assoc()) {
       			 echo "Bill Name: " . $row["billName"]. "<br>" . "Date: " . $row["billDate"]. "<br>". "Payers: " . $row["billPayers"]. "<br>". "Percent per person: " .  $row["billPercent"]. "<br>". "Bill Total: " .  $row["billTotal"]. "<br>";
   			}
		} else {
    		echo "No Bills";
		}
	?>
                </div>
              </div>
              <div class="form-group last-row">
     
                <a href="menu.html" class="pull-right">Menu</a>
				<a href="index.html" class="pull-left">Sign Out</a>
              </div>
            </form>
        </div>
    </div>
</div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
