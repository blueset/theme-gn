<form role="search" method="get" id="searchform" class="form-search" action="<?php echo home_url('/'); ?>">
   <div class="input-append">
    <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>" class="input-xxlarge search-query">
    <button type="submit" id="searchsubmit" class="btn"><i class="icon-search"></i></button>
  </div>
</form>