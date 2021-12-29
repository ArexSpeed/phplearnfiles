<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
<!-- body_class - allow add classes to body by plugins -->

  <header>
    <div class="container d-flex align-items-center justify-content-between">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid logo" />

      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu'
          )
        )
      ?>
    </div>
  </header>
  
