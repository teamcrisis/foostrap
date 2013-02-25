<form action="<?=home_url( '/' ) ?>" method="get" class="form-stacked">
  <fieldset>
    <div class="input-append">
      <input type="text" name="s" id="search" placeholder="<?php _e('Search','foostrap'); ?>" value="<?php the_search_query(); ?>" />
      <button type="submit" class="btn"><i class="icon-search"></i></button>
    </div>
  </fieldset>
</form>