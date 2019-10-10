<?php get_header(); ?>

<div class="welcome" style="background: url(<?php echo carbon_get_term_meta(get_queried_object_id(), 'crb_cats_img') ?>); background-size: cover;">
	<div class="welcome_content container">
		<div class="row mb-3">
			<div class="col-md-12">
				<h1 class="text-center font-weight-bold text-white text-capitalize p-relative"><?php single_term_title(); ?></h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="lead text-center text-white box_grey p-relative">
					<?php echo carbon_get_term_meta(get_queried_object_id(), 'crb_cats_description') ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="container mb-5">
		<div class="wrapper">
			<div class="row mb-3">
				<div class="col-md-12">
					<h2>Все мастера</h2>
				</div>
			</div>
			<div class="row mb-3">
				<?php 
					$current_term = get_queried_object_id();
					$custom_query_masters = new WP_Query( array( 
						'post_type' => 'masters',
						'posts_per_page' => 12,
						'tax_query' => array(
					    array(
				        'taxonomy' => 'cats',
						    'terms' => $current_term,
				        'field' => 'term_id',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
					) );
					if ($custom_query_masters->have_posts()) : while ($custom_query_masters->have_posts()) : $custom_query_masters->the_post(); ?>
					<div class="col-md-12">
						<?php get_template_part('blocks/masters/items') ?>	
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-12">
					<?php echo carbon_get_term_meta(get_queried_object_id(), 'crb_cats_content') ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>