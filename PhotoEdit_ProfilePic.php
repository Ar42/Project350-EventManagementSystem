<?php
ob_start();
session_start();
if(!isset($_SESSION['username'])){
header('location:Aut_Login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<style>

		*{
			font-family: "Times New Roman", Times, serif;
		}
		.main-form{
			background: linear-gradient(#02aab0, #00cdac);
			font-size: 1.5vw;
			padding: 3vw;
			margin: auto;
			border-radius: 3vw;
			box-shadow: 5px 10px 8px 10px #888888;
		}
		.createtxttt{
			background: linear-gradient(#43cea2, #185a9d);
			margin-top: 2.5vw;
			margin-bottom: 3.5vw;
			
			color: #fff;
			font-size: 1.5vw;
			padding:.7vw 2vw .7vw 2vw;
			border-radius: 8vw;
			box-shadow: 5px 10px 8px 10px #888888;
		}
		.img{
			margin: 1vw;
		}
		input{
			font-size: 1.5vw;
		}
		.btn{
			margin-left: .7vw;
			background: red;
			color :#fff;
		}

		.btn:hover{
			background: #fff;
			color :red;
		}
	</style>
	<body>
		<div class="container-fluid">
			<form method="post" enctype="multipart/form-data">
				<?php
				ob_start();
					include 'conn.php';
					$ids = $_GET['id'];
					$showquery = " SELECT * FROM `photographer` WHERE id=${ids} ";
					$showdata = mysqli_query($con,$showquery);
					$arrdata = mysqli_fetch_array($showdata);
					if(isset($_POST['submit'])){
						$idupdate = $_GET['id'];
						
						$file= $_FILES['pp'];
						$filename = $file['name'];
						$filepath = $file['tmp_name'];
						$fileerror = $file['error'];
						
						$destfile = 'upload/'.$filename;
						move_uploaded_file($filepath, $destfile);


							$updatequery = " UPDATE `photographer` SET `pp`='$destfile' WHERE id=$idupdate ";
							header("location:Personal_Profile_Photography.php");
							$query=mysqli_query($con, $updatequery);
							ob_end_flush();
						
					}
					
				?>

				<div class="d-flex justify-content-center">
					<p align="center" class=" text-center createtxttt">Change Pictures</p>
				</div>

	
	
 				<div class="row">
					
					<div class="col-2"></div>
					<div class="col-8">
						<div class="main-form">
							
							<div class="form-inline ">
								<div class="form-group img">
									input type="file" name="pp" class="form-control" autocomplete="off"  placeholder=""  alue=""/>
								</div>
							</div>

							

							<button type="submit" name = "submit" class="btn btn-success" style="font-size: 1.5vw; margin-top: 1vw;">save change</button>
						</div>
					</div>
					<div class="col-2"></div>
				</div>

		   </form>
	   </div>
	</body>
</html>