<?php

$servername="localhost";
$username="root";
$password="";
$database="myguest_db";


//create connection
$conn= mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn){
	die("connection failed".mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html>
<head>
	<title> signup php form</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
<h3>signup form</h3>



			<form method="POST" action="index.php">
				<label>firstname</label><br>
				<input type="name" name="username" class="form-control"/><br>
				<label>lastname</label><br>
				<input type="name" name="username" class="form-control"/><br><br>
				<label>phone No:</label><br>
				<input type="name" name="username" class="form-control"/><br>
				<label>Date of birth</label><br>
				<input type="date" name="DOB"class="form-control"/><br>
				<label>gender</label><br>
				  <input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
            
				<input type="name" name="username" class="form-control"/><br>

					<label>password</label><br>
				<input type="name" name="username" class="form-control"/><br>
					<label>confirm password</label><br>
				<input type="name" name="username" class="form-control"/><br>
                <input type="submit" name="btn_submit_marks" class="btn  btn-success" style="background-color:yellow;color:black;" />
                 <input type="reset" name="btn_reset" class="btn  btn-success" style="background-color:green;margin-left:200px;" />
           </form>
			<?php
             if(isset($main_grade)) echo "<h2>The grade is $main_grade</h2>";
			?>

			

		</div>
	</div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>