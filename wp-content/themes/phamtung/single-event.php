<?php
/**
 * Template Name: Event single Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
						<header class="custom-top-banner">
							<section class="banner__item background-image-single-post" style="background-image:url('<?php echo get_the_post_thumbnail_url()?>');">
								<div class="banner__overlay">
								</div>
							</section>
							<section class="content-banner-single-post">
								<h1 class="author"><?php echo get_the_title(); ?></h1>
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
												<div class="center__header">
												</div>

												
												<div id="mainContentCenter" class="row">
														<div class="col-12">
																<div class="center__item active">
																		<a href="#" class="center__item--link link--format">
																			<div class="center__wrap">
																				<?php if ( have_posts() ) :?>
																					<?php while ( have_posts() ) : the_post(); ?>
																						<div class="col-lg-12">
																							<div class=" border-0">
																									<div class=" text-dark p-5">
                                                    <img class="img-single-post" src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                                    
																										<?php the_content();?>
																									</div>
																							</div>
																						</div>
																					<?php endwhile; ?>
																				<?php else: ?>
																					<?php  _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
																				<?php endif; ?>
																			</div>
																		</a>
																</div>
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
											<h3 class="content__title">
													MASTERS AND TEACHERS
											</h3>
											<?php
												$recent_posts = wp_get_recent_posts(array(
														'numberposts' => 4,// Number of recent posts thumbnails to display
														'offset'      => 1,
														'orderby'     => 'post_date',
														'order'       => 'DESC', 
														'post_status' => 'publish' // Show only the published posts
												));
												foreach( $recent_posts as $post_item ) : ?>
												<div class="col-lg-12 col-md-12 col-sm-12 col-12">
														<div class="center__item">
																<a href="#" class="center__item--link link--format">
																		<div class="center__wrap">
																				<div class="center__tag" >
																						Sport
																				</div>
																				<div class="center__wrap-img img_post">
																						<img
																								src="<?php echo get_the_post_thumbnail_url($post_item['ID']); ?>"
																								alt=""
																								class="center__img"
																						/>
																				</div>
																				<h3 class="center__title">
																						<?php echo $post_item['post_title'] ?>
																				</h3>
																				<div class="center__info">
																						<p class="center__time" >
																								<?php echo $post_item['post_date_gmt'] ?>
																						</p>
																						<p class="center__author" >
																						<?php
																								$author = get_the_author_meta( 'display_name', $post_item['post_author'] );
																								echo $author;
																						?>
																						</p>
																				</div>
																		</div>
																</a>
														</div>
												</div>
												<?php endforeach; ?>
									</div>
							</div>
							<div class="content__panel">
									<div class="content__panel-wrap">
											<h3 class="content__title">
													Member Federation
											</h3>
											<?php 
													$rows = get_field('member');
													if( $rows ) {
															echo '<ul class=" list-unstyled">';
															foreach( $rows as $row ) {
																	?>
																			<li>
																					<a class="text-dark " href="<?php echo $row['link-member'];?>"><?php echo $row['name-member'];?></a>
																			</li>
																	<?php
															}
															echo '</ul>';
													}
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