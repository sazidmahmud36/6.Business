<?php
function business_customize_register($wp_customize){
	//Banner Section
	$wp_customize -> add_section('banner',array(
		'title' 		=>__('Banner','business') , 
		'description' 	=> sprintf(__('Options for homepage banner','business')) , 
		'priority' 		=> 130 
	));

	//===========================================================================================

	// Heading Setting
	$wp_customize -> add_setting('banner_heading', array(
		'default' 	=> _x('Banner Heading', 'business'), 
		'type' 		=> 'theme_mod' 
	));

	// Heading Control
	$wp_customize -> add_control('banner_heading', array(
		'label' 	=> __('Heading', 'business'), 
		'section' 	=> 'banner', 
		'priority' 	=> 20 
	));

	//===========================================================================================

	// Text Setting
	$wp_customize -> add_setting('banner_text', array(
		'default' 	=> _x('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'business'), 
		'type' 		=> 'theme_mod' 
	));

	// Text Control
	$wp_customize -> add_control('banner_text', array(
		'label' 	=> __('Text', 'business'), 
		'section' 	=> 'banner', 
		'priority' 	=> 20 
	));

	//===========================================================================================
	// Button Text Setting
	$wp_customize -> add_setting('banner_btn_text', array(
		'default' 	=> _x('Sign Up Today','business'), 
		'type' 		=> 'theme_mod' 
	));

	// Button Text Control
	$wp_customize -> add_control('banner_btn_text', array(
		'label' 	=> __('Button Text', 'business'), 
		'section' 	=> 'banner', 
		'priority' 	=> 20 
	));
	//===========================================================================================

	// Button Url Setting
	$wp_customize -> add_setting('banner_btn_url', array(
		'default' 	=> _x('http://test.com', 'business'),
		'type' 		=> 'theme_mod' 
	));

	// Button Url Control
	$wp_customize -> add_control('banner_btn_url', array(
		'label' 	=> __('Button URL', 'business'), 
		'section' 	=> 'banner', 
		'priority' 	=> 20 
	));

	//============================================================================================

	// Background Image Setting
	$wp_customize -> add_setting('banner_image', array(
		'default' 	=> get_bloginfo('template_directory').'/images/banner.jpg',
		'type' 		=> 'theme_mod' 
	));

	// Background Image Control
	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'banner_image',array(
			'label' 	=> __('Background Image','business'),
			'section' 	=> 'banner',
			'settings' 	=> 'banner_image',

)));

	//===========================================================================================


	// Boxes Section
	$wp_customize -> add_section('boxes', array(
		'title' 		=> __('Boxes', 'business'), 
		'description' 	=> sprintf(__('Options for homepage boxes', 'business')), 
		'priority' 		=> 130, 
	));
	//===========================================================================================

	// Box One Heading Setting
	$wp_customize -> add_setting('box1_heading',array(
		'default' 	=> _x('Box 1 Heading','business'),
		'type' 		=> 'theme_mod'
	));

	//Box One Heading Control
	$wp_customize -> add_control('box1_heading',array(
		'label' 	=> __('Box 1 Heading', 'business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));


	// Box One Text Setting
	$wp_customize -> add_setting('box1_text',array(
		'default' 	=> _x('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ','business'),
		'type' 		=> 'theme_mod'
	));

	//Box One Text Control
	$wp_customize -> add_control('box1_text',array(
		'label' 	=> __('Box 1 Text','business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));

	// Box One Icon Setting
	$wp_customize -> add_setting('box1_icon',array(
		'default' 	=> _x('fa-bar-chart','business'),
		'type' 		=> 'theme_mod'
	));

	//Box One Icon Control
	$wp_customize -> add_control('box1_icon',array(
		'label' 	=> __('Box 1 Icon','business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));



	//=================================================================================
	// Box Two Heading Setting
	$wp_customize -> add_setting('box2_heading',array(
		'default' 	=> _x('Box 2 Heading','business'),
		'type' 		=> 'theme_mod'
	));

	//Box Two Heading Control
	$wp_customize -> add_control('box2_heading',array(
		'label' 	=> __('Box 2 Heading', 'business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));


	// Box Two Text Setting
	$wp_customize -> add_setting('box2_text',array(
		'default' 	=> _x('Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis 					interdum.','business'),
		'type' 		=> 'theme_mod'
	));

	//Box Two Text Control
	$wp_customize -> add_control('box2_text',array(
		'label' 	=> __('Box 2 Text','business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));

	// Box Two Icon Setting
	$wp_customize -> add_setting('box2_icon',array(
		'default' 	=> _x('fa-code','business'),
		'type' 		=> 'theme_mod'
	));

	//Box Two Icon Control
	$wp_customize -> add_control('box2_icon',array(
		'label' 	=> __('Box 2 Icon','business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));

	//=================================================================================
	// Box Three Heading Setting
	$wp_customize -> add_setting('box3_heading',array(
		'default' 	=> _x('Box 3 Heading','business'),
		'type' 		=> 'theme_mod'
	));

	//Box Three Heading Control
	$wp_customize -> add_control('box3_heading',array(
		'label' 	=> __('Box 3 Heading', 'business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));


	// Box Three Text Setting
	$wp_customize -> add_setting('box3_text',array(
		'default' 	=> _x('Donec id elit non mi porta gravida at eget metus. Maecenas faucibus 				mollis interdum.','business'),
		'type' 		=> 'theme_mod'
	));

	//Box Three Text Control
	$wp_customize -> add_control('box3_text',array(
		'label' 	=> __('Box 3 Text','business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));

	// Box Three Icon Setting
	$wp_customize -> add_setting('box3_icon',array(
		'default' 	=> _x('fa-desktop','business'),
		'type' 		=> 'theme_mod'
	));

	//Box Three Icon Control
	$wp_customize -> add_control('box3_icon',array(
		'label' 	=> __('Box 3 Icon','business'),
		'section' 	=> 'boxes',
		'priority' 	=> 20
	 ));



}
add_action('customize_register','business_customize_register'); 