<?php defined('ABSPATH') or die(); 

function adblocks_cta_block_fields() {

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ced02f02266d',
	'title' => __('AD ACF Block 04: CTA', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5ced030883dea',
			'label' => __('Text area', 'adblocks'),
			'name' => 'text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5ced030883deb',
			'label' => __('Link', 'adblocks'),
			'name' => 'link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cta',
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

acf_add_local_field_group(array(
	'key' => 'group_5df790978cce6',
	'title' => __('Block Options: Background', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5def86903f693',
			'label' => __('Background options', 'adblocks'),
			'name' => '',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'open' => 0,
			'multi_expand' => 0,
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5def7abd0da94',
			'label' => __('Background color', 'adblocks'),
			'name' => 'bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5def85893f691',
			'label' => __('Background image', 'adblocks'),
			'name' => 'bg_img',
			'type' => 'image',
			'instructions' => __('Choose a picture or a pattern', 'adblocks'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ced030883ded',
			'label' => __('Text color', 'adblocks'),
			'name' => 'white_text',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => __('Switch text to white', 'adblocks'),
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5def80e9a2aca',
			'label' => __('Keep content centered', 'adblocks'),
			'name' => 'center_max',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
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
			'key' => 'field_5def85a53f692',
			'label' => __('Repeat pattern', 'adblocks'),
			'name' => 'repeat',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
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
			'key' => 'field_5ced030883df0',
			'label' => __('Overlay', 'adblocks'),
			'name' => 'overlay',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => __('Add an overlay over the background image', 'adblocks'),
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5def85213f68f',
			'label' => __('Background options - end', 'adblocks'),
			'name' => '',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'open' => 0,
			'multi_expand' => 0,
			'endpoint' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/text',
			),
		),
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/textimg',
			),
		),
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/gallery',
			),
		),
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cta',
			),
		),
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/posts',
			),
		),
	),
	'menu_order' => 20,
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
add_action('acf/init', 'adblocks_cta_block_fields');