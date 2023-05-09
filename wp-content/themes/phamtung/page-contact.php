<?php
/**
 * Template Name: Contact Template
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
														<div class="col-lg-6 col-md-12">
																<div class="center__item active">
																<h4>TỔ ĐƯỜNG VOVINAM VIỆT VÕ ĐẠO</h4>
																<h6>31 Sư Vạn Hạnh, Phường 3, Quận 10, Thành Phố Hồ Chí Minh, Việt Nam</h6>
																	<form>
																		<div class="form-group mt-3 mb-3">
																			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
																		</div>
																		<div class="form-group mt-3 mb-3">
																			<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter comment" rows="3"></textarea>
																		</div>
																		<button type="submit" class="btn btn-info mt-3 mb-3">Submit</button>
																	</form>
																</div>
														</div>
														<div class="col-lg-6 col-md-12">
																<div class="center__item active">
																	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.651656387079!2d106.67020447557962!3d10.761306989386535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3afb4e5eb%3A0xe2f5375402c7f369!2zVOG7lSDEkMaw4budbmcgVm92aW5hbSBWaeG7h3QgVsO1IMSQ4bqhbw!5e0!3m2!1svi!2s!4v1681445006099!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
							<div class="content__panel">
									<div class="content__panel-wrap">
											<h3 class="content__title">
													Member Federation
											</h3>
											<?php 
													$rows = get_field('member','options');
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
