<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<header class="page-header alignwide">
		<h2 class="">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Kết Quả tìm kiếm cho: "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h2>
	</header><!-- .page-header -->

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<div class="container d-flex flex-column justify-content-center">
			<?php
			// Start the Loop.
			if (have_posts()) :
				while (have_posts()) : the_post();
					?>
						<div class="col-lg-12 p-2">
							<h3 class="text-success">
								<?php the_title(); ?>
							</h3>
							<div>
								<?php the_content();?>
							</div>
						</div>
					<?php
				endwhile;
			endif;
		?>
	</div>
	
	<div class="text-center">
		<?php echo wp_pagenavi();?>
	</div>
<?php
	// Previous/next page navigation.
	 

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
