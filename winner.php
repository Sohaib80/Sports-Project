<?php
include_once 'include/dbconn.php';
?>
<!doctype html>
<html lang="zxx">
<!-- all-fixture40:10-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SMS</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/slick-slider.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/smartmenus.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="home">
    <div class="ritekhela-wrapper">
		<?php include_once('include/top_head.php'); ?>
		<?php include_once('include/menu.php'); ?>
		<?php //include_once('include/slider.php'); ?>
        
        <!--// SubHeader //-->
        <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Winners</h1>
                        <ul class="ritekhela-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Winners</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader //-->

        <!--// Content //-->
        <div class="ritekhela-main-content">

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">
                        <!--// Full Section //-->
                        <div class="col-md-12">
                            
                            <!--// Fancy Title //-->
                            <div class="ritekhela-fancy-title">
                                <div class="ritekhela-fancy-title-inner">
                                    <h2>Winners List</h2>
                                </div>
                            </div>
                            <!--// Fancy Title //-->

                            <!--// Fixture All Matches //-->
                            <div class="ritekhela-fixture ritekhela-matches-list">
                                <ul>
<?php
$select = "SELECT * FROM `match_shedules` where match_status='Completed'";
$run = mysqli_query($con, $select);
while ($row = mysqli_fetch_array($run)) 
{
    $id= $row['id'];
    $team1 = $row['team_one'];
    $team2 = $row['team_two'];
    $date = $row['match_date'];
    $gametype = $row['game_type'];
    $time = $row['match_time'];
    $status= $row['match_status'];
    $winner= $row['winner'];
    $remarks= $row['remarks'];
?>
                                    <li>
                                        <?php
                                        $team_qry1= "SELECT * FROM `team account` WHERE `id`='$team1'";
                                        $team_qry2= "SELECT * FROM `team account` WHERE `id`= '$team2'";
                                        $run_team_qry1= mysqli_query($con, $team_qry1);
                                        $run_team_qry2= mysqli_query($con, $team_qry2);

                                        $row_team1= mysqli_fetch_array($run_team_qry1);
                                        $row_team2= mysqli_fetch_array($run_team_qry2);
                                        $teamName1= $row_team1['team_name'];
                                        $teamName2= $row_team2['team_name'];
                                         ?>
                                        <div class="ritekhela-cell"><span><?php echo $date ."&nbsp". "($time)"; ?></span></div>
                                        <div class="ritekhela-cell">
                                            <a href="#" class="ritekhela-fixture-flag"><?php echo $teamName1; ?> </a>
                                            <span class="ritekhela-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ritekhela-fixture-flag ritekhela-next-flag"> <?php echo $teamName2; ?></a>
                                        </div>
                                        <div class="ritekhela-cell"><span class="text-danger"><?php echo $status; ?></span></div>
                                        <div class="ritekhela-cell"><span class="text-danger"><?php echo $remarks; ?></span></div>
                                        <div class="ritekhela-cell bg-success" ><span class="text-danger"><?php echo "Winner ".$winner; ?></span></div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--// Fixture All Matches //-->

                        </div>
                        <!--// Full Section //-->

                    </div>
                </div>
            </div>
            <!--// Main Section //-->

        </div>
        <!--// Content //-->

        <!--// Footer //-->
        <?php include_once "include/footer.php"; ?>
        <!--// Footer //-->

    </div>


    <!--// Login ModalBox //-->
    <div class="loginmodalbox modal fade" id="ritekhelamodalcenter" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
             <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Login To Your Account</h5>
                <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </a>
                <form class="loginmodalbox-search">
                    <input type="text" value="Enter User Name" onblur="if(this.value == '') { this.value ='Enter User Name'; }" onfocus="if(this.value =='Enter User Name') { this.value = ''; }">
                    <input type="text" value="Type Here Password" onblur="if(this.value == '') { this.value ='Type Here Password'; }" onfocus="if(this.value =='Type Here Password') { this.value = ''; }">
                    <input type="submit" value="Login Now" class="ritekhela-bgcolor">
                    <a href="#" class="loginmodalbox-forget">Forget Password?</a>
                </form>
                <div class="ritekhela-loginbox-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i> Dribbble</a></li>
                    </ul>
                </div>
             </div>
          </div>
       </div>
    </div>

    <!--// Login ModalBox //-->
    <div class="loginmodalbox modal fade" id="ritekhelamodalrg" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
             <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Sign Up Now</h5>
                <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </a>
                <form class="loginmodalbox-search">
                    <input type="text" value="Enter User Name" onblur="if(this.value == '') { this.value ='Enter User Name'; }" onfocus="if(this.value =='Enter User Name') { this.value = ''; }">
                    <input type="text" value="Type Your Password" onblur="if(this.value == '') { this.value ='Type Your Password'; }" onfocus="if(this.value =='Type Your Password') { this.value = ''; }">
                    <input type="text" value="Confirm your password" onblur="if(this.value == '') { this.value ='Confirm your password'; }" onfocus="if(this.value =='Confirm your password') { this.value = ''; }">
                    <input type="submit" value="Sign Up" class="ritekhela-bgcolor">
                    <a href="#" class="loginmodalbox-forget">Forget Password?</a>
                </form>
                <div class="ritekhela-loginbox-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i> Dribbble</a></li>
                    </ul>
                </div>
             </div>
          </div>
       </div>
    </div>

    <!--// Search ModalBox //-->
    <div class="loginmodalbox modal fade" id="ritekhelamodalsearch" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
             <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Search Here</h5>
                <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </a>
                <form>
                    <input type="text" value="Search Here Now" onblur="if(this.value == '') { this.value ='Search Here Now'; }" onfocus="if(this.value =='Search Here Now') { this.value = ''; }">
                    <input type="submit" value="Search Now" class="ritekhela-bgcolor">
                </form>
             </div>
          </div>
       </div>
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


<!-- all-fixture40:22-->
</html>