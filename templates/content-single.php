<?php while (have_posts()) : the_post(); ?>

<article class="post-header">
  <div class="featureimg">
  <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }?>
  </div>
  <footer>
    <div class="pull-right">
      <?php get_template_part('templates/entry-meta'); ?>
    </div> 
    <h3 class="entry-title"><?php the_title(); ?> <small><?php comments_number( '<span class="badge ">0','<span class="badge badge-warning">1','<span class="badge badge-success">%' ); ?></span></small></h3>
    <time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date(); ?></time>
  </footer>
</article>

  <article <?php post_class(); ?>>
    <div class="entry-content">
      <?php the_content(); ?>
      <p>
        <?php 
$link1name = get_post_meta($post->ID, 'link1name', true); 
$link1add = get_post_meta($post->ID, 'link1add', true); 
$link2name = get_post_meta($post->ID, 'link2name', true); 
$link2add = get_post_meta($post->ID, 'link2add', true); 
$link3name = get_post_meta($post->ID, 'link3name', true); 
$link3add = get_post_meta($post->ID, 'link3add', true); 

if(!empty($link1name)){
        echo '<b>下载链接：</b><a href="'."$link1add".'">'."$link1name".'</a>'; 
echo ' | <a href="http://www.1a23.com/">来自蓝色之风工作室</a>'; 
                      }
if(!empty($link2name)){
        echo ' | <a href="'."$link2add".'">'."$link2name".'</a>'; 
                      }
if(!empty($link3name)){
        echo ' | <a href="'."$link3add".'">'."$link3name".'</a>'; 
                      }
?>
      </p>
    </div>
  </article>

   <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
