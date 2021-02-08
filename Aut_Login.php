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
		<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;500&display=swap" rel="stylesheet">
	</head>
	<style>
		*{
			font-family: "Times New Roman", Times, serif;
		}
		body, html {
  			height: 100%;
  			margin: 0;
		}
		.image{
			background-image: url("images/l10.jpg");
			filter: blur(1px);
			height: 100%; 
			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
		}
		.txt {
			/*padding: 2vw;
			border-radius: 6vw;*/
			color: #FFF;
		    text-shadow: 0 .00vw 0 #ccc,
		               0 .06vw 0 #c9c9c9,
		               0 .09vw 0 #bbb,
		               0 .12vw 0 #b9b9b9,
		               0 .15vw 0 #aaa,
		               0 .24vw .1vw rgba(0,0,0,.1),
		               0 0 .1vw rgba(0,0,0,.1),
		               0 .05vw .05vw rgba(0,0,0,.3),
		               0 .05vw .05vw rgba(0,0,0,.2),
		               0 .02vw .05vw rgba(0,0,0,.25),
		               0 .05vw .05vw rgba(0,0,0,.2),
		               0 .01vw .01vw rgba(0,0,0,.15);
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
			height: 21vw;
			margin-top: 5vw;
			background: #001a33;
			border: 5px solid #001a33; 
			padding:0 5vw 0 5vw;
			border-radius: 2vw;
			opacity: 0.9;
		}
		input{
			margin: 1vw auto;
		}
		button.btn{
			margin-bottom: 1vw;
		}

	</style>
	<body>
		<?php
		include 'conn.php';
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$usernamesearch = " select * from registration where username='$username' ";
			$query = mysqli_query($con, $usernamesearch);
			$username_count = mysqli_num_rows($query);
			if($username_count){
				$username_pass = mysqli_fetch_assoc($query);


				$db_pass = $username_pass['password'];
				$_SESSION['username'] = $username_pass['username'];



				$pass_decode = password_verify($password, $db_pass);
				if($pass_decode){
					?>
					<script>
						alert('Login Successful');
						location.replace("manage.php");
					</script>
					<?php
				}

				else{
					?>
					<script>
						alert('Incerroect Password!');
					</script>
					<?php
				}
			}
			else{
				?>
					<script>
						alert('Invalid username!');
					</script>
					<?php

			}

		}


		?>
		
		<div class="image"> </div>
		<div class="container">
			<div class="form-group">
				<h1 class="txt text-center" style="font-size:2vw;">Login</h1>
				
				<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					
					<input type="text" name="username"   autocomplete="off" class="form-control" placeholder="username" required style="font-size:1.5vw;">
					
					<input type="password" name="password"   autocomplete="off" class="form-control" placeholder="Password" required style="font-size:1.5vw;">

					<button type="submit" class="btn btn-primary" name="submit" style="font-size:1.5vw;">Login</button>
					<div>
						<p style="font-size:1.7vw; color: white;">Not have an account? <a href="Aut_Registration.php" style="text-decoration: none">Signup here</a></p>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>