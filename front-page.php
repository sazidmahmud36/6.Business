<?php get_header(); ?>

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3"><?php echo get_theme_mod('banner_heading','Banner Heading'); ?></h1>
      <p class="lead"><?php echo get_theme_mod('banner_text','Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'); ?></p>
      <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_btn_url','http://test.com'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text','Sign Up Today'); ?></a></p>
      </div>
  </div>

  <section class="marketing">
    <div class="container">
     <div class="row">
        <div class="col-lg-4 block pt60 pb60">
        <i class="fa <?php echo get_theme_mod('box1_icon','fa-bar-chart'); ?> fa-3"></i>
        <h3><?php echo get_theme_mod('box1_heading','Box-1 Heading'); ?></h3>
        <p><?php echo get_theme_mod('box1_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been '); ?></p>
      </div>

      <div class="col-lg-4 block pt60 pb60">
        <i class="fa <?php echo get_theme_mod('box2_icon','fa-code'); ?> fa-3"></i>
        <h3><?php echo get_theme_mod('box2_heading','Box-2 Heading'); ?></h3>
        <p><?php echo get_theme_mod('box2_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been '); ?></p>
      </div>

      <div class="col-lg-4 block pt60 pb60">
        <i class="fa <?php echo get_theme_mod('box3_icon','fa-desktop'); ?> fa-3"></i>
        <h3><?php echo get_theme_mod('box3_heading','Box-3 Heading'); ?></h3>
        <p><?php echo get_theme_mod('box3_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been '); ?></p>
      </div>
     </div>
    </div>
  </section>

  
          <?php if (is_active_sidebar('content-region-1')): ?>
              <?php dynamic_sidebar('content-region-1'); ?>
          <?php endif ?>



        <?php if (is_active_sidebar('content-region-2')): ?>
              <?php dynamic_sidebar('content-region-2'); ?>
          <?php endif ?>
       


<?php get_footer(); ?>