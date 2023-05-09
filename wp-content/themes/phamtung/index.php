<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package phamtung
 */

get_header();
?>

<div class="main">
		<!-- MAIN CONTENT WRAP -->
		<div class="container g-0">
			<div class="content">
				<div class="row">
					<!-- LEFT -->
					<div class="content__center col-sm-12 col-md-12 col-lg-9">
								<!-- CENTER CONTENT -->
								<div class="content__panel">
										<div class="center__panel-wrap">
												<div class="center__header">
													<div class="center__header-tag"></div>
													<h1 class="center__header-title">
														<a href="<?php echo get_site_url()."/category/all-news/"; ?>">All News</a>
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

					<!-- RIGHT -->
					<div class="content__right col-sm-12 col-md col-lg-3">
						<div class="content__panel">
								<div class="content__panel-wrap">
										<h3 class="content__title">Quick link</h3>
										<div class="d-flex flex-column">
										<?php 
												$links = get_field('quick-link','options');
												if(  $links ): ?>
														<a class="d-flex justify-content-between align-items-center" href="<?php echo ($links['link-1']['url']); ?>">
																<div>
																		<?php echo($links['link-1']['title']); ?>
																</div>
																<i class="fas fa-chevron-right"></i>
														</a>
														<a class="d-flex justify-content-between align-items-center" href="<?php echo ($links['link-2']['url']); ?>">
																<div>
																		<?php echo($links['link-2']['title']); ?>
																</div>
																<i class="fas fa-chevron-right"></i>
														</a>
														<a class="d-flex justify-content-between align-items-center" href="<?php echo ($links['link-3']['url']); ?>">
																<div>
																		<?php echo($links['link-3']['title']); ?>
																</div>
																<i class="fas fa-chevron-right"></i>
														</a>
												<?php endif; 
										?>
										</div>
								</div>
						</div>
						<div class="content__panel">
								<div class="content__panel-wrap">
										<h3 class="content__title">Follow us on</h3>
										<?php 
												$images = get_field('gallery-icon','options');
												if( $images ): ?>
														<ul class="list-unstyled d-flex justify-content-center mr-2 ml-2">
																<?php foreach( $images as $image ): ?>
																		<li class="m-3">
																				<a href="<?php echo esc_url($image['caption']); ?>">
																						<img width="30" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
																				</a>
																		</li>
																<?php endforeach; ?>
														</ul>
												<?php endif;
										?>
								</div>
						</div>

						<div class="content__panel content__panel--background">
								<div class="content__panel-wrap">
										<h3 class="content__title">
												the founder
										</h3>
										<?php 
												$image = get_field('img-founder','options');
												if( !empty( $image ) ): ?>
														<img class="img-founder" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo ($image['alt']); ?>" />
														<h4 class=""><?php echo ($image['title']); ?></h4>
														<p><?php echo ($image['description']); ?></p>
												<?php endif; 
										?>
										
								</div>
						</div>
				
						<div class="content__panel content__panel--background">
								<div class="content__panel-wrap">
										<h3 class="content__title">
												VOVINAM PHILOSOPHY
										</h3>
										<?php
												$hero = get_field('philosophy','options');
												if( $hero ): ?>
														<div id="hero">
																<div class="content">
																		<?php echo($hero['content'])?>
																</div>
																<div class="d-flex justify-content-end">
																		<img  class="img-philosophy" src="<?php echo $hero['img-philosophy']['url']; ?>" alt="">
																</div>
														</div>
												<?php endif; 
										?>
								</div>
						</div>
					</div>
					<!-- RIGHT -->
			</div>
		</div>
		<!-- MAIN CONTENT WRAP -->
	</div>


<?php
get_footer();
