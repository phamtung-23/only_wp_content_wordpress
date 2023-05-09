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
							<div class="content__center col-sm-12 col-md-12 col-lg-9">
									<header class="custom-top-banner">
									<section class="banner__item background-image" style="background-image:url('<?php echo get_the_post_thumbnail_url()?>');">
										<div class="banner__overlay">
										</div>
									</section>
									<section class="content-banner">
										<h1 class="author text-light"><?php
											 the_category();
										 ?></h1>
										<div class="box d-flex justify-content-between align-items-center">
											<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
											<div class="d-flex align-items-center">
												<div class="mr-5">Share on:</div>
												<div class="m-4"><i class="fab fa-facebook"></i></div>
												<div class="m-4"><i class="fas fa-images"></i></div>
												<div class="m-4"><i class="fas fa-envelope"></i></div>
											</div>
										</div>
									</section>
								</header>
										<!-- CENTER CONTENT -->
										<div class="content__panel">
												<div class="center__panel-wrap">
													
		
														
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
							<div class="content__right col-sm-12 col-md col-lg-3">
				
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
					</div>
				</div>
				<!-- MAIN CONTENT WRAP -->
			</div>
		
		
		<?php
		get_footer();
		