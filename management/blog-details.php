<?php
include("management/fooddbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php

include("head.php");
?>
<body>

    
    <?php
    require("header.php");

    ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">

<?php
$d= $_GET['id'];

//select on tha particular one
$sql = "SELECT * FROM posts where id='$d'";
        $result = mysqli_query($connect, $sql) or 
        die ("Could Not Select menu".mysqli_error($connect));

        if (mysqli_num_rows($result)){
            while ($row = mysqli_fetch_assoc($result))

            {
                $id= $row['id'];
                $author=$row['author'];
                $title=$row['title'];
                $body=$row['body'];
                $date=$row['date'];
                $pic= $row['picture'];
                    
            }
        }

            
?>

<div>
           
            
                
                    <div>
                    <div style="width: 50%; height: 250px; background-position: center; background-repeat: no-repeat; background-image: url(images/lydiaa.jpg);"> 
                         <!-- <img src="management/uploaded/<?php echo $pic ?>"  alt="">  -->
                    </div>
                        
                        <!-- <img src="management/uploaded/<?php echo $pic ?>" alt=""> -->
                        <div class="text px-4 pt-3 pb-4">
                            <div class="meta">
                               <p><h6><?php echo $title ?></h6></p>
                                
                            </div>
                    <p>Post by <?php echo $author ?> on <?php echo $date ?> </p>
                    <p><?php echo $body ?></p>
                            
                             
                        </div>
                    
                    
                        
                    </div>
                
                
            
            
        </div>


</section>

<style type="text/css">
.blogimage{
    
    height: 250px;
    width: 50%;
    background-image: url(management/uploaded/<?php echo $pic ?>);
    background-repeat: no-repeat;
    background-position: cover;

</style>

    <?php
include("footer.php");
?>
        

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>
        
    </body>
    </html>