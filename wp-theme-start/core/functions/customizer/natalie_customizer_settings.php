<?php
function natalie_sanitize_default( $value ) {
	return $value;
}

/** Natalie - Customizer - Add Settings */
function natalie_register_theme_customizer( $wp_customize )
{
	/** Add Sections -----------------------------------------------------------------------------------------------------------*/
    $wp_customize->add_section( 'natalie_new_section_header', array(
   		'title' => 'Logo upload',
   		'description' => null,
        'priority' => 1
	) );
    $wp_customize->add_section( 'natalie_new_section_blog_layout', array(
   		'title' => 'Blog Settings',
   		'description' => null,
        'priority' => 2
	) );    
    $wp_customize->add_section( 'natalie_new_section_featured' , array(
		'title' => 'Featured Area Settings',
		'description' => '',
        'priority' => 3
	) );
    $wp_customize->add_section( 'natalie_new_section_promobox', array(
   		'title' => 'Promo Boxes',
   		'description' => null,
        'priority' => 4
	) );
    $wp_customize->add_section( 'natalie_new_section_social_media', array(
   		'title' => 'Social Media Settings',
   		'description' => 'Enter your social media URL. Icons will not show if left blank.',
        'priority' => 5
	) );
    $wp_customize->add_section( 'natalie_new_section_footer', array(
   		'title' => 'Footer Settings',
   		'description'  => '',
        'priority' => 6
	) );
    $wp_customize->add_section( 'natalie_new_section_color_accent', array(
   		'title'        => 'Colors: Accent',
   		'description'  => ''
	) );
    $wp_customize->add_section( 'natalie_new_section_custom_css', array(
   		'title'        => 'Custom CSS',
   		'description'  => 'Add your custom CSS which will overwrite the theme CSS'
	) );

    /** Add Settings ------------------------------------------------------------------------------------------------------------*/
    
    /** Blog layout settings */
    $wp_customize->add_setting( 'natalie_blog_layout', array(
        'default' => 'standard',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_archive_layout', array(
        'default' => 'standard',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_hompage_disable_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_archive_disable_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_single_post_disable_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
  	$wp_customize->add_setting( 'natalie_disable_archive_title', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );

  	$wp_customize->add_setting( 'natalie_display_featured_image_single', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_standard_posts_per_page', array(
        'default' => '4',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_2col_grid_posts_per_page', array(
        'default' => '10',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_3col_grid_posts_per_page', array(
        'default' => '9',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_woo_posts_per_page', array(
        'default' => '12',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    /** PromoBox */
    $wp_customize->add_setting( 'natalie_promobox_show', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_one_title', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_one_link', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_one_image', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_two_title', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_two_link', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_two_image', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_three_title', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_three_link', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'natalie_promobox_three_image', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    // Featured area
	$wp_customize->add_setting( 'natalie_featured_slider', array(
        'default' => false,
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
	$wp_customize->add_setting( 'natalie_featured_cat', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
	$wp_customize->add_setting( 'natalie_featured_id', array(
        'default' => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
	$wp_customize->add_setting( 'natalie_featured_slider_slides', array(
        'default' => '5',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    // Header and Logo
    $wp_customize->add_setting( 'natalie_logo', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_logo_footer', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    // Social media settings
    $wp_customize->add_setting( 'natalie_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_pinterest', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_bloglovin', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_google', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_dribbble', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_soundcloud', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );    
    $wp_customize->add_setting( 'natalie_vimeo', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    // Accent
    $wp_customize->add_setting( 'natalie_accent_color', array(
        'default'           => '#f37e7e',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );    
    // Footer
    $wp_customize->add_setting( 'natalie_footer_disable_social', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_footer_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    $wp_customize->add_setting( 'natalie_logo_footer', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    // Custom CSS
	$wp_customize->add_setting( 'natalie_custom_css', array(
        'default'           => '',
        'sanitize_callback' => 'natalie_sanitize_default'
    ) );
    
    /** Add Constrol ------------------------------------------------------------------------------------------------------------*/
    // Logo
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'upload_logo',
			array(
				'label'      => 'Upload logo top',
				'section'    => 'natalie_new_section_header',
				'settings'   => 'natalie_logo',
				'priority'	 => 1
			)
		)
	);
    
    /** PromoBox */
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_show',
			array(
				'label'      => 'Show Promobox',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_show',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_one_title',
			array(
				'label'      => 'Box 1 # Title',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_one_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_one_link',
			array(
				'label'      => 'Box 1 # URL',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_one_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'natalie_promobox_one_image',
			array(
				'label'      => 'Box 1 # Image',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_one_image'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_two_title',
			array(
				'label'      => 'Box 2 # Title',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_two_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_two_link',
			array(
				'label'      => 'Box 2 # URL',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_two_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'natalie_promobox_two_image',
			array(
				'label'      => 'Box 2 # Image',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_two_image'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_three_title',
			array(
				'label'      => 'Box 3 # Title',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_three_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_promobox_three_link',
			array(
				'label'      => 'Box 3 # URL',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_three_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'natalie_promobox_three_image',
			array(
				'label'      => 'Box 3 # Image',
				'section'    => 'natalie_new_section_promobox',
				'settings'   => 'natalie_promobox_three_image'
			)
		)
	);
    
    // Blog layout
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_blog_layout',
			array(
				'label'          => 'Homepage Layout',
				'section'        => 'natalie_new_section_blog_layout',
				'settings'       => 'natalie_blog_layout',
				'type'           => 'radio',
				'choices'        => array(
					'standard' => 'Standard Layout',
					'2col_grid' => '2 Col Grid',
                    '3col_grid' => '3 Col Grid'
				)
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_archive_layout',
			array(
				'label'          => 'Archive Layout',
				'section'        => 'natalie_new_section_blog_layout',
				'settings'       => 'natalie_archive_layout',
				'type'           => 'radio',
				'choices'        => array(
					'standard' => 'Standard Layout',
					'2col_grid' => '2 Col Grid',
                    '3col_grid' => '3 Col Grid'
				)
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_hompage_disable_sidebar',
			array(
				'label'      => 'Hide sidebar on HOMEPAGE',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_hompage_disable_sidebar',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_archive_disable_sidebar',
			array(
				'label'      => 'Hide sidebar on ARCHIVE',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_archive_disable_sidebar',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_single_post_disable_sidebar',
			array(
				'label'      => 'Hide sidebar on SINGLE POST',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_single_post_disable_sidebar',
				'type'		 => 'checkbox'
			)
		)
	);
  $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_disable_archive_title',
			array(
				'label'      => 'Hide archive title?',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_disable_archive_title',
				'type'		 => 'checkbox'
			)
		)
	);  
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_standard_posts_per_page',
			array(
				'label'      => 'Standard layout # Posts per page',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_standard_posts_per_page',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_2col_grid_posts_per_page',
			array(
				'label'      => '2 Col Grid # Posts per page',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_2col_grid_posts_per_page',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_3col_grid_posts_per_page',
			array(
				'label'      => '3 Col Grid # Posts per page',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_3col_grid_posts_per_page',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'natalie_woo_posts_per_page',
			array(
				'label'      => 'Woocommerce # Posts per page',
				'section'    => 'natalie_new_section_blog_layout',
				'settings'   => 'natalie_woo_posts_per_page',
				'type'		 => 'text'
			)
		)
	);
    // Featured area
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'featured_slider',
			array(
				'label'      => 'Enable Featured Slider',
				'section'    => 'natalie_new_section_featured',
				'settings'   => 'natalie_featured_slider',
				'type'		 => 'checkbox',
				'priority'	 => 2
			)
		)
	);
    
	$wp_customize->add_control(
		new WP_Customize_Category_Control(
			$wp_customize,
			'featured_cat',
			array(
				'label'    => 'Select Featured Category',
				'settings' => 'natalie_featured_cat',
				'section'  => 'natalie_new_section_featured',
				'priority'	 => 3
			)
		)
	);	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'featured_id',
			array(
				'label'      => 'Select featured post/page IDs',
				'section'    => 'natalie_new_section_featured',
				'settings'   => 'natalie_featured_id',
				'type'		 => 'text',
				'priority'	 => 4
			)
		)
	);
	
	$wp_customize->add_control(
		new Customize_Number_Control(
			$wp_customize,
			'featured_slider_slides',
			array(
				'label'      => 'Amount of Slides',
				'section'    => 'natalie_new_section_featured',
				'settings'   => 'natalie_featured_slider_slides',
				'type'		 => 'number',
				'priority'	 => 5
			)
		)
	);
    // Social Media
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'facebook',
			array(
				'label'      => 'Facebook',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_facebook',
				'type'		 => 'text',
				'priority'	 => 1
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'twitter',
			array(
				'label'      => 'Twitter',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_twitter',
				'type'		 => 'text',
				'priority'	 => 2
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'instagram',
			array(
				'label'      => 'Instagram',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_instagram',
				'type'		 => 'text',
				'priority'	 => 3
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'pinterest',
			array(
				'label'      => 'Pinterest',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_pinterest',
				'type'		 => 'text',
				'priority'	 => 4
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bloglovin',
			array(
				'label'      => 'Bloglovin',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_bloglovin',
				'type'		 => 'text',
				'priority'	 => 5
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'google',
			array(
				'label'      => 'Google Plus',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_google',
				'type'		 => 'text',
				'priority'	 => 6
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'tumblr',
			array(
				'label'      => 'Tumblr',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_tumblr',
				'type'		 => 'text',
				'priority'	 => 7
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'youtube',
			array(
				'label'      => 'Youtube',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_youtube',
				'type'		 => 'text',
				'priority'	 => 8
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'dribbble',
			array(
				'label'      => 'Dribbble',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_dribbble',
				'type'		 => 'text',
				'priority'	 => 9
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soundcloud',
			array(
				'label'      => 'Soundcloud',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_soundcloud',
				'type'		 => 'text',
				'priority'	 => 10
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vimeo',
			array(
				'label'      => 'Vimeo',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_vimeo',
				'type'		 => 'text',
				'priority'	 => 11
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'linkedin',
			array(
				'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
				'section'    => 'natalie_new_section_social_media',
				'settings'   => 'natalie_linkedin',
				'type'		 => 'text',
				'priority'	 => 12
			)
		)
	);
	// Accent
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color',
			array(
				'label'      => 'Accent Color',
				'section'    => 'natalie_new_section_color_accent',
				'settings'   => 'natalie_accent_color',
				'priority'	 => 1
			)
		)
	);
    // Footer
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_copyright',
			array(
				'label'      => 'Footer copyright text',
				'section'    => 'natalie_new_section_footer',
				'settings'   => 'natalie_footer_copyright',
				'type'		 => 'text',
				'priority'	 => 2
			)
		)
	);
    // Custom CSS
	$wp_customize->add_control(
		new Customize_CustomCss_Control(
			$wp_customize,
			'custom_css',
			array(
				'label'      => 'Custom CSS',
				'section'    => 'natalie_new_section_custom_css',
				'settings'   => 'natalie_custom_css',
				'type'		 => 'custom_css',
				'priority'	 => 1
			)
		)
	);
    
    // Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
}
add_action( 'customize_register', 'natalie_register_theme_customizer' );