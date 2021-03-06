<?php defined('ABSPATH') or die(); 

function adblocks_gallery_blocks_fields() {

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ce417112b1de',
	'title' => __('AD ACF Block 03: Gallery', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5dee669d7cdba',
			'label' => __('Content type', 'adblocks'),
			'name' => 'type',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'gallery' => __('Picture gallery', 'adblocks'),
				'content' => __('Content gallery', 'adblocks'),
			),
			'allow_null' => 0,
			'default_value' => 'gallery',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5ce4174ccc531',
			'label' => __('Picture gallery', 'adblocks'),
			'name' => 'picture_gallery',
			'type' => 'gallery',
			'instructions' => __('Select the pictures', 'adblocks'),
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dee669d7cdba',
						'operator' => '==',
						'value' => 'gallery',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'insert' => 'append',
			'library' => 'all',
			'min' => '',
			'max' => '',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5df79ad1037e0',
			'label' => __('Enlarge pictures', 'adblocks'),
			'name' => 'zoom',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dee669d7cdba',
						'operator' => '==',
						'value' => 'gallery',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5df79bb18c302',
			'label' => __('Enlarge pictures with Fancybox', 'adblocks'),
			'name' => 'fancy',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5df79ad1037e0',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5cecfef96837f',
			'label' => __('Content gallery', 'adblocks'),
			'name' => 'content_gallery',
			'type' => 'relationship',
			'instructions' => __('Select the pages or posts you wish to have in this gallery', 'adblocks'),
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dee669d7cdba',
						'operator' => '==',
						'value' => 'content',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				1 => 'page',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
		array(
			'key' => 'field_5dc12ae66f8fb',
			'label' => __('Legend display', 'adblocks'),
			'name' => 'legend',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'inside' => __('Inside', 'adblocks'),
				'outside' => __('Outside', 'adblocks'),
			),
			'allow_null' => 0,
			'default_value' => 'inside',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/gallery',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
}
add_action('acf/init', 'adblocks_gallery_blocks_fields');