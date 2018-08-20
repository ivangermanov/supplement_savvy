<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<title>Supplement Savvy</title>
	<meta charset="UTF-8">
</head>
<body class="grid-container">
	<?php
		require 'php/session.php';
		require 'php/header_template.php';
	?>

    <section class="main-section vpadding-2">
		<div class="flex-container-vertical">
			<div class="category-cover ">
					<a href="categoryWhey.php">
					<img class="blurshade" src="pics/746b76e8-37fa-4e40-b4e0-c42f59b1c6c5._SR970,300_.jpg" alt="protein" >
					<div class="overlay flex-container  flex-h-end  flex-h-align--center  hpadding-2  text">WHEY</div>
					</a>
				
			</div>
			
			<div class="category-cover ">
				<a href="categoryBCAA.php">
					<img class="blurshade" src="pics/picsIcons/BCAA/asd.jpg" alt="protein" >
					<div class="overlay flex-container  flex-h-end  flex-h-align--center  hpadding-2  text">BCAA</div>
				</a>
			</div>
			
			<div class="category-cover ">
				<a href="categoryCreatine.php">
					<img class="blurshade" src="pics/picsIcons/Creatine/CREATINE_600_3SIDES_PNG_1024x1024.png" alt="protein" >
					<div class="overlay flex-container  flex-h-end  flex-h-align--center  hpadding-2  text">CREATINE</div>
				</a>
			</div>    
		</div>
			
		</div>
	</a>
	</section>
<!-- Footer -->
<?php
        include 'php/footer_template.php';
?>
    
<!-- Modal -->
<?php
    require 'php/modal_template.php';
?>

<script src="javascript/login_signup_outside.js"></script>
<script src="javascript/password_validate.js"></script>
</body>
</html>