<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>	

	<title>Supplement Savvy</title>
	<meta charset="UTF-8">
</head>
<body class="grid-container background-grey">
	<?php
		require 'php/session.php';
		require 'php/header_template.php';
		require 'php/getRating.php'
	?>

	<section class="main-section flex-container-vertical hpadding-5">
		<section class="flex-container-vertical">
			<div id="slider" class="flex-container fade">
				
				<div class="control control-prev hpadding-05 vpadding-1" id="control-prev">
					<button id="control-prev" disabled="disabled"><</button>
				</div>
				<div class="slide fade" id="slide1"></div>
				<div class="slide fade" id="slide2"></div>
				<div class="slide fade" id="slide3"></div>
				<div class="control control-next hpadding-05 vpadding-1" id="control-next">
					<button id="control-next" >></button>
				</div>
				
			</div>
		</section>

		<section class="flex-container-vertical">

				<h1>Leaderboards</h1>
			
				<div class="flex-container  content-center  vpadding-2 hpadding-1" >
					<div class="second-place vpadding-1 flex-container flex-1">
						<div class="flex-container-vertical  flex-1" >
							
							<div class="card-header vpadding-05 hpadding-1">2nd place</div>

							<div class="hpadding-1 vpadding-05 marginv-auto">
								<div class="flex-container flex-v-start content-center">
									<a href="product11.php"><img class="card-avatar" src="pics/picsIcons/Creatine/the-myth-gryphon-nutrition.jpg" alt="Myth"></a>	
									<div class="card-product-name hpadding-1 vpadding-05">The Myth</div>
								</div>
								
							</div>
							<div class="card-footer vpadding-05 hpadding-1"><?php echo getRating(11)?></div>
						</div>
					</div>
					<div class="first-place flex-container flex-1 hpadding-2">
						<div class="flex-container-vertical flex-1">
	
							<div class="card-header vpadding-05 hpadding-1">Top product</div>

							<div class="hpadding-1 vpadding-1 marginv-auto">
							<div class="flex-container flex-v-start content-center">
							<a href="product9.php"><img class="card-avatar" src="pics/picsIcons/goldstandard.jpg" alt="Gold standard"></a>	
								<div class="card-product-name hpadding-1 vpadding-05">Gold Standard</div>
							</div>
							</div>
							<div class="card-footer vpadding-05 hpadding-1"><?php echo getRating(9)?></div>
						</div>
					</div>
					<div class="third-place vpadding-1 flex-container flex-1">
						<div class="flex-container-vertical flex-1">
							
							<div class="card-header vpadding-05 hpadding-1">3rd place</div>

							<div class="hpadding-1 vpadding-05 marginv-auto">
								<div class="flex-container flex-v-start content-center">
									<a href="product1.php"><img class="card-avatar" src="pics/picsIcons/BCAA/bcaa-amino-orange-mango.jpg" alt="syntha"></a>
									<div class="card-product-name hpadding-1 vpadding-05">BCAA Amino</div>
								</div>
							</div>
							<div class="card-footer vpadding-05 hpadding-1"><?php echo getRating(1)?></div>
						</div>
					</div>
				</div>
			</section>	
	</section>

<!-- Footer -->
<?php
		include 'php/footer_template.php';
?>
	
			  
<script src="javascript/slider.js"></script>
    
<!-- Modal -->
<?php
	require 'php/modal_template.php';
?>


<script src="javascript/slider.js"></script>
<script src="javascript/login_signup_outside.js"></script>
<script src="javascript/password_validate.js"></script>
</body>
</html>