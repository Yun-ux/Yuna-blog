<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name')?><?php wp_title(' - ') ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- pour loader le css -->
    <?php wp_head(); ?>
</head>
<body>
  <header>
    <img class="logo" src="<?php echo get_template_directory_uri(); ?> /assets/images/yunalogo.png">
    <?php 
        wp_nav_menu([
            
                'theme_location' => 'header-menu',
                'menu_class' => 'nav'
            
        ]);
        ?>
        
        
  </header>
