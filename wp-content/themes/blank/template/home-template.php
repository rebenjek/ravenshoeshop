<?php
 /* Template Name: HOME */
?>

<?php
get_header(); 
?>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="http://localhost/ravenshoeshop/wp-content/themes/blank/template/css/home-template.css">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="w3-container">
	<div class="col-sm">
		<div class="w3-content w3-section" style="max-width:1000px">
			<img class="mySlides w3-animate-fading" src="http://localhost/ravenshoe/wp-content/uploads/2021/05/1.jpg" style="width:100%">
			<img class="mySlides w3-animate-fading" src="http://localhost/ravenshoe/wp-content/uploads/2021/05/2.jpg" style="width:100%">
			<img class="mySlides w3-animate-fading" src="http://localhost/ravenshoe/wp-content/uploads/2021/05/3.jpg" style="width:100%">
		</div>
	</div>

</div>



<div class="container">
	<div class="jumbotron red">
		<div class="text-center">
			<div class="ourprod">OUR PRODUCTS</div>
		</div>
	</div>
</div>


<div class="w3-container">
	<div class="row justify-content-center align-items-center">
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
	    		<div class="hovereffect">
	        		<img class="img-responsive" src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/runningshoe.jpg" alt="">
	            		<div class="overlay">
	                		<h2>RUNNING SHOES</h2>
								<p>
									<a href="http://localhost/ravenshoeshop/index.php/shop" class="transhover" style="text-decoration: none; ">GET YOURS NOW!!</a>
								</p>
	            		</div>
	    		</div>
			</div>
			

			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	    		<div class="hovereffect">
	        		<img class="img-responsive" style="" src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/bballshoes.jpg" alt="">
	            		<div class="overlay">
	                		<h2 >BASKETBALL SHOES</h2>
								<p>
									<a href="http://localhost/ravenshoeshop/index.php/shop" class="transhover" style="text-decoration: none; ">GET YOURS NOW!!</a>
								</p>
	            		</div>
	    		</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	    		<div class="hovereffect">
	        		<img class="img-responsive" style="" src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/skateshoe.jpg" alt="">
	            		<div class="overlay">
	                		<h2 style="">SKATE SHOES</h2>
								<p>
									<a href="http://localhost/ravenshoeshop/index.php/shop" class="transhover" style="">GET YOURS NOW!!</a>
								</p>
	            		</div>
	    		</div>
			</div>
	</div>
</div>

<br>
<br>
<div class="container"><hr></div>

<div class="container">
	<div class="row justify-content-center ">
			
			<div class="col-md-6 col-xs-12 col-lg-3">
				<img class="mt-4" style=" position:relative; left: 55px;" src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/delivlogo.png">
				<h5 class="text-center txtdes ">QUICK AND EASY PICK UP</h5>
					<div class="col-md-12 mx-auto text-center">
						<small>Handled by fastest and vigilant couriers</small>
					</div>
			</div>

			<div class="col-md-6 col-xs-12 col-lg-3">
				<img class="mt-4" style=" position:relative; left: 55px;" src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/shippinglogo.png">
				<h5 class="text-center txtdes">FREE SHIPPING NATIONWIDE</h5>
					<div class="col-md-12 mx-auto text-center">
						<small>Free shipping within the Phillipnes (additional charges overseas)</small>
					</div>
			</div>

			<div class="col-md-6 col-xs-12 col-lg-3">
				<img class="mt-4" style=" position:relative; left: 55px;" src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/pricelogo.png">
				<h5 class="text-center txtdes mx-">LOW PRICES GUARANTEED</h5>
					<div class="col-md-12 mx-auto text-center">
						<small>Lowest price in the market but <strong>THE BEST QUALITY!!!</strong></small>
					</div>
			</div>
		</div>
	</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() 
{
  	var i;
  	var x = document.getElementsByClassName("mySlides");
  	for (i = 0; i < x.length; i++)
  	{
		x[i].style.display = "none";  
  	}
  	myIndex++;
  	if (myIndex > x.length)
  		{
  			myIndex = 1
  		}    
  	x[myIndex-1].style.display = "block";  
 	setTimeout(carousel, 3000);    
}

</script>

<?php 
get_footer();
?>