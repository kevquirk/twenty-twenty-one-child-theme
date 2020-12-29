<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();
		
		?>
	
	<div class="subscribe-form">
	  <h3>📰 Cool people get newsletters!</h3>

	  <p>Do you want all your friends to look up to you and think “I wanna be like them!” If so, you need my newsletter! To find out more <a href="/newsletter">click here</a>.</p>

	  <p><small><b>Warning:</b> Reading my newsletter <b>will not</b> make you any cooler and is likely to significantly reduce your intelligence. May contain nuts 🥜.</small></p>

	  <form action="https://newsletter.kevq.uk/subscribe" method="POST" accept-charset="utf-8">
		<label for="email" class="visuallyhidden">Email</label>
		<input type="email" placeholder="jane@example.com" name="email" id="email"/>
		<input type="hidden" name="list" value="IHoM4A4bdjmF8zo9CNJIvQ"/><br>
		<input type="hidden" name="subform" value="yes"/>
		<input type="submit" name="submit" value="Subscribe!" id="submit"/>
	  </form>
	</div>
	
	<?php

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
