<div class="comment-box">
  <div class="comment-content clearfix">
    <?php comment_text(); ?>  
  </div>  
  <div class="comment-meta">
    <div class="pull-left">
      <?php echo get_avatar($comment, $size = '48'); ?>
    </div>  
    <div class="pull-right">
    <time datetime="<?php echo comment_date('c'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s', 'roots'), get_comment_date(),  get_comment_time()); ?></a></time>
    <br> #<?php comment_ID() ?>  
    </div>
    <h4 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
  
   <?php edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>
     <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
  </div>


