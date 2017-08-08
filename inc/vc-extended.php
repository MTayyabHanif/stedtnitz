<?php 
// Adding new page piling container shortcode in visual composer.
if (function_exists( 'vc_map' ) ) :


function remove_animation_option($data, $label){
$data = array(
		'type' => 'animation_style',
		'heading' => __( 'CSS Animation', 'js_composer' ),
		'param_name' => 'css_animation',
		'admin_label' => $label['label'],
		'value' => '',
		'settings' => array(
			'type' => 'in',
			'custom' => array(
				array(
					'label' => __( 'Default', 'js_composer' ),
					'values' => array(
						__( 'Top to bottom', 'js_composer' ) => 'top-to-bottom',
						__( 'Bottom to top', 'js_composer' ) => 'bottom-to-top',
						__( 'Left to sdflk right', 'js_composer' ) => 'left-to-right',
						__( 'Right to left', 'js_composer' ) => 'right-to-left',
						__( 'Appear from center', 'js_composer' ) => 'appear',
					),
				),
			),
		),
		'description' => __( 'Select type of animation for element to be animated when it "enters" the browsers viewport (Note: works only in modern browsers).', 'js_composer' ),
		'dependency' => array(
			'element' => $label['element'],
			'value' => $label['value'],
		),

	);
return $data;
}
add_filter( 'vc_map_add_css_animation', 'remove_animation_option', 10, 2);


