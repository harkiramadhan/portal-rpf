<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal RPF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<style>

		input[type=text], input[type=password] {
		    width: 100%;
		    padding: 15px;
		    margin: 5px 0 22px 0;
		    display: inline-block;
		    border: none;
		    background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
		    background-color: #ddd;
		    outline: none;
		}

		hr {
		    border: 1px solid #f1f1f1;
		    margin-bottom: 25px;
		}

		/* Set a style for the submit button */
		.registerbtn {
		    background-color: #F8CA37;
		    color: white;
		    padding: 16px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 100%;
		    opacity: 0.9;
		}

		.registerbtn:hover {
		    opacity: 2;
		}

		a {
		    color: dodgerblue;
		}

		b {
			color: white;
		}

	</style>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.php"><img src="images/logo.png" style="width:70%"></a></div>
						</div>

						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="btn-cta"><a href="index.php">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>


	<aside id="colorlib-hero">
		<div class="col-md-12"> 
			<form action="/action_page.php">
			  	<div class="container">
				    <h1 style="color: white;">Login</h1>
				    <p style="color: white;">Please fill in this form to Login.</p>
				    <hr>

				    <div class="form-group">
					    <label for="NIP"><b>NIP</b></label>
					    <input class="form-control" type="text" placeholder="Enter NIP" name="NIP" maxlength="10" required>
					</div>

					<div class="form-group">
					    <label for="psw"><b>Password</b></label>
					    <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
					</div> 

			    <hr>
			    <button type="submit" class="registerbtn">Login</button>
			  	</div>

			</form>
		</div>	
	</aside>	
	
	<footer id="colorlib-footer">
		<div class="container">
			<div class="copy">
				<div class="container">
				</div>
			</div>	

			<h5 style="text-align: center; color: white;">&copy; Copyright Retail Product Delivery and Fraud Risk Group</h5>
			<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>
	</footer>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


	<!-- Js Slider Utama -->
		<script>
	$(document).ready(function() {
	 
	  $("#owl-demo2").owlCarousel({
	 		
	 		autoplay: true,
		    items:1,
		    loop:true,
	  });
	 
	});
		</script>

	<!-- Js Slider Foto -->
		<script>
	$(document).ready(function() {
		 
		 	$("#owl-demo").owlCarousel({
		 
		   	autoplay: true,
		   	items : 2,
		   	loop: true,

		 	});
		 });	
		</script>

	</body>
</html>

