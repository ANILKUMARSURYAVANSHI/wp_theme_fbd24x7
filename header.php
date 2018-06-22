<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"  >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?>|
    <?php is_front_page() ? bloginfo('description'):  wp_title();?> </title>
    <link rel="icon" href="favicon.ico">
    
    <link rel="icon" href="<?php bloginfo('icon'); ?>">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    
    

    <!-- Custom styles for this template -->
    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <?php wp_head(); ?>
    <style>
    .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/image/banner_news.jpg');?> )no-repeat center center;
    }
    </style>
  </head>

  <body>
    <div class="top-nav">
      <div class="header-top dark">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-sm-4 col-sm-8">
                      <ul class="contact-bx">
                          <li><i class="fa fa-phone pr-1 pl-2"></i><a href="tel:+918930068008" >+91-8930068008</a></li>
                          <li><i class="fa fa-envelope pr-1 pl-2"></i> <a href="mailto:faridabad24x7@gmail.com">faridabad24x7@gmail.com</a></li>
                     </ul>
                  </div>

                  <div class="col-12 col-sm-4 col-lg-4">
                      <div>
                          <ul class="smm-bx">
                              <li>
                                  <a href="https://www.facebook.com/Faridabad24x7com-227562500758246/"> <i class="fa fa-facebook" class="social-icon"></i> </a>
                              </li>
                              <li>
                                  <a href="https://twitter.com/faridabad24x7"> <i class="fa fa-twitter"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-linkedin"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-google-plus"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-instagram"></i> </a>
                              </li>
                          </ul>


                      </div>
                      <!-- header-top-first end -->
                  </div>

              </div>
          </div>
      </div>
  </div>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md ">
      <div class="container">
       <button class="navbar-toggler ml-auto " type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-light"></span>
    
  </button>
          <a class="navbar-brand logo" href="www.faridabad24x7.com"> Faridabad<span>24x7</span> </a>
          
      <?php
wp_nav_menu( array(
	'menu'                  => 'primary',
    'theme_location'	=> 'primary',
    'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
	'container'			=> 'div',
	'container_class'	=> 'collapse navbar-collapse',
	'container_id'		=> 'bs-example-navbar-collapse-1',
    'menu_class'		=> 'navbar-nav nav ',
    'button'            => 'navbar-toggler navbar-toggler-right',
    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    'walker'			=> new WP_Bootstrap_Navwalker()
) );
?>
    </div>
  </nav>