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

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php $key = 0; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $key++ ?>

				<?php if ($key == 1): 

					get_template_part( 'content', get_post_format() );

				else: ?>

					<article class="post-home">
						<h4>
							<a href="<?php echo the_permalink() ?>">
								<span class="entry-title"><?php echo the_title() ?></span>
								<span class="date"><?php echo the_date() ?></span>
							</a>
						</h4>
					</article>

				<?php endif; ?>

			<?php endwhile; ?>

			<?php urban_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>