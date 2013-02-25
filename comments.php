<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<div class="alert alert-info"><?php _e('This post is password protected. Enter the password to view comments.','foostrap'); ?></div>
<?php
  return;
}
  
?>

<?php if ( have_comments() ) : ?>
  
	<?php if ( !empty($comments_by_type['comment']) ) : ?>
  	<h3 id="comments"><?php comments_number('<span>' . __("No","foostrap") . '</span> ' . __("Responses","foostrap") . '', '<span>' . __("One","foostrap") . '</span> ' . __("Response","foostrap") . '', '<span>%</span> ' . __("Responses","foostrap") );?> <?php _e("to","foostrap"); ?> &#8220;<?php the_title(); ?>&#8221;</h3>
  
  	<ul class="comment-nav">
  		<li><?php previous_comments_link( __("Older comments","foostrap") ) ?></li>
  		<li><?php next_comments_link( __("Newer comments","foostrap") ) ?></li>
   	</ul>
  	
  	<ol class="comment-list">
  		<?php wp_list_comments('type=comment'); ?>
  	</ol>
	
	<?php endif; ?>
	
	<?php if ( ! empty($comments_by_type['pings']) ) : ?>
		<h3 id="pings">Trackbacks/Pingbacks</h3>
		
		<ol class="ping-list">
			<?php wp_list_comments('type=pings'); ?>
		</ol>
		
	<?php endif; ?>
	
	<ul class="comment-nav">
  		<li><?php previous_comments_link( __("Older comments","foostrap") ) ?></li>
  		<li><?php next_comments_link( __("Newer comments","foostrap") ) ?></li>
	</ul>
  
<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
    	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed 
		$suppress_comments_message = of_get_option('suppress_comments_message');

		if (is_page() && $suppress_comments_message) : ?>
			
		<?php else : ?>
		
			<!-- If comments are closed. -->
			<p class="alert alert-info"><?php _e("Comments are closed","foostrap"); ?>.</p>
			
		<?php endif; ?>

	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form">

	<h3><?php comment_form_title( __("Leave a Reply","foostrap"), __("Leave a Reply to","foostrap") . ' %s' ); ?></h3>

	<div id="cancel-comment-reply">
		<p class="small"><?php cancel_comment_reply_link( __("Cancel","foostrap") ); ?></p>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  	<div class="help">
  		<p><?php _e("You must be","foostrap"); ?> <a href="<?= wp_login_url( get_permalink() ) ?>"><?php _e("logged in","foostrap"); ?></a> <?php _e("to post a comment","foostrap"); ?>.</p>
  	</div>
  	
	<?php else : ?>
  	<form action="<?= get_option('siteurl') ?>/wp-comments-post.php" method="post" class="form-vertical" id="comment-form">
  
    	<?php if ( is_user_logged_in() ) : ?>
    
    	  <p class="comments-logged-in-as"><?php _e("Logged in as","foostrap"); ?> <a href="<?= get_option('siteurl') ?>/wp-admin/profile.php"><?= $user_identity ?></a>. <a href="<?= wp_logout_url(get_permalink()) ?>" title="<?php _e("Log out of this account","foostrap"); ?>"><?php _e("Log out","foostrap"); ?> &raquo;</a></p>
    
    	<?php else : ?>
    	

  			<div class="control-group">
  			  <label for="author"><?php _e("Name","foostrap"); ?> <?php if ($req) echo "(required)"; ?></label>
  			  <div class="input-prepend">
  			  	<span class="add-on"><i class="icon-user"></i></span><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e("Your Name","foostrap"); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
  			  </div>
  		  </div>
  
  			<div class="control-group">
  			  <label for="email"><?php _e("Mail","foostrap"); ?> <?php if ($req) echo "(required)"; ?></label>
  			  <div class="input-prepend">
  			  	<span class="add-on"><i class="icon-envelope"></i></span><input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e("Your Email","foostrap"); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
  			  	<span class="help-inline">(<?php _e("will not be published","foostrap"); ?>)</span>
  			  </div>
  		  </div>
  
  			<div class="control-group">
  			  <label for="url"><?php _e("Website","foostrap"); ?></label>
  			  <div class="input-prepend">
  			    <span class="add-on"><i class="icon-home"></i></span><input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e("Your Website","foostrap"); ?>" tabindex="3" />
  			  </div>
  		  </div>
    
    	<?php endif; ?>
    	
    	<div class="control-group">
    		<div class="input">
    			<textarea name="comment" id="comment" placeholder="<?php _e("Your Comment Here...","foostrap"); ?>" tabindex="4"></textarea>
    		</div>
    	</div>
    	
    	<div class="form-actions">
    	  <input class="btn btn-primary" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Submit Comment","foostrap"); ?>" />
    	  <?php comment_id_fields(); ?>
    	</div>
    	
    	<?php 
    		do_action('comment_form()', $post->ID);     	
    	?>
  	
  	</form>
	
	<?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
