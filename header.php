<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Romantic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <!-- Bootstrap core Css -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700" >

	<?php wp_head(); ?>

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- [if lt IE 9]
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  [endif] -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrapwordpress' ); ?></a>

  <!-- HEADER -->
  <header class="site-header" role="banner">
    <!-- NAVBAR -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          
          <!-- navbar-header -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- web-logo -->
            <a class="navbar-brand" href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a>
          </div>

          <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
				  <!-- navbar-collapse by +++ WORDPRESS +++ -->
					<?php
						wp_nav_menu( array(
							'menu_location' => 'primary',
							'container' => 'nav',
              'container_class' => 'navbar-collapse collapse',
              'menu_class' => 'nav navbar-nav navbar-right'
						));
          ?>
          
         <!-- navbar-collapse by +++ STATIC +++ -->
         <!-- <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="index.html">Home</a></li>
             <li><a href="blog.html">Blog</a></li>
             <li><a href="post.html">Post</a></li>
             <li><a href="resources.html">Resources</a></li>
             <li><a href="contact.html">Contact</a></li>
           </ul> 
         </div> -->

        </div> <!-- container -->
      </div>
    </div>
  </header>