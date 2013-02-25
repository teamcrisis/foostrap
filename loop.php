<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
		  
		  <header>
      
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'foostrap' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
  
        <p class="entry-meta">
          <?php _e('Posted', 'foostrap'); ?> <time datetime="<?= the_time('Y-m-j') ?>" pubdate><?php the_date(); ?></time> 
          <?php _e('by', 'foostrap'); ?> <?php the_author_posts_link(); ?> <?php _e('under', 'foostrap'); ?> <?php the_category(', '); ?>
        </p>
      
      </header>
      
      <section>
        
        <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
        <div class="entry-content entry-summary">
          <?php the_excerpt(); ?>
        </div>
        
        <?php else : ?>
        <div class="entry-content">
          <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'foostrap' ) ); ?>
          <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'foostrap' ), 'after' => '</div>' ) ); ?>
        </div>
        
        <?php endif; ?>
        
      </section>      

		  <footer>
		    
				<?php the_tags('<p class="entry-tags"><span class="tags-title">' . __('Tags', 'foostrap') . ':</span> ', ' ', '</p>'); ?>
				
		  </footer>
		  
		</article>

		<?php comments_template(); ?>

<?php endwhile; // End the loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  
  <nav class="prev-next">
    <ul>
      <li class="prev-link"><?php next_posts_link( __('&laquo; Older Entries', 'foostrap') ) ?></li>
      <li class="next-link"><?php previous_posts_link( __('Newer Entries &raquo;', 'foostrap') ) ?></li>
    </ul>
  </nav>
  
<?php endif; ?>

<?php else : /* No post found */ ?>
  
  <article id="post-not-found">
    <header>
      <h2 class="entry-title"><?php _e('Not Found', 'foostrap'); ?></h2>
    </header>
    <section>
      <div class="entry-content">
        <p><?php _e('Sorry, What you were looking for is not here, but maybe try looking again or search using the form below.', 'foostrap'); ?></p>
        <?php get_search_form(); ?>
      </div>
    </section>
    <footer>
    </footer>
  </article>
  
<?php endif; ?>


