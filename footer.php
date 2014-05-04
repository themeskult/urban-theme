<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package urban
 */
?>

	</div><!-- #content -->

	<div class="site-description content-area">
		<p>
			Portfolio and journal of <a href="http://twitter.com/gravityonmars">Ricardo Rauch</a>, a designer/developer. <br/>
			He lives in Buenos Aires,  works on <a href="http://auth0.com">Auth0</a> and writes about Design and Development.</p>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'urban_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'urban' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'urban' ), 'urban', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>