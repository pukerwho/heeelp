<?php
/*
Template Name: ГЛАВНАЯ страница
*/
?>

<?php get_header(); ?>

<div class="welcome" style="background: url(<?php echo get_the_post_thumbnail_url() ?>); background-size: cover;">
	<div class="welcome_content container">
		<div class="row mb-3">
			<div class="col-md-12">
				<h1 class="text-center font-weight-bold text-white text-capitalize p-relative">Домашний мастер в Киеве</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="lead text-center text-white box_grey p-relative">
					Услуги, фото, отзывы, телефоны.<br>Данный каталог собран с целью помочь жителями в Киеве и Киевской области в поисках подходящего мастера. Все специалисты, которые представлены на сайте прошли нашу проверку, но мы будем рады за вашу обратную связь - это поможет улучшить данный каталог. 
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
					<div>
						<h2>Популярные категории</h2>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<?php get_template_part('blocks/cats/items') ?>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">
					<h2>Лучшие мастера</h2>
				</div>
			</div>
			<div class="row">
				<?php 
					$custom_query_masters = new WP_Query( array( 
						'post_type' => 'masters',
						'posts_per_page' => 12
					) );
					if ($custom_query_masters->have_posts()) : while ($custom_query_masters->have_posts()) : $custom_query_masters->the_post(); ?>
					<div class="col-md-12">
						<?php get_template_part('blocks/masters/items') ?>	
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="container mb-5">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; else: ?>
						<p><?php _e('Ничего не найдено'); ?></p>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>