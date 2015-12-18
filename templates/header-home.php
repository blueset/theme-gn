<header class="banner navbar navbar-static-top" role="banner">
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

<div class="hero-unit">
  <div class="container">
    <div class="pull-right"><img src="assets/img/avatar3.png" alt=""></div>
    <h1>Bazinga!!!!</h1>
    <p>LOLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL!</p>
  </div>
 
</div>
