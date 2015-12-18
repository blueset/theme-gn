<header class="banner navbar navbar-fixed-bottom" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

<div class="hero-unit" id="title" style="padding-left:0;padding-right:0;background-image:url('<?php header_image(); ?>');background-size:cover;">
  <div class="container">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 style="text-align:center;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" style="" alt="Logo"></h1></a>
    <h4 style="text-align:center;color:#<?php echo get_header_textcolor(); ?> ;text-shadow: 0 3px 10px #000;">蓝色之风工作室 Blueset Studio</h4>
    <p></p>
    <div style="text-align:center; margin-top:10px;"><?php get_template_part('templates/searchform'); ?></div>
  </div>
</div>

