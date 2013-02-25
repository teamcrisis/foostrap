<?php get_header(); ?>
			
			<div id="content" class="row">
			
				<div id="main" class="span12" role="main">
				  
				  <div class="page-header">
				    <?php 
				    $author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author')); 
				    ?>
				    <h1><span><?php _e('Posts by', 'foostrap'); ?></span> <?= get_the_author_meta('display_name', $author->ID) ?></h1>
				  </div>
					
					<?php get_template_part('loop') ?>
			
				</div> <!-- /main -->
    
      </div> <!-- /content -->

<?php get_footer(); ?>