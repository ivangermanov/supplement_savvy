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
    
<section class="main-section flex-container-vertical">
    <section class="product_overview_rating_container">
        <div class="product">
            <h1>Product*</h1>
            <img width=300px height=300px  src="pics/picsIcons/myprotein.jpg" alt="protein">
        </div>
        <div class="overview_rating_container">
            <div class="overview">
                <h2>Overview</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere gravida nunc vel dictum. 
                    Donec ligula odio, auctor a euismod placerat, rutrum ornare justo. Suspendisse ullamcorper accumsan justo sed varius. 
                    Praesent nec libero ut mauris volutpat consectetur eget eget ex. 
                    Praesent tincidunt aliquam pulvinar.    </p>
            </div>
            <div class="rating_container">
                <h2>Rating</h2>
                <div class="rating"></div>
            </div>
        </div>   
    </section>
    <!-- Comments -->
<?php
    include "php/commenting.php";
?>
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