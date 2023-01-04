<?php
include_once 'include/dbconn.php';
$getid= @$_GET['view'];

?>
<!doctype html>
<html lang="zxx">


<!-- blog-detail42:00-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sports & Magazine Khela</title>

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

         <!--// SubHeader //-->
        <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>News Detail</h1>
                        <ul class="ritekhela-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">News</a></li>
                            <li>News Detail</li>
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
                        <div class="col-md-8">
                        <?php 
                        $view_news= "SELECT * FROM `news_updates` where id='$getid'";
                        $view_run= mysqli_query($con, $view_news);
                            while ($row = mysqli_fetch_array($view_run)) 
                            {
                                $id = $row['id'];
                                $title = $row['title'];
                                $date = $row['date'];
                                $author = $row['author'];
                                $image = $row['image'];
                                $description = $row['description'];
                            }
                        ?>                          
                            <!--// Fixture Detail List //-->
                            <figure class="ritekhela-fixture-detail">
                               <?php echo "<img src='images/$image' class='post_img'>"; ?>
                                <ul class="ritekhela-blog-options">
                                    <li><a href="#"><i class="far fa-user"></i> By Admin</a></li>
                                    <li><i class="far fa-calendar-alt"></i> <?php echo $date; ?></li>
                                    <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                                </ul>
                            </figure>

                            <div class="ritekhela-editor-detail">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $description; ?></p>
                            </div>
                        </div>
                        <!--// Full Section //-->

                        <!--// SideBaar //-->
                        <aside class="col-md-4">
                            <?php include('include/aside.php'); ?>
                        </aside>
                        <!--// SideBaar //-->

                    </div>
                </div>
            </div>
            <!--// Main Section //-->

        </div>
        <!--// Content //-->
        <?php include_once "include/footer.php"; ?>

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


<!-- blog-detail42:02-->
</html>