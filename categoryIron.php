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
        <h1>Iron supplement reviews</h1>
        <div class="product-grid">
        <a href="product11.php"><div class="hpadding-1 vpadding-1"><div class="flex-container"><img src="pics/picsIcons/Iron/proferrin.jpg" alt="proferrin iron"></div><div><?php echo getRating(18);?></div></div></a>
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