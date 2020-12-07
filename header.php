
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title><?php bloginfo('name'); ?></title>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <!-- <link href="<?php bloginfo('template_url'); ?>/css/fontawesome.css" rel="stylesheet">     -->
     <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<?php wp_head(); ?>

<style>
  .jumbotron{
    background: url(<?php echo get_theme_mod('banner_image',get_bloginfo('template_url').'/images/banner.jpg'); ?>);
    background-position: center;
    background-size: cover;
  }
</style>
  </head>

  <body <?php body_class(); ?>>

      <div class="header clearfix">
        <div class="container">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'primary', 
              'depth' => 2, 
              'container' => false, 
              'menu_class' => 'nav nav-pills float-right', 
              'fallback' => 'wp_bootstrap_navwalker::fallback',
              'walker' => new wp_bootstrap_navwalker()

            ));
           ?>


          <?php if (has_custom_logo()): ?>
            <?php the_custom_logo(); ?>
            <?php else: ?>
              <h1><?php bloginfo('name'); ?></h1>
          <?php endif; ?>
        </div>
      </div>