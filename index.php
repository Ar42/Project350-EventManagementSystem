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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			*{
			font-family: "Times New Roman", Times, serif;
		}
		html{
			scroll-behavior: smooth;
		}
		
		#glow {
			/*color: #fff;*/
			text-align: center;
			-webkit-animation: glow 1s ease-in-out infinite alternate;
			-moz-animation: glow 1s ease-in-out infinite alternate;
			animation: glow 1s ease-in-out infinite alternate;
			}
			@-webkit-keyframes glow {
			from {
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
			}
			
			to {
			text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
			}
			}

			#glow1 {
			/*color: #fff;*/
			text-align: center;
			-webkit-animation: glow1 1s ease-in-out infinite alternate;
			-moz-animation: glow1 1s ease-in-out infinite alternate;
			animation: glow1 1s ease-in-out infinite alternate;
			}
			@-webkit-keyframes glow1 {
			from {
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #4052D3, 0 0 40px #4052D3, 0 0 50px #4052D3, 0 0 60px #4052D3, 0 0 70px #4052D3;
			}
			
			to {
			text-shadow: 0 0 20px #fff, 0 0 30px #2135CB, 0 0 40px #2135CB, 0 0 50px #2135CB, 0 0 60px #2135CB, 0 0 70px #2135CB, 0 0 80px #2135CB;
			}
			}

		
		footer {
			text-align: center;
			padding: 3px;
			margin: 2vw;
			background-color: red;
			color: white;
			font-size: 1.5vw;
		}
		.first{
			background-image: url(images/EMS1.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		/*.menus:hover{
			border-style: solid;
			border-color:  #55EF17;
		}*/
		a{
			text-decoration: none;
			color: white;
		}
		.menus{
			margin: .8vw;
			font-size: 1.5vw;
			border-style: solid;
			border-color:  black  ;
		}
		.menus:hover{
			background: white;
			color: red;
			border-radius: 3vw;
			/*border-color:  black black  #55EF17 black ;*/
			
		}
		.md1{
			/*background: #20E9E9;*/
			background: linear-gradient(#3FDAEC, #3F5DEC, #000);
			/*background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(79,208,216,0.3322876887534981) 0%, rgba(0,67,255,0.6397503753206624) 11%, rgba(0,212,255,0.6785563454699161) 100%, rgba(144,158,204,1) 100%);*/
			width: 100vw;
			height: 100vh;
			clip-path: polygon(0 0, 100% 0, 100% 63%, 50% 100%, 0 61%);
			/*clip-path: polygon(0 0, 100% 0%, 100% 67%, 0% 100%);*/
			margin-bottom: 1vw;
		}
		p.welcome_text{
			margin: 7.25vw;
			font-size: 2.5vw;
		}
		.btn {
		background: #000;
		color: #fff;
		border-radius: 6vw;
		margin-right: 1vw;
		}
		.btn:hover {
		background: #55EF17  ;
		
		}
		.direction{
			margin-top: 4vw;
			color: white;
		}
		.myDIV p{
			font-size: 1.5vw;
		}

		.myDIV {
		  margin-top: 1vw;
		  width: 10vw;
		  height: 10vh;
		  /*background-color: #53D113;*/
		  background: linear-gradient(#BC3BD3, #624867);
		  color: white;
		  animation: mymove 5s infinite;
		}

		@keyframes mymove {
		  50% {box-shadow: 10px 20px 30px black;}
		}

		.myDIV1 p{
			font-size: 1.5vw;
		}

		.myDIV1 {
		  margin-top: 1vw;
		  width: 10vw;
		  height: 10vh;
		  /*background-color: #53D113;*/
		  background: linear-gradient(#BC3BD3, #624867);
		  color: white;
		  animation: mymove1 5s infinite;
		}

		@keyframes mymove1 {
		  50% {box-shadow: 10px 20px 30px black;}
		}
		.txt {
			padding: 2vw;
			border-radius: 6vw;
			background: #000;
			color: #FFF;
		    text-shadow: 0 .03vw 0 #ccc,
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

		.fa {
		  padding: 1vw;
		  font-size: 1.5vw;
		  width: 3.2vw;
		  text-align: center;
		  text-decoration: none;
		  margin: 3vw 1vw;
		  border-radius: 50%;
		}
		.items6{
			margin: 0 7vw;
		}

		.fa:hover {
		    opacity: 0.7;
		}

		.fa-facebook {
		  background: #3B5998;
		  color: white;
		}

		.fa-twitter {
		  background: #55ACEE;
		  color: white;
		}

		.fa-youtube {
		  background: #bb0000;
		  color: white;
		}

		.fa-instagram {
		  background: #f40083;
		  color: white;
		}
		.fa-google{
		  background: #B54E1E;
		  color: white;
		}

		
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg fixed-top  " style="background: #000">
				<a class="navbar-brand" href="#">
					<img src="images/EMS.gif" alt="logo" style="width:5vw;">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link menus" href="index.php">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="#section">Our Activities<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="#section2">Contact<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="explore.php">Explore<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="manage.php">Manage<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="Aut_Registration.php">SignUp/Login<span class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container-fluid">
			<div class="md1">
				<p class="welcome_text d-flex justify-content-center" id="glow" style="color:#fff;">Welcome to Event Management Systems</p>
				<!-- <div class="buttons d-flex justify-content-center align-items-center">
					<a href="explore.php" class="btn btn-success" role="button">Explore</a>
					<a href="manage.php" class="btn btn-success" role="button">Manage</a>
				</div>
				<div>
					<p class="direction d-flex justify-content-center"><i>*you can create/manage your team/company from <strong>MANAGE</strong> and can serach & contact Event Management teams from <strong>EXPLORE</strong></i></p>
				</div> -->
			<div class="container-fluid items6">
			<div class="row">
				<div class="col-4">
					<div class="myDIV">
						<p class="text-center">Marriage Ceremony</p>
					</div>
				</div>
				<div class="col-4">
					<div class="myDIV1">
						 <p class="text-center">Birthday Party</p>
					</div>
				</div>
				<div class="col-4">
					<div class="myDIV">
						 <p class="text-center">Seminar</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-4">
					<div class="myDIV">
						<p class="text-center">Get Together</p>
					</div>
				</div>
				<div class="col-4">
					<div class="myDIV1">
						 <p class="text-center">Catering Services</p>
					</div>
				</div>
				<div class="col-4">
					<div class="myDIV">
						 <p class="text-center">Photography</p>
					</div>
				</div>
			</div>  
		</div>
			</div>
		</div>
		<div class="container-fluid" id="section">
			<div class="d-flex justify-content-center">
					<h1 class="txt text-center " style="font-size: 1.5vw;">Our Activities</h1>
			</div>
			<!-- <p class="text-center" id="glow1" style=" font-size: 2.5vw;">Our Activities</p> -->
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/e1.jpg" alt="Los Angeles" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Party</h3>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/e5.jpg" alt="Chicago" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Marriage Ceremony</h3>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/e4.jpg" alt="New York" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Seminar</h3>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
		


		

		<div id="section2">
			<div class="container-fluid d-flex justify-content-center">
				<a href="https://www.facebook.com/ar.nob.9256" class="fa fa-facebook"></a>
				<a href="https://twitter.com/ArNob72012335?s=07" class="fa fa-twitter"></a>
				<a href="https://youtube.com/channel/UC3wefKCKerHsxtpRZo6JUxg" class="fa fa-youtube"></a>
				<a href="https://instagram.com/ar_nobbb?igshid=90q04wxd7umc" class="fa fa-instagram"></a>
				<!-- <a href="https://instagram.com/ar_nobbb?igshid=90q04wxd7umc" class="fa fa-google"></a> -->
			</div>
		</div>
		
		<div class="container-fluid">
			<footer>
				<p>Event Management System<br>Copyright © 2021 | Team MYSTIC <br>Mystic Web Development Team</p>
			</footer><br><br>
		</div>
		</body>
	</html>