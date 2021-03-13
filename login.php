<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="js/fontawesome.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="user" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pass" required>
            	   </div>
				<?php if(isset($_GET['error'])){
					echo "<script>alert('Username atau Password salah!');document.location.href='login.php';</script>";
                                }?>
            	</div>
            	<input type="submit" class="btn" value="Login" name="login">
            </form>
        </div>
    </div>
   <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
require "kdb.php";
if(isset($_POST['login'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$data = $kdb->query("SELECT * FROM admin_login WHERE username = '$user' AND password = '$pass'");
	if($data->num_rows > 0){
		session_start();
		$_SESSION['login'] = $user;
		header('location:admin/index.php');
	} else{
		header('location:login.php?error');
	}
}
?>
