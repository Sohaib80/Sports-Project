<?php 
include_once "include/dbconn.php";
$team_get_id= $_GET['selected'];
$game_get_id= $_GET['game']; 

$game= "SELECT * FROM `game` where id='$game_get_id'";
$game_run= mysqli_query($con, $game);
$game_row= mysqli_fetch_array($game_run);
$game_id= $game_row['id'];
$game_name= $game_row['game_name'];
?>
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
    <style type="text/css">
        .post_img{
            height: 280px;
        }
    </style>

</head>

<body class="home">
    <div class="ritekhela-wrapper">
		<?php include_once('include/top_head.php'); ?>
		<?php include_once('include/menu.php'); ?>
		<?php //include_once('include/slider.php'); ?>

        <div class="ritekhela-main-content">
            <div class="ritekhela-main-section ritekhela-fixture-slider-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="ritekhela-fancy-title-two">
                                <h2>Selected Team</h2>
                            </div>
                            <div class="ritekhela-team ritekhela-team-view1">
                                <ul class="row">
                                    <?php 
                                $sel_player= "SELECT * FROM `cnfrm_player` WHERE `game_id`='$game_get_id' AND `deptt_id`='$team_get_id' ";
                                $sel_run= mysqli_query($con, $sel_player);
                                if (mysqli_num_rows($sel_run)==0) 
                                {
                                    ?>
                                        <h3 colspan="20" class="text-center text-danger" style="font-size: 16px;"><center><b>No Selection Yet.. Will Upload Soon</b></center></h3>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <span class="alert alert-success col-md-12">Congrachulation! to Those whoe are Selected!!</span>
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Team Name</th>
                                            <th>Game Type</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php 
                                                $team= "SELECT * FROM `team account` where id='$team_get_id'";
                                                $team_run= mysqli_query($con, $team);
                                                $team_row= mysqli_fetch_array($team_run);
                                                echo $team_name= $team_row['team_name'];
                                                $dpt_name= $team_row['department_name'];
                                                ?>
                                                
                                            </td>
                                            <td><?php echo $game_name; ?></td>
                                            <td><b class="text-success">Selected</b></td>
                                        </tr>
                                    </table><br><br><br><br><br><br><br><Br>
                                    <?php
                                    $no= 1;
                                    while ($sel_row= mysqli_fetch_array($sel_run)) 
                                    {
                                        $p_id= $sel_row['id'];
                                        $p_name= $sel_row['name'];
                                        $p_fname= $sel_row['fname'];
                                        $p_image= $sel_row['image'];
                                        $p_info= $sel_row['info'];
                            ?>

                                    <li class="col-md-4" >
                                        <figure>
                                            <a href="#"><img src="deptt/image/<?php echo $p_image; ?>" ></a>
                                            <figcaption>
                                                <a href="#" class="fab fa-facebook-f"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-instagram"></a>
                                                <a href="#" class="fab fa-dribbble"></a>
                                            </figcaption>
                                        </figure>
                                        <div class="ritekhela-team-view1-text">
                                            <h2><a href="#"><?php echo $p_name; ; ?></a></h2>
                                            <span><font color="Yellow">F/Name:</font> <?php echo $p_fname; ?></span>
                                            <span><font color="Yellow">Role:</font><?php echo $p_info; ?></span>
                                            
                                        </div>
                                    </li>
                                <?php }} ?>
                                </ul>
                            </div>

                        </div>
                        <aside class="col-md-4">
                             <div class="ritekhela-fancy-title-two">
                                <h2>Team Announsmet</h2> 
                            </div> <br><br><br>
                            <div>
                                <?php 
                                        $sel_ann= "SELECT * FROM `player_announsment` WHERE dpt_id='$team_get_id'";
                                        $sel_run= mysqli_query($con, $sel_ann);
                                        if (mysqli_num_rows($sel_run)==0) 
                                        {
                                            ?>
                                            <span class="alert alert-danger">No Annousment Yet</span>
                                            <?php
                                        }
                                        else
                                        {
                                            $no=1;
                                            while ($sel_row= mysqli_fetch_array($sel_run)) 
                                            {
                                                $id= $sel_row['id'];
                                                $title= $sel_row['title'];
                                                $detail= $sel_row['detail'];
                                                $date= $sel_row['date'];
                                            
                                        
                                        ?>
                                        <p class="alert alert-success"><?php echo $no++ .". ".  $detail; ?> <i class="text-danger">Posted Date:<?php echo $date; ?></i><hr>
                                        <?php }}?>
                                        </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php include_once('include/footer.php'); ?>

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


<!--  39:15-->
</html>