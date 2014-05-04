<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package urban
 */

get_header(); 

  $sticky = get_option( 'sticky_posts' );

    rsort( $sticky );

    // $sticky = array_slice( $sticky, 0, 10 );

     query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );


?>

	<div id="primary" >
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php $key = 0; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $key++ ?>

				<article class="post-home">
					<h4 class="content-area">
						<a href="<?php echo the_permalink() ?>">
							<span class="date"><?php echo the_date() ?></span>
							<span class="entry-title"><?php echo the_title() ?></span>
						</a>
					</h4>
				</article>


			<?php endwhile; ?>

			<?php urban_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>