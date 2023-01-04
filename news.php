 <?php
 $sel_news= "SELECT * FROM `news_updates` order by 1 DESC LIMIT 0,4";
 $sel_run= mysqli_query($con, $sel_news);

 ?>

 <!--// Left Section //-->
<div class="col-md-8">
    <!--// Fancy Title Two //-->
    <div class="ritekhela-fancy-title-two">
        <h2> News & Updates</h2>
    </div>
    <!--// Fancy Title Two //-->

    <!--// Latest Blog's //-->
    <div class="ritekhela-blogs ritekhela-blog-view1">
        <ul class="row">
            <?php 
            while ($row = mysqli_fetch_array($sel_run)) 
            {
                $id = $row['id'];
                $title = $row['title'];
                $date = $row['date'];
                $author = $row['author'];
                $image = $row['image'];
                $description = substr($row['description'], 0,100);
            
             ?>
            <li class="col-md-6"> 
                <figure><a href="news_detail.php?view=<?php echo $id; ?>"> <?php echo "<img src='images/$image' class='post_img'>"; ?>  <i class="fa fa-link"></i> </a></figure>
                <div class="ritekhela-blog-view1-text">
                    <ul class="ritekhela-blog-options">
                        <li><i class="far fa-calendar-alt"></i> <?php echo $date; ?></li>
                        <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                    </ul>
                    <h3><a href="#"><?php echo $title; ?></a></h3>
                    <p><?php echo $description; ?></p>
                    <a href="news_detail.php?view=<?php echo $id; ?>" class="ritekhela-blog-view1-btn">Read More</a>
                </div>
            </li> 
        <?php } ?>
        </ul>
    </div>


                    <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">
                        <!--// Full Section //-->
                        <div class="col-md-12">
                            
                            <!--// Fancy Title //-->
                            <div class="ritekhela-fancy-title">
                                <div class="ritekhela-fancy-title-inner">
                                    <h2>Games</h2>
                                    <span>Is Your Team Ready For Next Match!</span>
                                </div>
                            </div>
                            <!--// Fancy Title //-->

                            <!--// Fixture All Matches //-->
                            <div class="ritekhela-fixture ritekhela-matches-list">
                                <ul>
                                    <?php
                                    $game = "SELECT * FROM `game`";
                                    $g_run = mysqli_query($con, $game);
                                    $no=1;
                                    while ($g_row = mysqli_fetch_array($g_run)) 
                                    {
                                        $id= $g_row['id'];
                                        $game= $g_row['game_name'];
                                    ?>
                                    <li>
                                        <div class="ritekhela-cell"><span><?php echo $no++; ?></span></div>
                                        <div class="ritekhela-cell"> 
                                            <a href="game_detail.php?view=<?php echo $id; ?>" class="ritekhela-fixture-flag"><?php echo $game; ?> </a>
                                        </div>
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
<!--// Left Section //-->