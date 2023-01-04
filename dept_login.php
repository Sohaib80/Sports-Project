<?php 
session_start();
include_once "include/dbconn.php"; 
if(isset($_SESSION['shopkeeper_email']))
{
    header('location:team_dashboard.php');
}
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
    

   <div class="loginmodalbox " id="ritekhelamodalcenter" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
             <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Login To Your Account</h5>
                <form class="loginmodalbox-search">
                    <input type="text" name="gmail" value="Enter User Name" onblur="if(this.value == '') { this.value ='Enter User Name'; }" onfocus="if(this.value =='Enter User Name') { this.value = ''; }">
                    <input type="text" name="password" value="Type Here Password" onblur="if(this.value == '') { this.value ='Type Here Password'; }" onfocus="if(this.value =='Type Here Password') { this.value = ''; }">
                    <input type="submit" name="login" value="Login Now" class="ritekhela-bgcolor">
                    <a href="#" class="loginmodalbox-forget">Forget Password?</a>
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
</html>
<?php
if(isset($_POST['login']))
{
    $gmail= $_POST['gmail'];
    $password= $_POST['password'];
    
    $lgn_qry= "select * from team account where team_gmail='$gmail' AND team_password='$password' ";
    $run_lgn_qry= mysqli_query($con, $lgn_qry);
    
    if(mysqli_num_rows($run_lgn_qry)>0)
    {
        $_SESSION['team_gmail']=$shopkpr_email;
        echo "<script>window.open('steam_dashboard.php','_self');</script>";
    }
    else
    {
        echo "<script>alert('Sorry..!!!!! Email or Password is wrong, try again');</script>";
    }
}
?>