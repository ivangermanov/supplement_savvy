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
        require "php/getName.php";
        require "php/getOverview.php";
        require "php/getImage.php";
        require "php/getRating.php";
        require "php/commenting.php";
        require 'php/session.php';
		require 'php/header_template.php';
    ?>
    
<section class="main-section flex-container-vertical">
    <section class="product_overview_rating_container">
        <div class="product">
            <h1><?php echo getName(15);?></h1>
            <img width=300px height=300px  src="<?php echo getImage(15);?>" alt="protein">
        </div>
        <div class="overview_rating_container">
            <div class="overview">
                <h2>Overview</h2>
                <p><?php echo getOverview(15);?></p>
            </div>
            <div class="rating_container">
                <h2>Rating</h2>
                <div class="rating flex-container-vertical" id="rating"><div id="rating-stars"></div><div class="rating-text"><?php echo getRating(15);?></div></div>
            </div>
        </div>   
    </section>
    <!-- Comments -->
<?php
    echo getComments(15);
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
<script src="javascript/rating.js"></script>
</body>
</html>