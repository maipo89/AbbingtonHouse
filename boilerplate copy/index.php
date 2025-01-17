<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$category_name = get_query_var('category_name');
$post_name = get_query_var('name');

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 12, // Display 12 posts per page
    'order' => 'DESC',
    'orderby' => 'date',
    'paged' => $paged,
);

if (!empty($category_name)) {
    $args['category_name'] = $category_name;
}

if (!empty($post_name)) {
    $args['name'] = $post_name;
}

$query = new WP_Query($args);
?>
		<div class="blogs">
			<div class="blogs__inputs">
			    <div class="blogs__inputs__container">
				    <div class="search">
						<input id="search-blog" placeholder="Search..."/>
						<div class="search__list">
							<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
							  
							<a href="<?php the_permalink(); ?>">
                                 
								<?php the_title(); ?>
							</a>

							<?php endwhile; ?>

							<?php endif; ?>
						</div>
					</div>
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
											<a href="<?php echo get_home_url(); ?>/blogs/">
												<span class="custom-option">All Filters</span>
											</a>
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
									    <li>
											<a href="<?php echo get_home_url(); ?>/blogs/">All Authors</a>
										</li>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blogs__container">
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail'); ?>

            <div class="blogs__card">
                <a href="<?php the_permalink() ?>">
                    <div class="blogs__card__image" style="background-image: url('<?php echo ($image[0]) ?>');"></div>
                </a>
                <div class="blogs__card__description">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
                <div class="blogs__card__button">
                    <a class="button secondary-button" href="<?php the_permalink() ?>">Read More</a>
                </div>
            </div>

        <?php endwhile; ?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif; ?>
    </div>

    <!-- Pagination links outside the container -->
    <div class="pagination">
        <?php
        echo paginate_links(array(
            'total' => $query->max_num_pages,
        ));
        ?>
    </div>
</div>

<?php get_footer(); ?>