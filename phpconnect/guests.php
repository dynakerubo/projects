<?php
 require ("connection.php");

?>

 <?php
  if(isset($_POST['btn_guest'])){

     //FORM VARIABLES
    $fname=ucfirst(mysqli_real_escape_string($conn,$_POST['firstname']));
    $lname=ucfirst(mysqli_real_escape_string($conn,$_POST['lastname']));
    //$password=md5($_POST['password']);

   //sql statement
    $query="INSERT INTO guest_tbl(firstname,lastname)VALUES('{$fname}','{$lname}')";
     //connecting
    $result=mysqli_query($conn,$query);
    header("Location:guests.php");
 }
   //DELETE FORM
    if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];  
    $query="DELETE FROM guest_tbl WHERE id=$id";
    $result=mysqli_query($conn,$query);
    header("Location:guests.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body style="background-color:grey;">


<div class="container-fluid"  style="background-color:white;height:400px;border-radius:10px;width:500px; margin-bottom:30px;">
  
   
  <center><h3 style="color:black;font-weight:bold;">GUEST FORM</h3>


    <form action="guests.php" method="POST" name="guest_form" onsubmit="return validate()">
      <label>first name</label><br>
      <input type="text" name="firstname" class="form-control" placeholder="Enter your first name" /><br>
      <label>last name</label><br>
      <input type="text" name="lastname"  class="form-control" placeholder="Enter your last name" /><br><br>
      <label>password</label><br>
      <input type="password" name="password"  class="form-control" placeholder="Enter your password" /><br><br>
      <input type="submit" name="btn_guest" style="background-color: black; color:white;font-weight:bold;font-size:15px;" /><br>
     
    </form>

    <script>
   function validate() {
    var fname=document.guest_form.firstname.value;
    var lname=document.guest_form.lastname.value;
    if (fname=="") {
      alert('Please Enter fname');
      return false;
    }
   
    else {
    return true;
  }
    } 
 </script>

  </div>

  
</div>


<!--CONTENT TABLE-->
<div class="container-fluid">
 <div class="row">
 <div class="col-md-2"></div>

  <div class="col-md-6" style="background-color:pink;width:100%;margin: 0px;">
 <h3 style="text-align: center;color:black;font-weight:bold;">GUESTS LIST AFTER REGISTRATION</h3>
<table class="table">
  <thead>
      <tr>
        <th style="color:white;">id</th>
        <th style="color:white;">First name</th>
        <th style="color:white;">Last name</th>
        <th style="color:white;">Action</th>
     </tr>    
  </thead>

  <tbody>
    <?php
    $query="SELECT * FROM guest_tbl";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)) {
      echo '
      <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['firstname'].'</td>
      <td>'.$row['lastname'].'</td>
      
      <td><a href="guests.php?deleteid='.$row['id'].'" class="btn  btn-danger"  onclick="return confirm(\'Delete?\')">DELETE</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
      <a href="edit.php?editid='.$row['id'].'" class="btn  btn-success">Edit</a>
      </td>
      </tr>';

    }
   ?>
  </tbody>
</table>
</div>
 <div class="col-md-4"></div>
  </div>
  
  </div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>