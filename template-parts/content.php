<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Romantic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-detail">
				<i class="fa fa-user"></i> <?php the_author(); ?> 
				<i class="fa fa-clock-o"></i><time> <?php the_date(); ?> </time>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<i class="fa fa-tags"></i> <?php the_tags(); ?>

				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%') ; ?></a>
				</div>

				<?php edit_post_link('Edit', '<i class="fa fa-pencil"></i> ', '') ?>
			</div>  <!-- post-detail -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!-- post-image -->
	<?php if( has_post_thumbnail() ) { ?>
		<div class="post-image">
				<?php the_post_thumbnail(); ?>
		</div>
	<?php } ?>

	<!-- post-body -->
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div>

	<?php // bootstrapwordpress_post_thumbnail(); ?>

	<footer class="entry-footer">
		<?php //bootstrapwordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
