<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/image/';

	$options = array();

	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');*/
    $wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

//////////////////////////////////////////////GENERAL SETTINGS START////////////////////////////////////////////////////////////////////
	$options[] = array(
		'name' => __('General Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Name', 'options_check'),
		'desc' => __('Enter Site name .', 'options_check'),
		'id' => 'sitename',
		'std' => 'BITCOIN ATM NEAR ME',
		'type' => 'text');
		
	 $options[] = array(
		'name' => __('Upload Logo', 'options_check'),
		'desc' => __('Upload Logo', 'options_check'),
		'id' => 'logo',
		'type' => 'upload');
	
	$options[] = array(
		'name' => __('Upload Favicon Image', 'options_check'),
		'desc' => __('Upload Your favicon.ico [16x16 PX]', 'options_check'),
		'id' => 'fav',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Company No', 'options_check'),
		'desc' => __('Enter Company No', 'options_check'),
		'id' => 'company',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Telephone No', 'options_check'),
		'desc' => __('Enter Telephone', 'options_check'),
		'id' => 'tel',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('E-mail', 'options_check'),
		'desc' => __('Enter E-mail', 'options_check'),
		'id' => 'email',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Address', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'address',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Map', 'options_check'),
		'desc' => sprintf( __( 'Enter Map Iframe:', 'options_check' ), '' ),
		'id' => 'map',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Footer Copyright Text', 'options_check'),
		'desc' => __('Enter Footer Copyright Text .', 'options_check'),
		'id' => 'copyright',
		'type' => 'text');
	
//////////////////////////////////////////////GENERAL SETTINGS END////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////SOCIAL LINK SETTINGS START////////////////////////////////////////////////////////////////////
	
	$options[] = array(
		'name' => __('Social Link Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Twitter Link', 'options_check'),
		'desc' => __('Enter Your Twitter Page Link', 'options_check'),
		'id' => 'twitter_link',
		'std' => 'https://twitter.com',
		'type' => 'text');
		
	/*$options[] = array(
		'name' => __('Twitter Logo', 'options_check'),
		'desc' => __('Enter Your Twitter Logo', 'options_check'),
		'id' => 'twitter_logo',
		'std' => '',
		'type' => 'upload');*/
		
	$options[] = array(
		'name' => __('Facebook Link', 'options_check'),
		'desc' => __('Enter Your Facebook Page Link', 'options_check'),
		'id' => 'facebook_link',
		'std' => 'https://www.facebook.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Instrogram Link', 'options_check'),
		'desc' => __('Enter Your Instrogram Link', 'options_check'),
		'id' => 'ins_link',
		'std' => 'https://www.instrogram.com',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Google Plus Link', 'options_check'),
		'desc' => __('Enter Your Google Plus Page Link', 'options_check'),
		'id' => 'gplus_link',
		'std' => 'http://www.plus.google.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Youtube Link', 'options_check'),
		'desc' => __('Enter Your Youtube Link', 'options_check'),
		'id' => 'you_link',
	    'std' => 'http://www.youtube.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Linkin Link', 'options_check'),
		'desc' => __('Enter Your Linkin Link', 'options_check'),
		'id' => 'linkin_link',
	    'std' => 'http://www.linkin.com',
		'type' => 'text');


//////////////////////////////////////////////SOCIAL LINK SETTINGS END////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////CMS SETTINGS START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __('Homepage CMS', 'options_check'),
		'type' => 'heading');
	
	
	$options[] = array(
		'name' => __('Welcome Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'w_title',
		'type' => 'text',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Welcome SubTitle', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'w_subtitle',
		'type' => 'text',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Welcome Content', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'w_content',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Home CMS Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'cms_title',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Home CMS Content', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'cms_content',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __("Let's Talk", 'options_check'),
		'desc' => sprintf( __( 'Enter Contact Number:', 'options_check' ), '' ),
		'id' => 'talk',
		'type' => 'text');
		
		
		
//////////////////////////////////////////////CMS SETTINGS END////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////Our Services START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __('Services', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Service 1. Title :', 'options_check'),
		'id' => 's1',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Service 1. Image:', 'options_check'),
		'id' => 'img1',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Service 1. Content:', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 's_content1',
		'type' => 'editor',
		'settings' => $wp_editor_settings );	
		
	
		
	$options[] = array(
		'name' => __('Service 2. Title :', 'options_check'),
		'id' => 's2',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Service 2. Image:', 'options_check'),
		'id' => 'img2',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Service 2. Content:', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 's_content2',
		'type' => 'editor',
		'settings' => $wp_editor_settings );	
		
	$options[] = array(
		'name' => __('Service 3. Title :', 'options_check'),
		'id' => 's3',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Service 3. Image:', 'options_check'),
		'id' => 'img3',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Service 3. Content:', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 's_content3',
		'type' => 'editor',
		'settings' => $wp_editor_settings );	
		
		
	
		
//////////////////////////////////////////////Our Services END////////////////////////////////////////////////////////////////////
	


	

	return $options;
}
?>