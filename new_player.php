<?php include_once "include/dbconn.php"; ?>
<!doctype html>
<html lang="zxx">
<!--  36:22-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sports Managment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/slick-slider.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/smartmenus.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	<style>
	label{
		color: white;
	}
	
	</style>

</head>

<body class="home">
    <div class="ritekhela-wrapper">
		<?php include_once('include/top_head.php'); ?>
		<?php include_once('include/menu.php'); ?>
		
		<br><br><br><br><br><br>		
		 <div class="container">
			<div class="">
				<div class="col-md-12">
					<div class="ritekhela-fancy-title-two">
						<h2>Enroll your self is a player</h2>
					</div>
					
					<!--// new player  ModalBox //-->
					<div class="loginmodalbox">
					   <div class="modal-dialog modal-dialog-centered" role="document">
						  <div class="modal-content">
							 <div class="modal-body ritekhela-bgcolor-two">
								<h5 class="modal-title"> Enroll Please</h5>
								<form method="post" action="new_player.php" enctype="multipart/form-data">
									<div> 
										<label class="title">Name: </label>
										<input type="text" autofocus=""  name="name" placeholder="Enter Name" >
										
										<label class="title">Father Name: </label>
										<input type="text" name="f_name" placeholder="Enter Father Name" >
										
										<label class="title">Contact: </label>
										<input type="Number" max="0-9" name="contact" placeholder="contact" >
										
										<label class="title">Select Department: </label>
										<select name="deptt">
											<option>--Select department--</option>
											<?php
												$d_qry= "select * from department";
												$d_run= mysqli_query($con, $d_qry);
												while ($d_row= mysqli_fetch_array($d_run))
												{
													$d_id= $d_row['id'];
													$d_name= $d_row['department_name'];
													echo "<option value='$d_id'>$d_name</option>";
												}
											?>
										</select>
										
										<label class="title">Select Game: </label>
										<select name="game">
											<option>--Select Game--</option>
											<?php
												$g_qry= "select * from game";
												$g_run= mysqli_query($con, $g_qry);
												while ($g_row= mysqli_fetch_array($g_run))
												{
													$g_id= $g_row['id'];
													$g_name= $g_row['game_name'];
													echo "<option value='$g_id'>
													$g_name</option>";
												}
											?>
										</select> 

										<!--<label>Bowler Type:</label>
										<select name="bowler">
											<option>--Bowler Type--</option>
											<option>Right Arm Fast</option>
											<option>Left Arm Fast</option>
											<option>Right Arm Spin</option>
											<option>Left Arm Spin</option>
											<option>Nill</option>
										</select>

										<label>Batsman Type:</label>
										<select name="batsman">
											<option>--batsman Type--</option>
											<option>Left Arm Bat</option>
											<option>Right Arm Bat</option>
											<option>Nill</option>
										</select> -->

										<label>Select Image:</label>
										<input type="file" name="image">
										
										<label>Description:</label>
										<textarea class="form-control" name="description" rows="5" placeholder="Define Your Rule for team"></textarea>

										<br><br>
										<input type="submit" value="Register" name="submit" class="ritekhela-bgcolor">
									</div>
								</form>
							 </div>
						  </div>
					   </div>
					</div>
				</div>
			</div>
		</div>
    
		
		<?php include_once('include/footer.php'); ?>
		
    </div>


    <!-- jQuery -->
    <script src="script/jquery.js"></script>
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/slick.slider.min.js"></script>
    <script src="script/fancybox.min.js"></script>
    <script src="script/isotope.min.js"></script>
    <script src="script/smartmenus.min.js"></script>
    <script src="script/progressbar.js"></script>
    <script src="script/jquery.countdown.min.js"></script>
    <script src="script/functions.js"></script>
</body>


</html>
<?php
if (isset($_POST['submit'])) 
{
	$name= $_POST['name'];
	$f_name= $_POST['f_name'];
	$contact= $_POST['contact'];
	$department= $_POST['deptt'];
	$game= $_POST['game'];
	$bowler= $_POST['bowler'];
	$batsman= $_POST['batsman'];
	$description= $_POST['description'];

	$filename= $_FILES['image']['name'];
    $tempname= $_FILES['image']['tmp_name'];
    move_uploaded_file($tempname, "images/$filename");

	$qry= "INSERT INTO `new_player`(`game_id`, `department_id`, `name`, `f_name`, `contact`, `image`, `bowler_type`, `batsman_type`, `description`, `status`) VALUES ('$game','$department','$name','$f_name','$contact','$filename','$bowler','$batsman','$description','')";
	$run= mysqli_query($con, $qry);
	if($run)
	{
		echo "<script>alert('Submitted');</script>";
		echo "<script>window.open('new_player.php','_self');</script>";
	}
}


?>