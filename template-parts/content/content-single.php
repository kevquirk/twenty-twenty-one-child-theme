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

		<p>Have a poorly written technology, privacy and web-centric newsletter delivered straight to your inbox every month! <a href="https://metaletter.net">More info</a></p>

		<p><b>⚠️ Warning:</b> Reading my newsletter is likely to significantly reduce your intelligence. May contain nuts. 🥜</p>

	  <form action="https://newsletter.kevq.uk/subscribe" method="POST" accept-charset="utf-8">
		<label for="email" class="visuallyhidden">Email</label>
		<input type="email" placeholder="jane@example.com" name="email" id="email"/>
		<input type="hidden" name="list" value="IHoM4A4bdjmF8zo9CNJIvQ"/><br>
		<input type="hidden" name="subform" value="yes"/>
		<input type="submit" name="submit" value="Subscribe!" id="submit"/>
	  </form>
	</div>

	<h2>💬 Looking for comments?</h2>

	<p>I don't have comments on this site as they're difficult to manage and take up too much time. I'd rather concentrate on producing content than managing comments.</p>

	<p>Instead of leaving a comment, why not think about 📝 <a href="/guestbook">signing my guestbook</a> or ✉️ <a href="/contact">contacting me</a>.

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
