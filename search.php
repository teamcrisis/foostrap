<?php get_header(); ?>
      
      <div id="content" class="row">
      
        <div id="main" class="span12" role="main">
          
          <div class="page-header">
            <h1><span><?php _e('Search Results for','foostrap'); ?>:</span> <?= esc_attr(get_search_query()) ?></h1>
          </div>
          
          <?php get_template_part('loop') ?>
      
        </div> <!-- /main -->
    
      </div> <!-- /content -->

<?php get_footer(); ?>