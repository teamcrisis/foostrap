<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
      
      <div id="content" class="row">
      
        <div id="main" class="span12" role="main">
          
          <div class="hero-unit">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description', 'display' ); ?></p>
          </div>

          <?php get_template_part('loop') ?>
      
        </div> <!-- /main -->
    
      </div> <!-- /content -->

<?php get_footer(); ?>