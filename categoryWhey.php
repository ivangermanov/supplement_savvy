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
        require "php/getRating.php";
        require 'php/session.php';
        require 'php/header_template.php';
    ?>
    <section class="main-section flex-container-vertical">
    <section>
        <h1>Whey protein reviews</h1>
        <div class="product-grid">
            <a href="product6.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Whey/micellar-casein-power-supplements.jpg" alt="micellar"></div><div><?php echo getRating(6);?></div></div></a>
            <a href="product7.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Whey/myprotein.jpg" alt="myprotein"></div><div><?php echo getRating(7);?></div></div></a>
            <a href="product8.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Whey/pure-whey-protein.jpg" alt="pure whey"></div><div><?php echo getRating(8);?></div></div></a>
            <a href="product9.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Whey/goldstandard.jpg" alt="optimum nutrition"></div><div><?php echo getRating(9);?></div></div></a>
            <a href="product10.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Whey/supreme-whey-body-supplies.jpg" alt="supreme whey"></div><div><?php echo getRating(10);?></div></div></a>
        </div>
    </section>
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