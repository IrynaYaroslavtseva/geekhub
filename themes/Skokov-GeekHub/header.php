<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php bloginfo('name'); wp_title(); ?></title>

		<?php wp_head() ?>
    </head>
    <body>
		<div class="wrapper">
		    <header class="main-header">
		        <div class="top-header">
		            <a class="logo" href="<?php echo home_url() ?>"><img src="<?php $options = get_option( 'theme_settings' ); ?>
<?php echo $options['custom_logo'] ?>" alt="logo"  /></a>
		            <nav class="main-nav uppercase">
		                 <?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false, 'menu_class' => '')); ?> 
		            </nav>
		        </div>
		        <div class="bottom-header">
		            <h1 class="uppercase"><a href="<?php echo home_url() ?>">blog</a></h1>
		        </div>
		    </header>