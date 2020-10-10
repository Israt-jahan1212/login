<?php
session_start();
require_once 'connection.php';
if(isset($_POST["login_user"])){
	$user=$_POST["uname"];
	$password=$_POST["pass1"];
	$sql="SELECT * FROM login WHERE username='$user' AND pass='$password'";
   $result=Mysqli_query($conn,$sql);
   echo "submit";
   if($result==TRUE){
   $_SESSION["uname"] = "$user";
   	header("location:welcome.php");
   }

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
	<div class="card  text-center col-md-6 col-sm-2">
	  <div class="card-header">Login Form</div>
	  <div class="card-body">
	  	<form action="" method="post"  autocomplete="off">                        
						
                               <input class="form-control" name="uname" type="text" placeholder="User name" value="" required>
							   <input class="form-control" name="pass1" type="password" placeholder="Password" required>
							   <button type="submit"   name="login_user" class="btn btn-primary">Login Now</button>
							   <p class="text-right">Forgot password? <a href="#">Recover now</a></p>
                            
                        </form>
	  </div>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>