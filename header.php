<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<header>
    <nav id="menu" class="navbar navbar-expand-sm bg-light justify-content-center mb-1">
        <?php wp_nav_menu( array(
            'theme_location' => 'main',
            'menu_class' => 'links-menu',
            'container' =>false ) ); ?>

</header>
<div id="banner" class="mb-5">
    <h1>D&D</h1>
    <p>Design et Développement Web</p>
    <i class="fa fa-facebook-square"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-dribbble"></i>
    <i class="fa fa-github-alt"></i>
    <i class="fa fa-codepen"></i>
    <i class="fa fa-linkedin"></i>
</div>
