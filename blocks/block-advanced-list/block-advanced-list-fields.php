<?php defined('ABSPATH') or die(); 

function adblocks_advancedlist_block_fields() {

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e3c35c86cbe6',
	'title' => __('AD ACF Block 08: Advanced List', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5e3c482fe1b4c',
			'label' => __('Title level', 'adblocks'),
			'name' => 'title_level',
			'type' => 'select',
			'instructions' => __('Choose the title level for the list items', 'adblocks'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'span' => __('None', 'adblocks'),
				'h2' => __('h2 title', 'adblocks'),
				'h3' => __('h3 title', 'adblocks'),
				'h4' => __('h4 title', 'adblocks'),
				'h5' => __('h5 title', 'adblocks'),
				'h6' => __('h6 title', 'adblocks'),
			),
			'default_value' => array(
				0 => 'span',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5e3c35db16a77',
			'label' => __('Advanced List', 'adblocks'),
			'name' => 'list',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => __('Add a list item', 'adblocks'),
			'sub_fields' => array(
				array(
					'key' => 'field_5e3c360a16a78',
					'label' => __('Title', 'adblocks'),
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e3c362716a79',
					'label' => __('Description', 'adblocks'),
					'name' => 'desc',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5e3c363016a7a',
					'label' => __('Legend', 'adblocks'),
					'name' => 'legend',
					'type' => 'text',
					'instructions' => __('Could be a footnote', 'adblocks'),
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e3c363516a7b',
					'label' => __('Featured text', 'adblocks'),
					'name' => 'featured_text',
					'type' => 'text',
					'instructions' => __('Could be a date, a price, a letter, a number…', 'adblocks'),
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e3c364e16a7c',
					'label' => __('Icon', 'adblocks'),
					'name' => 'icon',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/advanced-list',
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
add_action('acf/init', 'adblocks_advancedlist_block_fields');