
  

 <!--update--> 
 <?php
require('connection.php');
?>
<?php
 //edit variable
if(isset($_GET['editid'])){

  $editid=$_GET['editid'];
  }
     elseif(isset($_POST['editid'])){
    $editid = $_POST['editid'];
    $fname=ucfirst(mysqli_real_escape_string($conn,$_POST['firstname']));
    $lname=ucfirst(mysqli_real_escape_string($conn,$_POST['lastname']));

    $query="UPDATE guest_tbl SET firstname='{$fname}',lastname='{$lname}'
    WHERE id=$editid";

    $result=mysqli_query($conn,$query) or die ("Query failed".mysqli_error($conn));
        header("Location:edit.php?editid=$editid&success=1");
}
  else{
    header("Location:guests.php");
  }

//sql statement
  $query="SELECT * FROM guest_tbl WHERE id=$editid";
   $result=mysqli_query($conn,$query) or die ("Query failed".mysqli_error($conn));
       while($row=mysqli_fetch_array($result)){
  $fname=$row['firstname'];
  $lname=$row['lastname'];
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
<body>

<div class="container-fluid">
  <div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6" style="background-color:grey;height:400px;width:100%; margin-bottom:30px;">
  <center><h3 style="color:black;font-weight:bold;">GUEST FORM</h3>


    <form action="edit.php" method="POST" name="guest_form" onsubmit="return validate()">
      <input type="hidden" value="<?php echo $editid;?>" name="editid"S></input>
      <label>first name</label><br>
      <input type="text" name="firstname" value="<?php echo $fname;?>"/><br>
      <label>last name</label><br>
      <input type="text" name="lastname" value="<?php echo $lname;?>"/><br><br>
      <label>password</label><br>
      <input type="text" name="password"/><br><br>
      <input type="submit" name="btn_guest" style="background-color: black; color:white;font-weight:bold;font-size:15px;" /><br>
      <a href="guests.php" class="btn btn-success">CLOSE</a>

    </form>

    <script>
   function validate() {
    var fname=document.guest_form.firstname.value;
    var lname=document.guest_form.lastname.value;
    if (fname=="") {
      alert('Please Enter firstname');
      return false;
    }
   if(lname==""){
    alert('Please enter lastname')
      return false;
   }
    
    return true;
 
    } 
 </script>

  </div>

  
  <div class="col-md-3"></div>
</div>

</div>

<!--CONTENT TABLE-->




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>