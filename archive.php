<?php get_header(); ?>
      
      <div id="content" class="row">
      
        <div id="main" class="span12" role="main">
        
          <div class="page-header">
            <?php if (is_category()) { ?>
            <h1><?php single_cat_title(); ?></h1>
            
            <?php } elseif (is_tag()) { ?> 
            <h1><?php single_tag_title(); ?></h1>
            
            <?php } elseif (is_author()) { ?>
            <h1><?php get_the_author_meta('display_name'); ?></h1>
            
            <?php } elseif (is_day()) { ?>
            <h1><?php the_time('l, F j, Y'); ?></h1>
            
            <?php } elseif (is_month()) { ?>
            <h1><?php the_time('F Y'); ?></h1>
              
            <?php } elseif (is_year()) { ?>
            <h1><?php the_time('Y'); ?></h1>
              
            <?php } ?>
          </div>
          
          <?php get_template_part('loop') ?>
      
        </div> <!-- /main -->
    
      </div> <!-- /content -->

<?php get_footer(); ?>