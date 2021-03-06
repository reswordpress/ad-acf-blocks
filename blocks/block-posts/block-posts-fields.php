<?php defined('ABSPATH') or die(); 

function adblocks_posts_block_fields() {

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5dfa2713d3b09',
	'title' => __('AD ACF Block 05: Posts', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5e4d49a6cbf08',
			'label' => __('Add introduction text or title', 'adblocks'),
			'name' => 'intro',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5e4d49bfcbf09',
			'label' => __('Introduction', 'adblocks'),
			'name' => 'intro_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5e4d49a6cbf08',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 0,
			'delay' => 0,
		),
		array(
			'key' => 'field_5dfa27874faba',
			'label' => __('Select one or many publications', 'adblocks'),
			'name' => 'posts_select',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => '',
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
			'key' => 'field_5dfa2c4cc8bb0',
			'label' => __('Content to show', 'adblocks'),
			'name' => 'content_show',
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
				'excerpt' => __('Excerpt', 'adblocks'),
				'content' => __('Full content', 'adblocks'),
			),
			'allow_null' => 0,
			'default_value' => 'excerpt',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5dfa2bcaa5483',
			'label' => __('Title level', 'adblocks'),
			'name' => 'title_level',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'h2' => __('H2', 'adblocks'),
				'h3' => __('H3', 'adblocks'),
				'h4' => __('H4', 'adblocks'),
				'h5' => __('H5', 'adblocks'),
				'h6' => __('H6', 'adblocks'),
			),
			'default_value' => array(
				0 => 'h2',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5e454fa2b2b02',
			'label' => __('Display post metas', 'adblocks'),
			'name' => 'metas',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/posts',
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
add_action('acf/init', 'adblocks_posts_block_fields');