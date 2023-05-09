<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package phamtung
 */

?>
<?php
    get_header();
		?>
		
		<div class="main">
				<!-- MAIN CONTENT WRAP -->
				<div class="container g-0">
					<div class="content">
						<div class="row">
							<!-- LEFT -->
							<div class="content__center col-sm-12 col-md-12 col-lg-12">
										<!-- CENTER CONTENT -->
										<div class="content__panel">
												<div class="center__panel-wrap">
														<div class="center__header ">
															<div class="center__header-tag"></div>
															<h1 class="center__header-title ">
																<a class="" href="<?php echo get_site_url()."/category/all-news/"; ?>">All News</a>
															</h1>
														</div>
		
														
														<div id="mainContentCenter" class="row">
														<?php if ( have_posts() ) :?>
															<?php while ( have_posts() ) : the_post(); ?>
															<!-- ------------- -->
															<div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
																				<div class="center__item">
																								<div class="center__wrap">
																								
																										<div class="center__wrap-img img_post">
																												<img
																														src="<?php echo get_the_post_thumbnail_url(); ?>"
																														alt=""
																														class="center__img"
																												/>
																										</div>
																										
																										<a href="<?php echo get_permalink() ?>">
																												<h3 class="center__title">
																														<?php echo get_the_title(); ?>
																												</h3>
																										</a>
																										<div class="center__info">
																												<p class="center__time" >
																														<?php echo get_the_date(); ?>
																												</p>
																												<p class="center__author" >
																												<?php
																														$author = get_the_author_meta( 'display_name', $post_item['post_author'] );
																														echo $author;
																												?>
																												</p>
																										</div>
																								</div>
																				</div>
																				
																		</div>
															<?php endwhile; ?>
														<?php else: ?>
															<?php  _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
														<?php endif; ?>
															<div class="text-center">
																<?php echo wp_pagenavi(); ?>
															</div>  
														</div>
												</div>
										</div>
		
		
									<!-- CENTER CONTENT -->
							</div>
							<!-- LEFT -->
		
					</div>
				</div>
				<!-- MAIN CONTENT WRAP -->
			</div>
		
		
		<?php
		get_footer();
		