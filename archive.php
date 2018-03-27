<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Romantic
 */

get_header();
?>
		<?php if ( have_posts() ) : ?>

			<!-- CONTENTS -->
			<section class="feature-image  feature-image-default-alt" data-type="blackground" data-speed="2">
				<?php 
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<small class="archive-description">', '</small>' );
				?>
			</section>		

			<div class="container">
				<div id="primary" class="row">
					<main id="content" class="col-sm-8">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();
						?>
					</main><!-- #content -->

					<!-- SIDEBAR -->
					<aside class="col-sm-4">
						<?php get_sidebar(); ?>
					</aside>

				</div><!-- #primary -->
			</div><!-- #container -->
			
		<?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
<?php get_footer(); ?>
