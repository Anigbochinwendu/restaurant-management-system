<?php
include("management/fooddbconnect.php");
include_once("Cart.class.php");
$cart= new Cart;

//include the database configuration file
require_once("dbConfig.php");

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
					<h1 class="mb-2 bread">Menu</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<?php

		$sql = mysqli_query($connect, "SELECT * FROM menu order by id desc") 
		or die ("Could Not Select menu".mysqli_error($connect));
				
				$count=0;//count is used to identify the first value

				//select whatever is in the table 
				if (mysqli_num_rows ($sql)>$count){
					while ($row = mysqli_fetch_assoc($sql))

					{
						$id[] = $row["id"];
		                $name[]=$row["name"];
		                $category[]=$row['category'];
		                $price[]=$row['price'];
		                $quantity[]=$row['quantity'];
						$details[]=$row['details'];
		                $pic[]= $row['picture'];
						

						$count++;
					}
				}

						$sn= 1;
		?>

		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>
					<h2 class="mb-4">Our Menu</h2>
				</div>
			</div>
			
					
			<div class="row">
				<?php for($s=0; $s<$count; $s++) {?>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url(management/uploaded/<?php echo $pic[$s] ?>);">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div>
									<a href="menu-details.php?id=<?php echo $id[$s]?>"><span style=" font-size: 14; font-weight: bold; color: purple"><?php echo $name[$s] ?></span></a>
								</div>
								
							</div>
							<h3 class="heading"><a href="#">NGN<?php echo $price[$s] ?></a></h3>
							<a href="menu-details.php?id=<?php echo $id[$s]?>" class="btn delicious-btn">See Full Receipe</a>
						</div>
					</div>
				</div>
				<?php }?>
			
			</div>
		</div>

	</section>

	

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