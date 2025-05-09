<?php
/**
 * IYKRA functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

 add_action('wp_head', function() {
    $favicon_url = esc_url( get_template_directory_uri() . '/assets/icons/favicon.ico' );
    echo '<link rel="icon" href="' . $favicon_url . '" type="image/x-icon">';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" type="image/x-icon">';
    echo '<link rel="apple-touch-icon" href="' . esc_url( get_template_directory_uri() . '/assets/icons/apple-touch-icon.png' ) . '">';
});

// Adds theme support for post formats.
if ( ! function_exists( 'iykra_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return void
	 */
	function iykra_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'iykra_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'iykra_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return void
	 */
	function iykra_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'iykra_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'iykra_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return void
	 */
	function iykra_enqueue_styles() {
		wp_enqueue_style(
			'iykra-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'iykra_enqueue_styles' );

if ( ! function_exists( 'iykra_enqueue_assets_styles' ) ) :
	function iykra_enqueue_assets_styles() {
		wp_enqueue_style(
			'iykra-tailwind-style',
			get_parent_theme_file_uri( 'assets/styles/tailwind.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'iykra-fontawesome-style',
			get_parent_theme_file_uri( 'assets/styles/font-awesome.min.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'iykra-swiper-bundle-style',
			get_parent_theme_file_uri( 'assets/styles/swiper-bundle.min.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'iykra-global-style',
			get_parent_theme_file_uri( 'assets/styles/global-style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'iykra_enqueue_assets_styles' );

if ( ! function_exists('iykra_enqueue_assets_scripts') ) :
	function iykra_enqueue_assets_scripts() {
		wp_enqueue_script(
			'iykra-jquery-script',
			get_parent_theme_file_uri( 'assets/scripts/jquery.min.js' ),
		);
		wp_enqueue_script(
			'iykra-gsap-script',
			get_parent_theme_file_uri( 'assets/scripts/gsap.min.js' ),
		);
		wp_enqueue_script(
			'iykra-scroll-trigger-script',
			get_parent_theme_file_uri( 'assets/scripts/scrollTrigger.min.js' ),
		);
		wp_enqueue_script(
			'iykra-smooth-scrrollbar-script',
			get_parent_theme_file_uri( 'assets/scripts/smooth-scollbar.js' ),
		);
		wp_enqueue_script(
			'iykra-swiper-bundle-script',
			get_parent_theme_file_uri( 'assets/scripts/swiper-bundle.min.js' ),
		);
		wp_enqueue_script(
			'iykra-global-script',
			get_parent_theme_file_uri( 'assets/scripts/global-script.js' ),
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'iykra_enqueue_assets_scripts' );

if ( ! function_exists('iykra_enqueue_scripts') ) :
	function iykra_enqueue_scripts() {
		wp_enqueue_script(
			'iykra-script',
			get_parent_theme_file_uri( 'script.js' ),
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'iykra_enqueue_scripts' );

// Registers custom block styles.
if ( ! function_exists( 'iykra_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return void
	 */
	function iykra_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'iykra' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'iykra_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'iykra_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return void
	 */
	function iykra_pattern_categories() {

		register_block_pattern_category(
			'iykra_page',
			array(
				'label'       => __( 'Pages', 'iykra' ),
				'description' => __( 'A collection of full page layouts.', 'iykra' ),
			)
		);

		register_block_pattern_category(
			'iykra_post-format',
			array(
				'label'       => __( 'Post formats', 'iykra' ),
				'description' => __( 'A collection of post format patterns.', 'iykra' ),
			)
		);
	}
endif;
add_action( 'init', 'iykra_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'iykra_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return void
	 */
	function iykra_register_block_bindings() {
		register_block_bindings_source(
			'iykra/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'iykra' ),
				'get_value_callback' => 'iykra_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'iykra_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'iykra_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since IYKRA 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function iykra_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;

function iykra_register_block_patterns() {
    $pattern_gallery_file = get_template_directory() . '/patterns/gallery.php';
    $pattern_trusted_by_file = get_template_directory() . '/patterns/trusted-by.php';
    $pattern_tools_used_file = get_template_directory() . '/patterns/tools-used.php';
    $pattern_why_iykra_file = get_template_directory() . '/patterns/why-iykra.php';
    $pattern_why_iykra2_file = get_template_directory() . '/patterns/why-iykra-2.php';

	if ( file_exists( $pattern_gallery_file ) ) {
		ob_start();
        include $pattern_gallery_file;
        $pattern_gallery_content = ob_get_clean();

        register_block_pattern(
            'iykra/gallery-page',
            array(
                'title'       => __( 'Gallery Page', 'iykra' ),
                'description' => __( 'The main gallery page layout.', 'iykra' ),
                'content'     => $pattern_gallery_content,
            )
        );
    }
	if ( file_exists( $pattern_trusted_by_file ) ) {
		ob_start();
        include $pattern_trusted_by_file;
        $pattern_trusted_by_content = ob_get_clean();

        register_block_pattern(
            'iykra/trusted-by-page',
            array(
                'title'       => __( 'Trusted by Page', 'iykra' ),
                'description' => __( 'The main trusted by page layout.', 'iykra' ),
                'content'     => $pattern_trusted_by_content,
            )
        );
    }
	if ( file_exists( $pattern_tools_used_file ) ) {
		ob_start();
        include $pattern_tools_used_file;
        $pattern_tools_used_content = ob_get_clean();

        register_block_pattern(
            'iykra/tools-used-page',
            array(
                'title'       => __( 'Tools Used Page', 'iykra' ),
                'description' => __( 'The main tools used page layout.', 'iykra' ),
                'content'     => $pattern_tools_used_content,
            )
        );
    }
	if ( file_exists( $pattern_why_iykra_file ) ) {
		ob_start();
        include $pattern_why_iykra_file;
        $pattern_why_iykra_content = ob_get_clean();

        register_block_pattern(
            'iykra/why-iykra-page',
            array(
                'title'       => __( 'Why IYKRA Page', 'iykra' ),
                'description' => __( 'The main why iykra page layout.', 'iykra' ),
                'content'     => $pattern_why_iykra_content,
            )
        );
    }
	if ( file_exists( $pattern_why_iykra2_file ) ) {
		ob_start();
        include $pattern_why_iykra2_file;
        $pattern_why_iykra2_content = ob_get_clean();

        register_block_pattern(
            'iykra/why-iykra-page-2',
            array(
                'title'       => __( 'Why IYKRA Page', 'iykra' ),
                'description' => __( 'The main why iykra page layout.', 'iykra' ),
                'content'     => $pattern_why_iykra2_content,
            )
        );
    }

    $pattern_home_file = get_template_directory() . '/patterns/home.php';
    $pattern_about_file = get_template_directory() . '/patterns/about.php';
    $pattern_career_file = get_template_directory() . '/patterns/career.php';
    $pattern_career_apply_file = get_template_directory() . '/patterns/career-apply.php';

    if ( file_exists( $pattern_home_file ) ) {
		ob_start();
        include $pattern_home_file;
        $pattern_home_content = ob_get_clean();

        register_block_pattern(
            'iykra/home-page',
            array(
                'title'       => __( 'Home Page', 'iykra' ),
                'description' => __( 'The main home page layout.', 'iykra' ),
                'content'     => $pattern_home_content,
            )
        );
    }

	if ( file_exists( $pattern_about_file ) ) {
		ob_start();
        include $pattern_about_file;
        $pattern_about_content = ob_get_clean();

        register_block_pattern(
            'iykra/about-page',
            array(
                'title'       => __( 'About Page', 'iykra' ),
                'description' => __( 'The main about page layout.', 'iykra' ),
                'content'     => $pattern_about_content,
            )
        );
    }

	if ( file_exists( $pattern_career_file ) ) {
		ob_start();
        include $pattern_career_file;
        $pattern_career_content = ob_get_clean();

        register_block_pattern(
            'iykra/career-page',
            array(
                'title'       => __( 'Career Page', 'iykra' ),
                'description' => __( 'The main career page layout.', 'iykra' ),
                'content'     => $pattern_career_content,
            )
        );
    }
	if ( file_exists( $pattern_career_apply_file ) ) {
		ob_start();
        include $pattern_career_apply_file;
        $pattern_career_apply_content = ob_get_clean();

        register_block_pattern(
            'iykra/career-apply-page',
            array(
                'title'       => __( 'Career Apply Page', 'iykra' ),
                'description' => __( 'The main career apply page layout.', 'iykra' ),
                'content'     => $pattern_career_apply_content,
            )
        );
	}

    $pattern_event_file = get_template_directory() . '/patterns/event.php';
    $pattern_event_talkson_file = get_template_directory() . '/patterns/event-talkson.php';
    $pattern_event_berandai_file = get_template_directory() . '/patterns/event-berandai.php';
	if ( file_exists( $pattern_event_file ) ) {
		ob_start();
        include $pattern_event_file;
        $pattern_event_content = ob_get_clean();

        register_block_pattern(
            'iykra/event-page',
            array(
                'title'       => __( 'Event Page', 'iykra' ),
                'description' => __( 'The main event page layout.', 'iykra' ),
                'content'     => $pattern_event_content,
            )
        );
    }
	if ( file_exists( $pattern_event_talkson_file ) ) {
		ob_start();
        include $pattern_event_talkson_file;
        $pattern_event_talkson_content = ob_get_clean();

        register_block_pattern(
            'iykra/event-talkson-page',
            array(
                'title'       => __( 'Event TalksON Page', 'iykra' ),
                'description' => __( 'The main event talkson page layout.', 'iykra' ),
                'content'     => $pattern_event_talkson_content,
            )
        );
    }
	if ( file_exists( $pattern_event_berandai_file ) ) {
		ob_start();
        include $pattern_event_berandai_file;
        $pattern_event_berandai_content = ob_get_clean();

        register_block_pattern(
            'iykra/event-berandai-page',
            array(
                'title'       => __( 'Event BerandAI Page', 'iykra' ),
                'description' => __( 'The main event berandai page layout.', 'iykra' ),
                'content'     => $pattern_event_berandai_content,
            )
        );
    }

    $pattern_corporate_training_file = get_template_directory() . '/patterns/corporate-training.php';
    $pattern_managed_service_file = get_template_directory() . '/patterns/managed-service.php';

	if ( file_exists( $pattern_corporate_training_file ) ) {
		ob_start();
        include $pattern_corporate_training_file;
        $pattern_corporate_training_content = ob_get_clean();

        register_block_pattern(
            'iykra/corporate-training-page',
            array(
                'title'       => __( 'Corporate Training Page', 'iykra' ),
                'description' => __( 'The main corporate training page layout.', 'iykra' ),
                'content'     => $pattern_corporate_training_content,
            )
        );
    }
	if ( file_exists( $pattern_managed_service_file ) ) {
		ob_start();
        include $pattern_managed_service_file;
        $pattern_managed_service_content = ob_get_clean();

        register_block_pattern(
            'iykra/managed-service-page',
            array(
                'title'       => __( 'Managed Service Page', 'iykra' ),
                'description' => __( 'The main managed service page layout.', 'iykra' ),
                'content'     => $pattern_managed_service_content,
            )
        );
    }

    $pattern_data_fellowship_file = get_template_directory() . '/patterns/data-fellowship.php';
    $pattern_ai_fellowship_file = get_template_directory() . '/patterns/ai-fellowship.php';
	$pattern_public_training_file = get_template_directory() . '/patterns/public-training.php';
	
	if ( file_exists( $pattern_data_fellowship_file ) ) {
		ob_start();
        include $pattern_data_fellowship_file;
        $pattern_data_fellowship_content = ob_get_clean();

        register_block_pattern(
            'iykra/data-fellowship-page',
            array(
                'title'       => __( 'Data Fellowship Page', 'iykra' ),
                'description' => __( 'The main data fellowship page layout.', 'iykra' ),
                'content'     => $pattern_data_fellowship_content,
            )
        );
    }
	if ( file_exists( $pattern_ai_fellowship_file ) ) {
		ob_start();
        include $pattern_ai_fellowship_file;
        $pattern_ai_fellowship_content = ob_get_clean();

        register_block_pattern(
            'iykra/ai-fellowship-page',
            array(
                'title'       => __( 'AI Fellowship Page', 'iykra' ),
                'description' => __( 'The main ai fellowship page layout.', 'iykra' ),
                'content'     => $pattern_ai_fellowship_content,
            )
        );
    }
	if ( file_exists( $pattern_public_training_file ) ) {
		ob_start();
        include $pattern_public_training_file;
        $pattern_public_training_content = ob_get_clean();

        register_block_pattern(
            'iykra/public-training-page',
            array(
                'title'       => __( 'Public Training Page', 'iykra' ),
                'description' => __( 'The main public training page layout.', 'iykra' ),
                'content'     => $pattern_public_training_content,
            )
        );
    }

    // Privacy policy and return refund
    $pattern_privacy_policy_file = get_template_directory() . '/patterns/privacy-policy.php';
    $pattern_refund_return_file = get_template_directory() . '/patterns/refund-return.php';
	if ( file_exists( $pattern_privacy_policy_file ) ) {
		ob_start();
        include $pattern_privacy_policy_file;
        $pattern_privacy_policy_content = ob_get_clean();

        register_block_pattern(
            'iykra/privacy-policy-page',
            array(
                'title'       => __( 'Privacy Policy Page', 'iykra' ),
                'description' => __( 'The main privacy policy page layout.', 'iykra' ),
                'content'     => $pattern_privacy_policy_content,
            )
        );
    }
    if ( file_exists( $pattern_refund_return_file ) ) {
		ob_start();
        include $pattern_refund_return_file;
        $pattern_refund_return_content = ob_get_clean();

        register_block_pattern(
            'iykra/refund-return-page',
            array(
                'title'       => __( 'Refund Return Page', 'iykra' ),
                'description' => __( 'The main refund return page layout.', 'iykra' ),
                'content'     => $pattern_refund_return_content,
            )
        );
    }

	// Components
	$pattern_public_training_card_file = get_template_directory() . '/patterns/components/public-training-card.php';
	if ( file_exists( $pattern_public_training_card_file ) ) {
		ob_start();
		include $pattern_public_training_card_file;
		$pattern_public_training_card_content = ob_get_clean();

		register_block_pattern(
			'iykra/public-training-card',
			array(
				'title'       => __( 'Public Training Card', 'iykra' ),
				'description' => __( 'The public training card component.', 'iykra' ),
				'content'     => $pattern_public_training_card_content,
			)
		);
	}
	$pattern_fellowship_card_file = get_template_directory() . '/patterns/components/fellowship-card.php';
	if ( file_exists( $pattern_fellowship_card_file ) ) {
		ob_start();
		include $pattern_fellowship_card_file;
		$pattern_fellowship_card_content = ob_get_clean();

		register_block_pattern(
			'iykra/fellowship-card',
			array(
				'title'       => __( 'Fellowship Card', 'iykra' ),
				'description' => __( 'The fellowship card component.', 'iykra' ),
				'content'     => $pattern_fellowship_card_content,
			)
		);
	}
	$pattern_talkson_card_file = get_template_directory() . '/patterns/components/talkson-card.php';
	if ( file_exists( $pattern_talkson_card_file ) ) {
		ob_start();
		include $pattern_talkson_card_file;
		$pattern_talkson_card_content = ob_get_clean();

		register_block_pattern(
			'iykra/talkson-card',
			array(
				'title'       => __( 'TalksON Card', 'iykra' ),
				'description' => __( 'The TalksON card component.', 'iykra' ),
				'content'     => $pattern_talkson_card_content,
			)
		);
	}
	$pattern_ai_business_camp_file = get_template_directory() . '/patterns/components/ai-business-camp-card.php';
	if ( file_exists( $pattern_ai_business_camp_file ) ) {
		ob_start();
		include $pattern_ai_business_camp_file;
		$pattern_ai_business_camp_content = ob_get_clean();

		register_block_pattern(
			'iykra/ai-business-camp-card',
			array(
				'title'       => __( 'AI Business Camp Card', 'iykra' ),
				'description' => __( 'The AI Business Camp card component.', 'iykra' ),
				'content'     => $pattern_ai_business_camp_content,
			)
		);
	}
}
add_action( 'init', 'iykra_register_block_patterns' );


function get_jobs_data() {
    $response = wp_remote_get( 'https://hr.iykra.com/api/vacancies/get-vacancies' );
    if ( is_wp_error( $response ) ) {
        return 'API request failed: ' . $response->get_error_message();
    }
    
	$body = wp_remote_retrieve_body($response);
    $json = json_decode($body, true);

    if (!isset($json['data']) || !is_array($json['data'])) {
        return [];
    }

    $jobs = [];

    foreach ($json['data'] as $job) {
        $requirements = [];
        if (!empty($job['requirements'][0]['children'])) {
            foreach ($job['requirements'][0]['children'] as $item) {
                $text = $item['children'][0]['text'] ?? '';
                if ($text) {
                    $requirements[] = $text;
                }
            }
        }

        $jobdesc = [];
        if (!empty($job['jobdesc'][0]['children'])) {
            foreach ($job['jobdesc'][0]['children'] as $item) {
                $text = $item['children'][0]['text'] ?? '';
                if ($text) {
                    $jobdesc[] = $text;
                }
            }
        }

        $jobs[] = [
            'id' => $job['_id'] ?? '',
            'position' => $job['position'] ?? '',
            'type' => $job['type'] ?? '',
            'requirements' => $requirements,
            'jobdesc' => $jobdesc,
        ];
    }
    return $jobs;
}
add_shortcode( 'jobs_display', 'get_jobs_data' );

function get_jobs_data_specific($jobId) {
	$response = wp_remote_get( 'https://hr.iykra.com/api/vacancies/get-vacancies' );
    if ( is_wp_error( $response ) ) {
        return 'API request failed: ' . $response->get_error_message();
    }
    
	$body = wp_remote_retrieve_body($response);
    $json = json_decode($body, true);

    if (!isset($json['data']) || !is_array($json['data'])) {
        return [];
    }

    $jobs = [];

    foreach ($json['data'] as $job) {
        $requirements = [];
        if (!empty($job['requirements'][0]['children'])) {
            foreach ($job['requirements'][0]['children'] as $item) {
                $text = $item['children'][0]['text'] ?? '';
                if ($text) {
                    $requirements[] = $text;
                }
            }
        }

        $jobdesc = [];
        if (!empty($job['jobdesc'][0]['children'])) {
            foreach ($job['jobdesc'][0]['children'] as $item) {
                $text = $item['children'][0]['text'] ?? '';
                if ($text) {
                    $jobdesc[] = $text;
                }
            }
        }

		if ($job['_id'] == $jobId) {
			$jobs[] = [
				'id' => $job['_id'] ?? '',
				'position' => $job['position'] ?? '',
				'type' => $job['type'] ?? '',
				'requirements' => $requirements,
				'jobdesc' => $jobdesc,
			];
		}
    }
    return $jobs;
}
add_shortcode( 'specific_jobs_display', 'get_jobs_data_specific' );

// Woocommerce
// add_filter( 'template_include', function( $template ) {
//     if ( is_singular( 'product' ) ) {
//         $new_template = locate_template( array( 'templates/single-product.php' ) );
//         if ( ! empty( $new_template ) ) {
//             return $new_template;
//         }
//     }
//     return $template;
// });
