<article <?php post_class('post-header'); ?>>
  
  <?php
  if ( has_post_thumbnail() ) { ?>
  <div class="featureimg">
    <?php the_post_thumbnail(); ?>
    </div>
  <?php } else { ?>
  <div class="cont-preview">
    <?php the_content(); ?>
  </div>
  <?php } ?>
  <footer>
    <div class="pull-right">
      <?php get_template_part('templates/entry-meta'); ?>
    </div> 
    <h3><a class="entry-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
      <small><?php comments_number( '<span class="badge">0','<span class="badge badge-warning">1','<span class="badge badge-success">%' ); ?></span></small></h3>
    <time class="updated"><?php the_date('Y.m.d'); ?></time>
  </footer>
</article>
