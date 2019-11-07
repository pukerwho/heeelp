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
	<?php 
		$term_current_id = get_queried_object_id();
		$term_children = get_term_children($term_current_id, 'cats');
	?>
	<?php if ( !empty( $term_children ) && !is_wp_error( $term_children ) ): ?>
		<div class="container mb-5">
			<div class="wrapper">
				<div class="row mb-3">
					<div class="col-md-12">
						<h2>Рубрики</h2>
					</div>
				</div>
				<div class="row">
					<?php foreach($term_children as $child): ?>
						<?php $child_term = get_term_by( 'id', $child, 'cats' ); ?>
						<div class="col-md-4 mb-3">
							<a href="<?php echo get_term_link($child_term) ?>">
								<div class="box" style="background: url('<?php echo carbon_get_term_meta($child_term->term_id, 'crb_cats_img' ); ?>'); background-size: cover;">
									<div class="box_bg"></div>
									<div class="text-center text-white font_size_m font-weight-bold p-relative">
										<?php echo $child_term->name ?>		
									</div>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="container mb-5">
		<div class="wrapper">
			<div class="row mb-3">
				<div class="col-md-12">
					<h2>Мастера</h2>
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
					<div class="text">
						<?php echo carbon_get_term_meta(get_queried_object_id(), 'crb_cats_content') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>