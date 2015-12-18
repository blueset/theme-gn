<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <table class="table table-hover">
  <?php
	$bookmarks = get_bookmarks( array('orderby'        => 'link_id',
									  'order'          => 'ASC'));
	// Loop through each bookmark and print formatted output
	foreach ( $bookmarks as $bm ) { 
		$img='<img src="http://www.google.com/s2/favicons?domain='.$bm->link_url.'"> ';
		printf( '<tr><td>%s<a href="%s" title="%s">%s</a> <small>%s</small></td></tr>', $img, $bm->link_url, __($bm->link_description), __($bm->link_name), __($bm->link_description) );
	}
  ?>
  </table>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>

