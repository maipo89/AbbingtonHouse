<?php get_header(); ?>
		<div class="blogs">
			<div class="blogs__inputs">
			    <div class="blogs__inputs__container">
					<div class="dropdowns">

						<div class="category">
							<div class="select-wrapper">
								<div class="select">
									<input class="category-input" type="text" name="referral" value=""/>
									<div class="select__trigger"><span>Subject</span>
										<div class="arrow"></div>
									</div>
										<div class="custom-options">
											<?php $categories = get_categories(); ?>
											<?php foreach ($categories as $category) { ?>
												<a href="<?php echo get_home_url(); ?>/blogs/<?php echo($category->name) ?>">
													<span class="custom-option" data-value="<?php echo($category->name) ?>"><?php echo($category->name) ?></span>
												</a>
											<?php } ?>
										</div>
								</div>
							</div>
						</div>

						<div class="author">
							<div class="select-wrapper">
								<div class="select">
									<input class="author-input" type="text" name="referral" value=""/>
									<div class="select__trigger"><span>Author</span>
										<div class="arrow"></div>
									</div>
									<div class="custom-options">
									    <?php
											wp_list_authors(array('hide_empty' => true));
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="search">
						<input id="search-blog" placeholder="Search"/>
					</div>
				</div>
			</div>
			<div class="blogs__container">
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => -1, // Display all posts
					'order' => 'ASC', // Order posts alphabetically
					'orderby' => 'title' // Order by post title
				);

				$query = new WP_Query($args);

				
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
		
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>

					<div class="blogs__card">
						<div class="blogs__card__image" style="background-image: url('<?php echo($image[0]) ?>');"></div>
						<div class="blogs__card__description">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<div class="blogs__card__description__button">
								<a class="button" href="<?php the_permalink() ?>">Read More</a>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div>


<?php get_footer(); ?>
