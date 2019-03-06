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
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Page</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <nav id="menu">
        <?php wp_nav_menu( array(
            'theme_location' => 'main',
            'menu_class' => 'links',
            'container' =>false ) ); ?>
<!--    <br>-->
<!---->
<!--    <div class="container-fluid">-->
<!--        <h3>Centered Navbar</h3>-->
<!--        <p>Use the .justify-content-center class to center the navigation bar.</p>-->
<!--        <p>In this example, the navbar will be centered on medium, large and extra large screens. On small screens it will be displayed vertically and left-aligned (because of the .navbar-expand-sm class).</p>-->
<!--    </div>-->

</header>