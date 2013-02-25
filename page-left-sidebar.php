<?php
/*
Template Name: Left Sidebar Page
*/
?>

<?php get_header(); ?>
      
      <div id="content" class="row">
        
        <div class="sidebar sidebar-left span4" role="complementary">
          
          <?php get_sidebar() ?>
          
        </div> <!-- /sidebar -->
      
        <div id="main" class="span8" role="main">

          <?php get_template_part('loop') ?>
      
        </div> <!-- /main -->
    
      </div> <!-- /content -->

<?php get_footer(); ?>