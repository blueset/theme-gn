<div class="inline">
<?php the_tags('Tags: <span class="label label-info">','</span> <span class="label label-info">','</span>'); ?><?php edit_post_link('edit', ' | ', ''); ?> 
</div>
<p class="byline author vcard"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php the_author(); ?></a> under <?php 
$category = get_the_category(); 
if($category[0]){
echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?>
</p> 
