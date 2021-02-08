<?php
session_start();
if(isset($_SESSION['username'])){
header('location:manage.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<?php include'conn.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;500&display=swap" rel="stylesheet">
	</head>
	<style>
		*{
			font-family: "Times New Roman", Times, serif;
			box-sizing: border-box;

		}
		body, html {
  			height: 100%;
  			margin: 0;
		}
		.image{
			background-image: url("images/l8.jpg");
			filter: blur(7px);
			height: 100%; 
			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
		}
		.container{
				display: flex;
				width: 500px;
				justify-content: center;
				align-items: center;
				position: absolute;
				top: 40%;
				left: 50%;
				transform: translate(-50%, -50%);
				z-index: 2;
				width: 80%;
				padding: 20px;
		}
		.form-group{
				margin-top: 1vw;
				background: #003566;
				border: 5px solid #003566; 
				border-radius: 2vw;
				padding:0 5vw 0 5vw;
				opacity: 0.88;
				
		}
		input{
			margin: 10px auto;
		}
	</style>
	<body>
		<?php
		if(isset($_POST['submit'])){
			header('location:Aut_Login.php');
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
			$pass = password_hash($password, PASSWORD_BCRYPT);
			$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
			$usernamequery = "select * from registration where username = '$username' ";
			$query = mysqli_query($con, $usernamequery);
			$usernamecount= mysqli_num_rows($query);
			if($usernamecount>0){
		?>
		<script>
			alert('username already Exists!!!');
		</script>
		<?php
		}
		else{
		if($password === $cpassword){
			$insertquery = " INSERT INTO registration (username, password, cpassword) VALUES ('$username', '$pass', '$cpass') ";
			$iquery = mysqli_query($con, $insertquery);
		}
		else{
		?>
		<script>
			alert('Password didnot match');
		</script>
		<?php
		}
		}
		}
		?>
		<div class="image"> </div>
		<div class="container">
			<div class="form-group">
				<h1 style="font-size:2vw; text-align: center; color: white">Registration Form</h1>
				<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="text" name="username"   autocomplete="off" class="form-control" placeholder="Username" required  style="font-size:1.5vw;">
					
					
					
					
					<input type="password" name="password"   autocomplete="off" class="form-control" placeholder="Password" required  style="font-size:1.5vw;">
					<input type="password" name="cpassword"   autocomplete="off" class="form-control" placeholder="Confim Password" required  style="font-size:1.5vw;">
					
					
					<button type="submit" class="btn btn-primary" name="submit"  style="font-size:1.5vw;">Create Account</button>
					<div>
						<p style="font-size:1.5vw; color: white;">Already have an account? <a href="Aut_Login.php" style="text-decoration: none;" >Login here</a></p>
					</div>
					<div>
						<p style="font-size:1.7vw; color: red; font-weight: bold;"><i>Note : This *username will be your organization's name</i></p>
					</div>
					
					
				</form>
			</div>
		</div>
		
		
	</body>
</html>
