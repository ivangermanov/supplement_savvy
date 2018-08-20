<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

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
    <section>
        <h1>Category* reviews</h1>
        <div class="flex-container-vertical">
            <div class="flex-container products">
                <div class="grid-item-category"><img src="../pics/picsIcons/myprotein.jpg" alt="protein"></div>
                <div class="grid-item-category"><img src="../pics/picsIcons/bsnsyntha.jpg" alt="protein"><div>Rating</div></div>
                <div class="grid-item-category"><img src="../pics/picsIcons/goldstandard.jpg" alt="protein"><div>Rating</div></div>
            </div>
            <div class="flex-container products">
                <div class="grid-item-category"><img src="../pics/picsIcons/myprotein.jpg" alt="protein"><div>Rating</div></div>
                <div class="grid-item-category"><img src="../pics/picsIcons/bsnsyntha.jpg" alt="protein"><div>Rating</div></div>
                <div class="grid-item-category"><img src="../pics/picsIcons/goldstandard.jpg" alt="protein"><div>Rating</div></div>
            </div>
            
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