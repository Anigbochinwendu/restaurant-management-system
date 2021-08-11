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
		<!-- END nav -->
	
	<section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Wendy's Kitchen</h2></span>
								<h1>Cooking Since</h1>
								<span class="subheading-2">2018</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Wendy's Kitchen</h2></span>
								<h1>Delicious Food!</h1>
								<span class="subheading-2 sub">You can trust always</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Wendy's Kitchen</h2></span>
								<h1>Best Quality</h1>
								<span class="subheading-2 sub">Food</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
					<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading">About Us!</span>
								</div>
							</div>
							<div class="pl-lg-3 ml-md-5">
								<p>Wendy's Kitchen is a company that believes in creating a better everyday life. We exist to satisfy the changing taste and expectations of consumers as we best understand and satisfy the food and pleasure need of our customers.Like you already know, healthy and natural lifestyle includes smart food choices, we ensure that we use healthy ingredients to make our food.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span>We offer</span>
					<h2>Our best services</h2>
				</div>
			</div>
		</div>
	</section>
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
	<section class="ftco-section bg-light">
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
								<div><a href="menu-details.php?id=<?php echo $id[$s]?>"><h6><span style=" font-size: 14; font-weight: bold; color: purple"><?php echo $name[$s] ?></span></h6></a>
								
								</div>
								
							</div>
							<h3 class="heading"><a href="#">NGN<?php echo $price[$s] ?></a></h3>
							
						</div>
					</div>
				</div>
				<?php }?>
			
					
				
			</div>
		</div>

	</section>




	<section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-3 pb-2">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Happy Customer</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-7">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4">Nice place to eat good food.</p>
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Anigbo Gold</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4">Thanks for making my weekend a fabulous and fantastic one with your meal!!!</p>
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Paschal Damian</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4">Anytime i eat from Wendy's kitchen,I'm always happy.</p>
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Frank_studio</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4">Super tasty and affordable......I enjoyed my meal.</p>
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Marycynthia</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4">Thanks Wendy's kitchen for the healthy meal.</p>
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Daniel Ekenechukwu</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Meet</span>
					<h2 class="mb-4">Our Chefs</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/wendie.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Anigbo Chinwendu</h3>
							<span class="position mb-2">CEO, Founder</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/babes.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Anigbo Thelma</h3>
							<span class="position mb-2">Head Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/amaka.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Agbo Rita</h3>
							<span class="position mb-2">Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that,I'm a simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Uzendu Johnmicheal</h3>
							<span class="position mb-2">Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/c_k1.jpg);"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image: url(images/c_k2.jpg);"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">Our Delivery Service</span>
						<p>Our delivery service is at your beck & call for all your deliveries. Simply call 09095106195 or 09055562795 to place your order and be delighted at how fast your meal gets delivered..............just like abracadabra!</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php

  $sql = mysqli_query($connect, "SELECT * FROM posts order by id desc") 
  or die ("Could Not Select menu".mysqli_error($connect));
    
    $count=0;//count is used to identify the first value

    //select whatever is in the table 
    if (mysqli_num_rows ($sql)>$count){
      while ($row = mysqli_fetch_assoc($sql))

      {
        $id[] = $row["id"];
                $author[]=$row["author"];
                $title[]=$row['title'];
                $body[]=$row['body'];
        $date[]=$row['date'];
                $pic[]= $row['picture'];
        

        $count++;
      }
    }

        $sn= 1;
?>
	

<br><br><br><br>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="#" class="btn btn-white btn-outline-white">Place Your Order Now</a>
				</div>
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