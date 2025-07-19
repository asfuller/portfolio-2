<!DOCTYPE html>
<html lang="en"> 
<head>
    <!--<title><?php the_title(); ?></title>-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nebulyn official website">
    <meta name="author" content="Alex Fuller">    
    <link rel="shortcut icon" href="images/logo.png"> 

	<?php wp_head(); ?>

</head> 

<body>
	<!--Needed Code-->
	<?php //wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?> <!--main menu nav-->
	<?php //bloginfo('url'); ?> <!--HREF for Site title-->
	<?php //echo get_bloginfo('name'); ?> <!---Blog Name inside a class--->
    
    <header>
        <nav class="navbar navbar-expand-lg mt-0">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <!--<span class="navbar-toggler-icon"></span>-->
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'main_menu',
                    'menu_class' => 'navbar-nav ms-auto main-menu',
                    'container'      => false)); ?>  
            </div>
        </nav>
    </header>