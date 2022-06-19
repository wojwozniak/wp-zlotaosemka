<!DOCTYPE html>
<html lang="pl-PL"> 
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Metadane -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Związek Drużyn Złota Ósemka">
    <meta name="author" content="https://github.com/wojwozniak">
	<?php
		wp_head();
	?>

</head> 

<body id="home">
	<nav id="nav" class="fixed-nav">
		<div class="nav-center">
			<div class="nav-header">
				<?php
					if(function_exists('the_custom_logo')){
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}
				?>
				<a href="<?php echo get_home_url(); ?>"><img id="logo" src=<?php echo $logo[0] ?> alt="logo" class="logo"/></a>
				<button class="nav-toggle"><i class="fas fa-bars"></i></button>
			</div>
			<div class="links-container">		
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="ul" class="links">%3$s</ul>',
							'container_aria_label' => 'footer-menu'

						)
					)
				?>
			</div>
			</div>
		</div>
	</nav>