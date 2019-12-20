<?php defined('ABSPATH') or die(); 

function gallery_blocks_fields() {

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5df790c75a479',
	'title' => __('Block Options: Columns', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5df799d4eb0b8',
			'label' => __('Number of Columns', 'adblocks'),
			'name' => 'columns',
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
				'1col' => __('1 column', 'adblocks'),
				'2cols' => __('2 columns', 'adblocks'),
				'3cols' => __('3 columns', 'adblocks'),
				'4cols' => __('4 columns', 'adblocks'),
				'5cols' => __('5 columns', 'adblocks'),
				'6cols' => __('6 columns', 'adblocks'),
			),
			'allow_null' => 0,
			'default_value' => '4cols',
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
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/posts',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

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

acf_add_local_field_group(array(
	'key' => 'group_5df9ebd7beef8',
	'title' => __('Block Options: Gallery Pictures', 'adblocks'),
	'fields' => array(
		array(
			'key' => 'field_5df9ebde7335e',
			'label' => __('Size', 'adblocks'),
			'name' => 'img_size',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'thumb' => __('Thumbnail', 'adblocks'),
				'medium' => __('Medium', 'adblocks'),
				'large' => __('Large', 'adblocks'),
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5df9ec267335f',
			'label' => __('External link', 'adblocks'),
			'name' => 'img_link',
			'type' => 'url',
			'instructions' => __('If you wish to add an external link to this picture.', 'adblocks'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'attachment',
				'operator' => '==',
				'value' => 'image',
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
add_action('acf/init', 'gallery_blocks_fields');