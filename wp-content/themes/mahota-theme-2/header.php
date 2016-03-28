<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/font-awesome.min.css">
  <script type="text/javascript" src="<?php echo bloginfo('template_url');?>/js/modernizr.js"></script>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
  <script>
  conditionizr.config({
  assets: '<?php echo get_template_directory_uri(); ?>',
  tests: {}
  });
  </script>
</head>
<body <?php body_class(); ?>>
<header>
  <a id="cd-logo" href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_url');?>/img/cd-logo.svg" alt="Homepage"></a>
  <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a>
</header>
  <nav id="cd-lateral-nav">
    <?php wp_nav_menu(array('menu'=>'sidebar-navigation', 'menu_class'=> 'cd-navigation',)); ?>

    <div class="cd-navigation socials">
      <a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
      <a class="cd-github cd-img-replace" href="#0">Git Hub</a>
      <a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
      <a class="cd-google cd-img-replace" href="#0">Google Plus</a>
    </div> <!-- socials -->
  </nav>
  
  <main class="cd-main-content">

 




