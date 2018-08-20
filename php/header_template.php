<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("php/backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    // Set search input value on click of result item
	$(document).on("click", ".result p", event => {
		clickedElement = $(event.target);
		
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'php/getIdByName.php?name='+clickedElement.html());
		xhr.onload = function() {
			if (xhr.readyState === 4 && xhr.status === 200) {
				window.location.href = xhr.responseText;
			}
			else
			{
				alert("ERROR!");
			}
		};
		xhr.send();
		$(this).parent(".result").empty();
	});
});
</script>
<header class="header">
	<div class="flex-container vpadding-1 hpadding-5 hpadding-0">
		<img class="logo" src="../pics/Logo.jpg" alt="Supplement Savvy Logo">
		<div class="flex-container log-sign">

			<?php 
			if (!isset($_COOKIE['email'])) 
			{
				include 'php/login_signup_template.php';
			}
			else 
			{
				include 'php/logout_template.php';
			}
				
			?>

		</div>
	</div>

	<nav class="flex-container navbar">
	<?php
		if (strpos($_SERVER['PHP_SELF'], 'index.php'))
		{
			echo '<li><a href="index.php" class="active">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'categories.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>

				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}

		else if (strpos($_SERVER['PHP_SELF'], 'category.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'categoryBCAA.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php" class="active">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'categoryWhey.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php" class="active">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'categoryCreatine.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php" class="active">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'categoryPreWorkout.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'categoryIron.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn active" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'product.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn" href="categories.php">Categories</a></div>
				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
		else if (strpos($_SERVER['PHP_SELF'], 'contact.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn" href="categories.php">Categories</a></div>

				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php" class="active">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}

		else if (strpos($_SERVER['PHP_SELF'], 'about.php'))
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn" href="categories.php">Categories</a></div>

				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php" class="active">About</a></li>';
		}
		else 
		{
			echo '<li><a href="index.php">Home</a></li>

			<li class="dropdown"><div><a class="dropbtn" href="categories.php">Categories</a></div>

				<div class="dropdown-content"> 
					<a href="categoryBCAA.php">BCAA</a>
					<a href="categoryWhey.php">Whey Protein</a>
					<a href="categoryCreatine.php">Creatine</a>
				</div>
			</li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>';
		}
	?>
		<?php include "search-form.php"; ?>
	</nav>
</header>