$anim_params = array(
	'label' => false,
	'element' => 'page_piling',
	'value'  => 'disable'
	);

	$params = array(
		'name' => __( 'Section', 'js_composer' ),
		'base' => 'vc_section',
		'is_container' => true,
		'icon' => 'vc_icon-vc-section',
		'show_settings_on_create' => false,
		'category' => __( 'Content', 'js_composer' ),
		'as_parent' => array(
			'only' => 'vc_row, pp_page',
		),
		'as_child' => array(
			'only' => '', // Only root
		),
		'class' => 'vc_main-sortable-element',
		'description' => __( 'Group multiple rows in section', 'stedtnitz' ),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Enable Page Piling Container', 'stedtnitz' ),
				'param_name' => 'page_piling',
				'value' => array(
					__( 'No', 'stedtnitz' ) => 'disable',
					__( 'Yes', 'stedtnitz' ) => 'enable',
				),
				'description' => __( 'If Enabled, this section will be converted to PagePilling section, use rows in it to make slides..', 'stedtnitz' ),
				),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Section stretch', 'js_composer' ),
				'param_name' => 'full_width',
				'value' => array(
					__( 'Default', 'js_composer' ) => '',
					__( 'Stretch section', 'js_composer' ) => 'stretch_row',
					__( 'Stretch section and content', 'js_composer' ) => 'stretch_row_content',
				),
				'description' => __( 'Select stretching options for section and content (Note: stretched may not work properly if parent container has "overflow: hidden" CSS property).', 'js_composer' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Hide header bar?', 'js_composer' ),
				'param_name' => 'pp_show_header',
				'description' => __( 'If checked section will be set to full height.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'enable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Hide Navigation Button of slides?', 'js_composer' ),
				'param_name' => 'pp_nav_buttons',
				'description' => __( 'If checked two buttons "prev" & "next" will be hidden along with scroll animation .', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'enable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Hide Privacy Policy?', 'js_composer' ),
				'param_name' => 'pp_privacy_link',
				'description' => __( 'If checked privacy polict link will be hidden from this page\'s pagepilling..', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'enable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Full height section?', 'js_composer' ),
				'param_name' => 'full_height',
				'description' => __( 'If checked section will be set to full height.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Content position', 'js_composer' ),
				'param_name' => 'content_placement',
				'value' => array(
					__( 'Default', 'js_composer' ) => '',
					__( 'Top', 'js_composer' ) => 'top',
					__( 'Middle', 'js_composer' ) => 'middle',
					__( 'Bottom', 'js_composer' ) => 'bottom',
				),
				'description' => __( 'Select content position within section.', 'js_composer' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Use video background?', 'js_composer' ),
				'param_name' => 'video_bg',
				'description' => __( 'If checked, video will be used as section background.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'YouTube link', 'js_composer' ),
				'param_name' => 'video_bg_url',
				'value' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
				// default video url
				'description' => __( 'Add YouTube link.', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Parallax', 'js_composer' ),
				'param_name' => 'video_bg_parallax',
				'value' => array(
					__( 'None', 'js_composer' ) => '',
					__( 'Simple', 'js_composer' ) => 'content-moving',
					__( 'With fade', 'js_composer' ) => 'content-moving-fade',
				),
				'description' => __( 'Add parallax type background for section.', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Parallax', 'js_composer' ),
				'param_name' => 'parallax',
				'value' => array(
					__( 'None', 'js_composer' ) => '',
					__( 'Simple', 'js_composer' ) => 'content-moving',
					__( 'With fade', 'js_composer' ) => 'content-moving-fade',
				),
				'description' => __( 'Add parallax type background for section (Note: If no image is specified, parallax will use background image from Design Options).', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg',
					'is_empty' => true,
				),
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'Image', 'js_composer' ),
				'param_name' => 'parallax_image',
				'value' => '',
				'description' => __( 'Select image from media library.', 'js_composer' ),
				'dependency' => array(
					'element' => 'parallax',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Parallax speed', 'js_composer' ),
				'param_name' => 'parallax_speed_video',
				'value' => '1.5',
				'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg_parallax',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Parallax speed', 'js_composer' ),
				'param_name' => 'parallax_speed_bg',
				'value' => '1.5',
				'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
				'dependency' => array(
					'element' => 'parallax',
					'not_empty' => true,
				),
			),
			vc_map_add_css_animation( $anim_params ),
			array(
				'type' => 'el_id',
				'heading' => __( 'Section ID', 'js_composer' ),
				'param_name' => 'el_id',
				'description' => sprintf( __( 'Enter section ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Disable section', 'js_composer' ),
				'param_name' => 'disable_element',
				// Inner param name.
				'description' => __( 'If checked the section won\'t be visible on the public side of your website. You can switch it back any time.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'js_composer' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'js_composer' ),
				'param_name' => 'css',
				'group' => __( 'Design Options', 'js_composer' ),
			),
		),
		'js_view' => 'VcSectionView',
);
vc_map( $params );

$anim_params = array(
	'label' => false,
	'element' => 'pp_option',
	'value'  => 'default'
	);
$attributes = array(
	'name' => __( 'Row', 'js_composer' ),
	'base' => 'vc_row',
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'show_settings_on_create' => false,
	'category' => __( 'Content', 'js_composer' ),
	'class' => 'vc_main-sortable-element',
	'description' => __( 'Place content elements inside the row', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Row stretch', 'js_composer' ),
			'param_name' => 'full_width',
			'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Stretch row', 'js_composer' ) => 'stretch_row',
				__( 'Stretch row and content', 'js_composer' ) => 'stretch_row_content',
				__( 'Stretch row and content (no paddings)', 'js_composer' ) => 'stretch_row_content_no_spaces',
			),
			'description' => __( 'Select stretching options for row and content (Note: stretched may not work properly if parent container has "overflow: hidden" CSS property).', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns gap', 'js_composer' ),
			'param_name' => 'gap',
			'value' => array(
				'0px' => '0',
				'1px' => '1',
				'2px' => '2',
				'3px' => '3',
				'4px' => '4',
				'5px' => '5',
				'10px' => '10',
				'15px' => '15',
				'20px' => '20',
				'25px' => '25',
				'30px' => '30',
				'35px' => '35',
			),
			'std' => '0',
			'description' => __( 'Select gap between columns in row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Full height row?', 'js_composer' ),
			'param_name' => 'full_height',
			'description' => __( 'If checked row will be set to full height.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns position', 'js_composer' ),
			'param_name' => 'columns_placement',
			'value' => array(
				__( 'Middle', 'js_composer' ) => 'middle',
				__( 'Top', 'js_composer' ) => 'top',
				__( 'Bottom', 'js_composer' ) => 'bottom',
				__( 'Stretch', 'js_composer' ) => 'stretch',
			),
			'description' => __( 'Select columns position within row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'full_height',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Equal height', 'js_composer' ),
			'param_name' => 'equal_height',
			'description' => __( 'If checked columns will be set to equal height.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Content position', 'js_composer' ),
			'param_name' => 'content_placement',
			'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Top', 'js_composer' ) => 'top',
				__( 'Middle', 'js_composer' ) => 'middle',
				__( 'Bottom', 'js_composer' ) => 'bottom',
			),
			'description' => __( 'Select content position within columns.', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use video background?', 'js_composer' ),
			'param_name' => 'video_bg',
			'description' => __( 'If checked, video will be used as row background.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'YouTube link', 'js_composer' ),
			'param_name' => 'video_bg_url',
			'value' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
			// default video url
			'description' => __( 'Add YouTube link.', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'js_composer' ),
			'param_name' => 'video_bg_parallax',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Simple', 'js_composer' ) => 'content-moving',
				__( 'With fade', 'js_composer' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'js_composer' ),
			'param_name' => 'parallax',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Simple', 'js_composer' ) => 'content-moving',
				__( 'With fade', 'js_composer' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row (Note: If no image is specified, parallax will use background image from Design Options).', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'is_empty' => true,
			),
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Image', 'js_composer' ),
			'param_name' => 'parallax_image',
			'value' => '',
			'description' => __( 'Select image from media library.', 'js_composer' ),
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Parallax speed', 'js_composer' ),
			'param_name' => 'parallax_speed_video',
			'value' => '1.5',
			'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg_parallax',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Parallax speed', 'js_composer' ),
			'param_name' => 'parallax_speed_bg',
			'value' => '1.5',
			'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true,
			),
		),
		vc_map_add_css_animation( $anim_params ),
		array(
			'type' => 'el_id',
			'heading' => __( 'Row ID', 'js_composer' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter row ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Disable row', 'js_composer' ),
			'param_name' => 'disable_element',
			// Inner param name.
			'description' => __( 'If checked the row won\'t be visible on the public side of your website. You can switch it back any time.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'js_composer' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Select Image', 'js_composer' ),
			'param_name' => 'pp_option',
			'value' => array(
					__( 'Disabled', 'stedtnitz' ) => 'default',
					__( 'Add Image', 'stedtnitz' ) => 'image',
					__( 'Add Video', 'stedtnitz' ) => 'video',
				),
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'description' => __( 'Use "Image" or "Video" to enable PagePilling on this row, this row will act as a slide.', 'js_composer' ),
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Select Image', 'js_composer' ),
			'param_name' => 'pp_image',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'image',
			),
			'description' => __( 'Choose Image that will act slide background in PagePilling.', 'js_composer' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Video URL', 'js_composer' ),
			'param_name' => 'pp_video_url',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'description' => __( 'Add Embed Video URL to add video as PagePilling slide background. <br>For Example: www.youtube.com/embed/0HItAOYEVYs', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'video',
				),
			),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Select Video Poster', 'js_composer' ),
			'param_name' => 'pp_video_poster',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'video',
			),
			'description' => __( 'This image will be used until the video loads, once buffering completed of video, the video will start playing.', 'js_composer' ),
		),

		array(
			'type' => 'textfield',
			'heading' => __( 'Anchor', 'stedtnitz' ),
			'param_name' => 'pp_anchor',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => array('video', 'image'),
				'not_empty' => true,
			),
			'description' => __( 'Anchor name will be used to refer the slide in URL. For Example: www.example.come/#anchor_name.', 'js_composer' ),
		),
	),
	'js_view' => 'VcRowView',
);

vc_map($attributes);
endif;