<?php 

include "./class/userClass.php";

if (isset($_POST['submit'])) {
	$user = new UserClass($_POST['username'], $_POST['password']);
	$user->login();
	$user->getData();
}


 ?>


<!DOCTYPE html>
	<html lang="en">
 	<head>
 		<!-- Page title -->
   		<title>George | Login page</title>
   		<!-- meta tags -->
   		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1">

   		<!--  link & cdn's || bootstrap css -->
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   		<!-- style.css -->
   		<link rel="stylesheet" type="text/css" href="css/style.css">
   		<!-- jQuery -->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   		<!-- popper -->
   		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   		<!-- bootstrap js -->
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 	</head>
 	<body>

 		<div class="container">
 			<div class="col-md-6 offset-md-3 border">
 				<div class="col-md-12 text-center">
 					<h1>login</h1>
 					<hr style="min-height: 3px;">
 				</div>
 				<form method="POST" >
 					<div class="form-group">
 						<small>Enter username.</small>
 						<input type="text" name="username" class="form-control" placeholder="username">
 					</div>
 					<div class="form-group">
 						<small>Enter password</small>
 						<input type="password" name="password" class="form-control" placeholder="password">
 					</div>
 					<div class="form-group">
 						<button class="btn btn-block btn-success" name="submit">login</button>
 					</div>
 				</form>
 				
 			</div>
 		</div>

 		

 		<!-- link js scripts -->
 		<script src="./js/main.js"></script>
 	</body>
 </html>