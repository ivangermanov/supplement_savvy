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
        <section class="about">
			
		<section class="flex-container-vertical">
<section class="about">
	<h1 class="about-title">
		<span class="about-title-about">ABOUT</span><span class="about-title-us"> US</span></h1>
        </section>
        </section>
            <div>
	<p class= "about-intro">
	Supplement Savvy was founded in Eindhoven in the year of 2018. 
	The motivation for creating the website was the frustration brought about by many supplement review websites,
	which made (and continue to make) biased supplement reviews in favor of sponsors and profits. 
	Supplement Savvy was born to oppose the money-making schemes and to bring truth out to the people who search for it, 
	but who don't know where to look. Our mission at Supplement Savvy is to provide 100% unbiased and honest supplement reviews.</p> </div>
            <div class="about-margin">
	
		<img src="pics/picsAbout/18740372_1462106493850890_9121747498097580454_n.jpg" alt="Velin Stoyanov Ekupov" class="about-pic pictures">
               
        <p>
		<b><span>Velin Stoyanov</span><span> Ekupov</span></b> 
		is a programmer, fitness enthusiast, student and web developer of Bulgarian descent. He was born in Tryavna in 1998. 
		Since his childhood, he has been fascinated with computers and obssessed with IT, 
		especially n the domain of web development, as his father, a senior web developer, 
		as guided and tutored him on the path to becoming an amazing developer. 
		Velin was alwaus a skinny dude and was at the age of 14 that he became tired of his physical limitations 
		and decided to finally make a change. Since then, he's been a (savvy) fitness aficionado ;). 
		Legend says he's never skipped a workout (not even leg day!). 
	</p>
                </div>
            <div class="about-margin">
	
		<img src="pics/picsAbout/IMG_20170510_221231_267.jpg" alt="Ivan Petrov Germanov" class="about-pic pictures">
<p>
		<b><span>Ivan Petrov</span><span> Germanov</span></b> 
		is a Bulgarian programmer, IT student, web developer and retired fitness coach, 
		who is however still a devotee to the gym lifestyle. 
		He was born in sofia, the capital of Bulgaria, in 1998. 
		He has been obsessed with computers ever since his parents bought his first computerat a feeble age of 8 
		and wrote his first program when he was 12. The 24/7 sitting in front of a computer lifestyle, however, 
		as is well known, is of detriment to the human body, and Ivan's was no exception. 
		He was always chubby and he was often bullied. When he became 15, 
		he decided to put a stop to it and becoming a beast was the solution. Legend says he can bench press 140 kilos for reps. 
		however, he is guilty of sometimes skipping leg day ;).</p>
</div>
            <div class="about-margin">
	
		<img src="pics/picsAbout/foto_stijn.jpg" alt="Stijn van den Groenendaal" class="about-pic pictures">
                
<p>
		<b><span >Stijn van den</span><span > Groenendaal</span></b> 
		is a Dutch programmer, IT student, web develepor and newbie fitness fanatic. 
		He was born in 'S Hertogenbosch in 1998. From a very early age Stijn was obsessed with playing video games, 
		this obsession would later lead to his interest in computers. 
		He always wanted to learn more about anything IT related and following his interest he ended up as an IT student. 
		Here he learned about IT but more important, he learned about fitness. 
		He started to understand the how nice it would be to run fast or be strong and trained for that reason. 
		Legend says he'd rather skip any other day then leg day ;).</p></div>
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