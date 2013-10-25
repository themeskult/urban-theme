<?php
/**
 * @package urban
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php urban_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'urban' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">

		<div class="author-box">
			<?php echo get_avatar(get_the_author_meta( 'ID' )); ?> 
			<h3><?php echo get_the_author() ?></h3>
			<p><?php echo the_author_description() ?></p>
			<iframe allowtransparency="true" frameborder="0" scrolling="no"
src="//platform.twitter.com/widgets/follow_button.html?screen_name=gravityonmars&show_count=false"
style="width:150px; height:20px;"></iframe>
		</div>
		<?php edit_post_link( __( 'Edit', 'urban' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
