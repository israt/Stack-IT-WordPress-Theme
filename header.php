<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Dynasty3
 * @since Dynasty3 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="utf-8">

<!-- Meta -->
<meta name="keywords" content="Stack IT" />
<meta name="description" content="Stack IT" />
<meta name="author" content="Israt">
<meta name="robots" content="Stack IT" />

<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','No Entry'); ?> ">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,800,700,900' rel='stylesheet' type='text/css'>


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/component.css" />
<script src="js/modernizr.custom.js"></script>

<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- fancyBox main CSS files -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />
<?php wp_head();?>

</head>

<body>
	<!--header starts..-->
    <header>
    	<div class="row">
        	<div class="container">
            	<div class="col-md-3">
                	<div class="logo_area">
                    	<a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo of_get_option('logo','No Entry'); ?> " alt="logo"></a>
                    </div>
                    <!--logo_area ends...-->
                </div>
                <!--col-md-4 ends...-->
            	<div class="col-md-9">
                	<div class="menu_area">
                    	<div class="nav dnt3-menu">
                            <ul class="dropdown clear">
							<?php
							     $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>

								<li><a href="<?php echo bloginfo('url'); ?>" <?php if($pageid==58) { ?> class="active" <?php } ?>>Home</a></li>
								<li><a href="<?php echo bloginfo('url'); ?>/about-us" <?php if($pageid==16) { ?> class="active" <?php } ?>> ABOUT  US </a></li>
								<li><a href="<?php echo bloginfo('url'); ?>/how-it-works" <?php if($pageid==38) { ?> class="active" <?php } ?>>HOW  IT  WORKS</a></li>
								<li><a href="<?php echo bloginfo('url'); ?>/pricing" <?php if($pageid==56) { ?> class="active" <?php } ?>>PRICING </a></li>
								<li><a href="<?php echo bloginfo('url'); ?>/contact-us" <?php if($pageid==54) { ?> class="active" <?php } ?>>Contact Us</a></li>
								<li class="login"><a href="login.php">Login</a></li>
                            </ul>
     					 </div>
                    </div>
                    <!--menu_area ends...-->
                </div>
                <!--col-md-8 ends...-->
            </div>
        </div>
    </header>
    <!--header ends..-->
   