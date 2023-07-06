<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>coreTheme</title>
	
	<?php wp_head(); ?>
</head>

<body class="blog_version">

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<?php 

							if(function_exists('The_custom_logo')){
								the_custom_logo();
							}

						?>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->

						<?php 

							wp_nav_menu(
							  array(
							    'theme_location' => 'header',
							    'container_class' => 'my_extra_menu_class',
							    'menu'			=> 'header',
							    'menu_class' => 'nav navbar-nav menu_nav justify-content-end',
							    'container' => 'div',
							    'container_class' => 'collapse navbar-collapse offset',	
							    'container_id' => 'navbarSupportedContent',	
							  )
							);

						?>

				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->