<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<p><a href="/disclaimer">Disclaimer</a> | <a href="/license-information">License Info</a> | <a href="/privacy">Privacy</a> | <a href="/buy-me-a-coffee">Coffee</a> | <a href="/rss-feeds">RSS</a></p>
			</div><!-- .site-name -->
			<div class="powered-by">
				<p>All work licensed under <b>CC BY-SA 4.0</b> unless otherwise stated.</p>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->

		<div class="kb-club">
			<p><a href="https://512kb.club"><span class="kb-club-no-bg">512KB Club</span><span class="kb-club-bg">Blue Team</span></a></p>
		</div>
		<!-- Plausible analytics -->
    <script async defer data-domain="kevq.uk" src="https://stats.kevq.uk/js/index.js"></script>

		<!-- Prism syntax highlighting -->
		<link href="/wp-content/themes/twentytwentyone-child/prism.css" rel="stylesheet" />
		<script async defer src="/wp-content/themes/twentytwentyone-child/prism.js"></script>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
