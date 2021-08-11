<?php
include("management/fooddbconnect.php");
include_once("Cart.class.php");
$cart= new Cart;

//include the database configuration file
require_once("dbConfig.php");
?>
<header>
<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone No:</span> <a href="#">09095106195</a> or <span class="mailus">Email Us:</span> <a href="#">anigbochinwendu2018@gmail.com</a></p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<p class="mb-0">Mon - Sat/ 9:00-21:00, Sun - Closed</p>
					
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php" style="color: red;">Wendy's <span style="color: red;">Kitchen</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>		
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				</ul>
			
			 <div id="cartIcon">
                 <a href="viewCart.php" title="View Cart"> <i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':'Empty'; ?>) </a>
                 <i class="fa fa-shopping-cart"></i>
                 <span class="cart-quantity"></span>
               
             </div>
			</div>
		</div>
	</nav>
	</header>

	<!-- END nav -->
	