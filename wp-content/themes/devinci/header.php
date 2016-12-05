<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>DeVinci Partners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
<div id="body">
<header>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li><a href="#!">three</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li><a href="#!">three</a></li>
    </ul>

    <!-- Navbar -->
    <nav>
        <div class="nav-wrapper">
            <a href="accueil" class="brand-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"  class="img-responsive" alt="Logo"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            <!-- PC -->
            <ul class="right hide-on-med-and-down">
                <li><a href="stage">Stage</a></li>
                <li><a href="association">DeVinci Partners</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="alumni">Alumni</a></li>
                <li><a href="article">Article</a></li>
                <li><a href="#">Nous rejoindre</a></li>


            </ul>
            <!-- Mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

        </div>
    </nav>


</header>