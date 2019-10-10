<div class="master-item d-flex justify-content-between">
	<div class="master-item__info d-flex align-items-center">
		<div class="master-item_avatar mr-4">
			<img src="<?php echo carbon_get_the_post_meta('crb_master_avatar') ?>" alt="">
		</div>	
		<div class="master-item_content">
			<div class="master-item_title font_size_m">
				<?php the_title(); ?>
			</div>
			<div class="master-item_category mr-5">
				Находится в категориях:
				<?php 
					$terms = get_the_terms( $post->ID, 'cats' );
					foreach($terms as $term): ?>
						<li>
							<a href="/cats/<?php echo $term->slug ?>" class="font_size_s"><?php echo $term->name; ?></a>	
						</li>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="master-item_portfolio d-flex justify-content-center flex-column">
			<div class="lead mb-2">Фото работ:</div>
			<div class="d-flex">
				<?php 
					$events_photos = carbon_get_the_post_meta('crb_portfolio_photos');
					foreach ( array_slice($events_photos, 0, 3) as $events_photo ): ?>
					<?php $photo_src = wp_get_attachment_image_src($events_photo, 'large'); ?>
					<li>
						<a href="<?php echo $photo_src[0]; ?>" data-lightbox="territory">
				    	<img src="<?php echo $photo_src[0]; ?>" />
				    </a>
				  </li>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="master-item__order d-flex justify-content-center flex-column">
		<a href="<?php the_permalink() ?>">
			<div class="master-item_btn btn_help btn_blue mb-3">
				Подробнее
			</div>
		</a>
		<div class="master-item_count">
			122 просмотров
		</div>
	</div>
</div>
