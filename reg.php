<?php require_once 'connection_image.php'; ?>
<?php 
if(isset($_POST["submit"])){
	$name=$_POST['name'];
	if(empty($name)){
		echo "field is empty";
	}
	else{
		$sql="INSERT INTO tbl_try (name) VALUES('$name')";
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfully added!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>try somthing</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<form action=""  method=post >
	  <div class="form-row">
	  	<div class="col-md-3"></div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">name</label>
	      <input type="text" class="form-control" id="name" placeholder="Email" name="name" >
	    </div>
	   
	  <button type="submit" class="btn btn-primary " name="submit" id="submit">Sign in</button>
	</form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>