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
        <h1>BCAA reviews</h1>
        <div class="product-grid">
            <a href="product1.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/BCAA/bcaa-amino-orange-mango.jpg" alt="body and fit bcaa capsules"></div><div><?php echo getRating(1);?></div></div></a>
            <a href="product2.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/BCAA/instant-bcaa.jpg" alt="bulk powders instant bcaa"></div><div><?php echo getRating(2);?></div></div></a>
            <a href="product3.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/BCAA/bcaa-powder-xxl-nutrition.jpg" alt="xxl nutrition bcaa powder"></div><div><?php echo getRating(3);?></div></div></a>
            <a href="product4.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/BCAA/mr-eiwit-bcaa.jpg" alt="mr eiwit bcaa"></div><div><?php echo getRating(4);?></div></div></a>
            <a href="product5.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/BCAA/myprotein-bcaa-plus.jpg" alt="myprotein bcaa plus"></div><div><?php echo getRating(5);?></div></div></a>
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