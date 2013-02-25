<?php
/*
Template Name: Right Sidebar Page
*/
?>

<?php get_header(); ?>
      
      <div id="content" class="row">
      
        <div id="main" class="span8" role="main">

          <?php get_template_part('loop') ?>
      
        </div> <!-- /main -->
        
        <div class="sidebar sidebar-right span4" role="complementary">
          
          <?php get_sidebar() ?>
          
        </div> <!-- /sidebar -->
    
      </div> <!-- /content -->

<?php get_footer(); ?>