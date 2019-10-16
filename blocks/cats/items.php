<?php $main_cats = get_terms( array( 'taxonomy' => 'cats', 'parent' => 0, 'hide_empty' => false ) );
foreach ( $main_cats as $main_cat ): ?>
	<div class="col-md-3 mb-4">
		<a href="<?php echo get_term_link($main_cat) ?>">
			<div class="box" style="background: url('<?php echo carbon_get_term_meta($main_cat->term_id, 'crb_cats_img' ); ?>'); background-size: cover;">
				<div class="box_bg"></div>
				<div class="text-center text-white font_size_m font-weight-bold p-relative">
					<?php echo $main_cat->name ?>		
				</div>
			</div>
		</a>
	</div>
<?php endforeach; ?>