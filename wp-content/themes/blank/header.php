<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/ravenshoeshop/wp-content/themes/blank/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

    <header>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a href="http://localhost/ravenshoeshop/index.php/home" class="navbar-brand">
            <img src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/logo.jpg" style="width: 100px;" class="rounded">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost/ravenshoeshop/index.php/home" class="nav-item nav-link btn btn-dark transhover w3-sans-serif ">HOME</a>
                <a href="http://localhost/ravenshoeshop/index.php/shop" class="nav-item nav-link btn btn-dark transhover w3-sans-serif ">SHOP</a>
                <a href="http://localhost/ravenshoeshop/index.php/about" class="nav-item nav-link btn btn-dark transhover w3-sans-serif">ABOUT US</a>
                <a href="http://localhost/ravenshoeshop/index.php/contact" class="nav-item nav-link btn btn-dark transhover w3-sans-serif">CONTACT</a>
                <a href="http://localhost/ravenshoeshop/index.php/cart" class="nav-item nav-link btn btn-dark transhover w3-sans-serif "><img src="http://localhost/ravenshoeshop/wp-content/uploads/2021/04/cart.png" style="width: 30px;"> CART</a>
            </div>
              
                    
        </div>
      </nav>
</div>
</header>
