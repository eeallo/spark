<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
	<header role="banner">
		<div class="container-no-padding">
			<nav id="access" role="navigation" class="nav-collapse">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
		</div>
		
		<div class="container">
			<div id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			
			<?php if ( is_home() && !is_paged() ) { ?>
			<div id="site-description">
				<h1><i class="fa fa-birthday-cake"></i>&nbsp;<?php bloginfo( 'description' ); ?></h1>
			</div>	
			<?php } ?> 
		</div>
	</header>