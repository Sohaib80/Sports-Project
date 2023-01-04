<?php 
include_once "include/dbconn.php"; 
$team_id= $_GET['view'];
$team= "SELECT * FROM `team account` WHERE id='$team_id'";
$team_run= mysqli_query($con, $team);
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
                            <?php
                            while ($teamrow= mysqli_fetch_array($team_run)) 
                            {
                                $tid= $teamrow['id'];
                                $tdep_name= $teamrow['department_name'];
                                $tteam_name= $teamrow['team_name']; 
                            }
                            ?>
                            <h1 style="font-weight: bold;" class="text-success">Welcome to <?php echo $tteam_name; ?> Page</h1>
                            <div class="ritekhela-fancy-title-two">
                                <h2>Games Cetagory</h2>
                            </div>

                            <div class="ritekhela-editor-detail">
                                <blockquote>Selection procedures in sports are reviewed through the lens of selection psychology. Across sports, selection decisions are mostly based on overall impressions of scouts and trainers (clinical judgment), whereas using explicit decision rules (actuarial judgment) often leads to better performance predictions.</blockquote>
                            </div>

                            <div class="ritekhela-fancy-title-two">
                                <h2>Selected Player</h2>
                            </div>
                            <table class="ritekhela-client-detail table-bordered">
                                <tbody>
                                    <tr>
                                        <th>S/NO</th>
                                        <th>Team Name</th>
                                        <th>Game Type</th>
                                        <th>View Selected Player</th>
                                    </tr>
                                    <?php
                                    $game= "select * from game";
                                    $game_run= mysqli_query($con, $game);
                                    $no= 1;
                                    while ($row= mysqli_fetch_array($game_run)) 
                                    {
                                        $game_id= $row['id'];
                                        $name= $row['game_name'];
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $tteam_name; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><a href="selected_player.php?selected=<?php echo $team_id; ?>&game=<?php echo $game_id; ?>" class="text-primary">View</a></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>

                        </div>
                        <aside class="col-md-4">
                             <div class="ritekhela-fancy-title-two">
                                <h2>Team Announsmet</h2> 
                            </div> <br><br><br>
                            <div>
                                <?php 
                                    $sel_ann= "SELECT * FROM `player_announsment` WHERE dpt_id='$team_id'";
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