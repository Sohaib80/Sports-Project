
































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
    <style type="text/css">
        .post_img{
            height: 280px;
        }
    </style>

</head>

<body class="home">
    <div class="ritekhela-wrapper">
        <?php include_once('include/menu.php'); ?>
        <?php //include_once('include/slider.php'); ?>

        <div class="ritekhela-main-content">
            <div class="ritekhela-main-section ritekhela-fixture-slider-full">
                <div class="container">
                    <!--// Full Section //-->
                        <div class="col-md-12">
                            <!--// Gallery //-->
                            <div class="ritekhela-gallery ritekhela-gallery-view1">
                                <ul class="row">
                                    <?php
                                    $select_qry= "select * from gallery";
                                    $select_run= mysqli_query($con, $select_qry);
                                    $no=1;
                                    while ($row= mysqli_fetch_array($select_run))
                                    {
                                        $id= $row['id'];
                                        $title= $row['title'];
                                        $image= $row['image'];

                                    ?>
                                    <li class="col-md-3">
                                        <figure>
                                            <a data-fancybox-group="group" href="Picture1"<?php echo $image; ?>" class="fancybox"><img src="admin/image/gallery/<?php echo $image; ?>" alt=""> <i class="fa fa-plus ritekhela-bgcolor"></i> </a>
                                            
                                        </figure>
                                        <h2><?php echo $title; ?></h2>
                                    </li>
                                <?php }?>
                                </ul>
                            </div>
                            <!--// Gallery //-->
                        </div>
                        <!--// Full Section //-->
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
