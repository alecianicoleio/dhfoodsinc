<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="blog-articles" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="vc_row wpb_row vc_row-fluid section-wrap section-card-left" id="post-<?php the_ID(); ?>" >

									<div class="wpb_column vc_column_container vc_col-sm-6">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">
												<div class="wpb_single_image wpb_content_element vc_align_left">
													<figure class="wpb_wrapper vc_figure">
														<div class="vc_single_image-wrapper vc_box_border_grey">
															<?php 
																if ( has_post_thumbnail() ) {
																	the_post_thumbnail('full');
															} ?>
														</div>
													</figure>
												</div>
											</div>
										</div>
									</div>

									<div class="wpb_column vc_column_container vc_col-sm-6">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h2><?php the_title(); ?></h2>
														<p><?php the_excerpt(); ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
