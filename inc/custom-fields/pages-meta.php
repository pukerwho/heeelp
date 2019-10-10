<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'Tour' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_tour.php' )
    ->add_fields( array(
    	Field::make( 'rich_text', 'crb_tour_title', __('Заголовок') ),
    	Field::make( 'image', 'crb_tour_photo', __('Фото') ),
    	Field::make( 'complex', 'crb_tour_services', __( 'Услуги и Сервисы' ) )
		    	->add_fields( array(
		        Field::make( 'text', 'crb_tour_services_text', __('Услуга') ),
		    ) ),
    ) );
}

?>