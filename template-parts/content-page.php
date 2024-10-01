<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corporate
 */

	$background_color = get_theme_mod('page_hero_bg', '#061B75');
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page__hero" style="background-color: <?php echo esc_attr($background_color); ?>;">
	
		<!-- Hero content section -->
		<div class="page__hero-content">
			<div class="page__hero-content--title" data-aos="fade-down" data-aos-duration="3000">
				<h1><?php the_title(); ?></h1>
			</div>	
		</div>
		
	</header><!-- .entry-header -->

	<div class="feature__image">
		<?php corporate_post_thumbnail(); ?>
	</div>

	<div class="entry-content">
		<div class="entry-content__the_content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'corporate' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'corporate' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
