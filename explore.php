<!-- <?php?> -->
<?php
// session_start();
// if(!isset($_SESSION['username'])){
// header('location:login.php');
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			*{
				font-family: "Times New Roman", Times, serif;
			}
			.main_div{
				background-image: url('images/explore.jpg');
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
				background: #2067E4;
				color: white;
				margin-top: 4.5vh;
				border-radius: 3vw;
			}
			button.btn-block:hover{
				background: white;
				color: #0CAA17;
				text-decoration: none;
				box-shadow: 1vw 1vw 2vw black;
			}
			
		</style>
	</head>
	<body>
		<div class="main_div"></div>
		<div class="container-fluid second_div">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 opt">
					<div><a href="CC_Feed.php" style="text-decoration: none;"><button class="btn btn-block">Community Centre</button></div>
					<div><a href="FeedRestaurant.php" style="text-decoration: none;"><button class="btn btn-block">Restaurant</button></div>
					<div><a href="FeedPhotography.php" style="text-decoration: none;"><button class="btn btn-block">Photography</button></a></div>
					<div><a href="FeedSeminar.php" style="text-decoration: none;"><button class="btn btn-block">Seminar</button></div>
				</div>
				<div class="col-2"></div>
			</div>
		</div>
		
	</body>
</html>