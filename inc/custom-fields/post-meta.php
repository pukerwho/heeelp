<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'masters' )
    ->add_fields( array(
    	Field::make( 'image', 'crb_master_avatar', 'Аватарка' )->set_value_type( 'url'),
      Field::make( 'media_gallery', 'crb_portfolio_photos', 'Портфолио' )->set_type( array( 'image' ) )
  ) );
}

?>