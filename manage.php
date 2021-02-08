<!-- <?php?> -->
<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:Aut_Login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			*{
				font-family: "Times New Roman", Times, serif;
			}
			.main_div{
				background-image: url('images/EMS1.jpeg');
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				height: 100vh;
				filter: blur(3px);
				background-attachment: fixed;
				position: sticky;
				top: 0;
				left: 0;
			}
			.second_div{
				margin-top: -85vh;
			}

			
			button.btn-block{
				font-size: 2vw;
				background: #0CAA17;
				color: white;
				margin-top: 4.5vh;
				border-radius: 3vw;
			}
			button.btn-block:hover{
				background: white;
				color: red;
				text-decoration: none;
				box-shadow: 1vw 1vw 2vw black;
			}
			.btn-danger{
				font-size: 1.5vw;
				margin-top: 2vh;
			}

			
		</style>
	</head>
	<body>
		<div class="main_div"></div>
		<div class="container-fluid second_div">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 opt">
					<?php
					include'conn.php';
					$username = $_SESSION['username'];

					$usernamequery = "select * from cc where name = '$username' ";
					$usernamequery1 = "select * from restaurants where name = '$username' ";
					$usernamequery2 = "select * from photographer where username = '$username' ";
					$usernamequery3 = "select * from seminar where name = '$username' ";

					$query = mysqli_query($con, $usernamequery);
					$query1 = mysqli_query($con, $usernamequery1);
					$query2 = mysqli_query($con, $usernamequery2);
					$query3 = mysqli_query($con, $usernamequery3);

					$usernamecount= mysqli_num_rows($query);
					$usernamecount1= mysqli_num_rows($query1);
					$usernamecount2= mysqli_num_rows($query2);
					$usernamecount3= mysqli_num_rows($query3);

					if($usernamecount>0){
							?>
							<div>
								<a href="Personal_Profile_CC.php?CC_Name=<?php echo $_SESSION['username'] ?>" style="text-decoration: none;"><button class="btn btn-block">Community Centre</button>
							</div>
						
						<?php
						}
						else{
							?>
							<div>
							<a href="ReqAs_Community_Centre.php" style="text-decoration: none;"><button class="btn btn-block">Community Centre</button>
						</div>
							<?php
						}
					?>
					<?php
					if($usernamecount1>0){
							?>
							<div>
								<a href="Personal_Profile_Restaurant.php?Restaurant=<?php echo $_SESSION['username'] ?>" style="text-decoration: none;"><button class="btn btn-block">Restaurant</button>
							</div>
						
						<?php
						}
						else{
							?>
							<div>
							<a href="ReqAs_Restaurant.php" style="text-decoration: none;"><button class="btn btn-block">Restaurant</button>
						</div>
							<?php
						}
					?>








					<?php
					if($usernamecount2>0){
							?>
							<div>
								<a href="Personal_Profile_Photography.php?people=<?php echo $_SESSION['username'] ?>" style="text-decoration: none;"><button class="btn btn-block">Photography</button>
							</div>
						
						<?php
						}
						else{
							?>
							<div>
							<a href="ReqAs_Photography.php" style="text-decoration: none;"><button class="btn btn-block">Photography</button>
						</div>
							<?php
						}
					?>







					<?php
					if($usernamecount3>0){
							?>
							<div>
								<a href="Personal_Profile_Seminar.php?venue=<?php echo $_SESSION['username'] ?>" style="text-decoration: none;"><button class="btn btn-block">Seminar</button>
							</div>
						
						<?php
						}
						else{
							?>
							<div>
							<a href="ReqAs_Seminar.php" style="text-decoration: none;"><button class="btn btn-block">Seminar</button>
						</div>
							<?php
						}
					?>



					<div><a href="Aut_Logout.php" style="text-decoration: none;"><button class="btn btn-danger">Logout</button></div>
				</div>
				<div class="col-2"></div>
			</div>
		</div>
		
	</body>
</html>