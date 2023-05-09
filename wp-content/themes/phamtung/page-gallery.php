<?php
/**
 * Template Name: gallery page template
 *
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
						<header class="custom-top-banner">
							<section class="banner__item background-image" style="background-image:url('<?php echo get_the_post_thumbnail_url()?>');">
								<div class="banner__overlay">
								</div>
							</section>
							<section class="content-banner">
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
															<div class="center__header">
																	<div class="center__header-tag"></div>
																	<h1 class="center__header-title">
																			Video Gallery
																	</h1>
															</div>
																<div class="center__item active">
																		<a href="#" class="center__item--link link--format">
																		
																			<div class="center__wrap">
																				<div class="row">
																					<?php
                                            $recent_posts = wp_get_recent_posts(array(
																								'numberposts' => 2,
                                                'orderby'     => 'post_date',
                                                'order'       => 'DESC', 
                                                'post_status' => 'publish' // Show only the published posts
                                            ));
                                            foreach( $recent_posts as $post_item ) : ?>
																						
																							<div class="col-lg-6 col-md-6 col-sm-6 mb-3">
																								<div class="center__wrap-img">
																									
																											<?php 
																												// Load value.
																												$iframe = get_field('video',$post_item['ID']);

																												// Use preg_match to find iframe src.
																												preg_match('/src="(.+?)"/', $iframe, $matches);
																												$src = $matches[1];

																												// Add extra parameters to src and replace HTML.
																												$params = array(
																														'controls'  => 0,
																														'hd'        => 1,
																														'autohide'  => 1
																												);
																												$new_src = add_query_arg($params, $src);
																												$iframe = str_replace($src, $new_src, $iframe);

																												// Add extra attributes to iframe HTML.
																												$attributes = 'frameborder="0"';
																												$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

																												// Display customized HTML.
																												echo $iframe;
																											?>
																										<a href="<?php echo get_permalink($post_item['ID']) ?>">
																												<?php echo get_the_title($post_item['ID']) ?>
																										</a>
																								
																								</div>
																							</div>
                                            <?php endforeach; ?>
																				</div>
																				<div class="more-btn__wrap">
																						<a
																								type="button"
																								href="<?php echo "http://".$_SERVER['HTTP_HOST']."/video-gallery";?>"
																								class="link--format more-btn"
																						>
																								<span class="more-btn__text">
																										see more videos
																								</span>
																						</a>
																				</div>
																			</div>
																		</a>
																</div>
														</div>

														<div class="col-12">
															<div class="center__header">
																	<div class="center__header-tag"></div>
																	<h1 class="center__header-title">
																			Image Gallery
																	</h1>
															</div>
																<div class="center__item active">
																		<a href="#" class="center__item--link link--format">
																		
																			<div class="center__wrap">
																				<div class="row">
																					<?php
                                            $recent_posts = wp_get_recent_posts(array(
																								'numberposts' => 2,
                                                'orderby'     => 'post_date',
                                                'order'       => 'DESC', 
                                                'post_status' => 'publish' // Show only the published posts
                                            ));
                                            foreach( $recent_posts as $post_item ) : ?>
																						
																						<div class="col-lg-6 col-md-6 col-sm-6 mb-3">
																								<div class="center__wrap-img img_post">
																									<a href="<?php echo get_permalink($post_item['ID']) ?>">
																											<img
																													src="<?php echo get_the_post_thumbnail_url($post_item['ID']); ?>"
																													alt=""
																													class="center__img"
																											/>
																										</a>
																								
																							</div>
																						</div>
                                            <?php endforeach; ?>
																				</div>
																				<div class="more-btn__wrap">
																						<a
																								type="button"
																								href="<?php echo "http://".$_SERVER['HTTP_HOST']."/image-gallery";?>"
																								class="link--format more-btn"
																						>
																								<span class="more-btn__text">
																										see more Image
																								</span>
																						</a>
																				</div>
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
													CALENDER
											</h3>
											<div class="calendar"></div>
									</div>
							</div>
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
