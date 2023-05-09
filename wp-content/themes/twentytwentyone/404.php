<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 
?>

<?php get_header();?>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<img width="100%" class="rounded" src="https://pyxis.nymag.com/v1/imgs/d67/377/dc02b103fe29d8f6a3f9fb287b75bdb552-19-inside-out-cry.rsquare.w700.jpg" alt="">
			</div>
			<div class="col-lg-7 h-100 d-flex flex-column align-items-center ">
				<h2>A W W W... Don't Cry!</h2>
				<header class="page-header alignwide">
					<h3 class="page-title"><?php esc_html_e( 'Page 404 Nothing here', 'twentytwentyone' ); ?></h3>
				</header><!-- .page-header -->
		
				<div class="error-404 not-found default-max-width">
					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</div>
		</div>
	</div>
	<?php get_footer();?>





