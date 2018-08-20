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
        <h1>Creatine reviews</h1>
        <div class="product-grid">
            <a href="product11.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Creatine/the-myth-gryphon-nutrition.jpg" alt="the myth gryphon nutrition"></div><div><?php echo getRating(11);?></div></div></a>
            <a href="product12.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Creatine/creatine-micronized-body-supplies.jpg" alt="body supplies"></div><div><?php echo getRating(12);?></div></div></a>
            <a href="product13.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Creatine/creatine-monohydraat-power-supplements.jpg" alt="power supplements"></div><div><?php echo getRating(13);?></div></div></a>
            <a href="product14.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Creatine/creapure-creatine-bodyenfitshop.jpg" alt="body and fit"></div><div><?php echo getRating(14);?></div></div></a>
            <a href="product15.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Creatine/bulk-powders-creatine.jpg" alt="bulk powders"></div><div><?php echo getRating(15);?></div></div></a>
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