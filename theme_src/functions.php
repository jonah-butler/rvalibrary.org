<?php
/**
 * RPL Libraria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RPL_Libraria
 */

if ( ! function_exists( 'rpl_libraria_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	 function rpl_body() {
	 }

	function rpl_libraria_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RPL Libraria, use a find and replace
		 * to change 'rpl-libraria' to the name of your theme in all the template files.
		 */


		load_theme_textdomain( 'rpl-libraria', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary' ),
			'tippy_top' => esc_html__( 'Tip Top' ),
			'quick_links' => esc_html__( 'Quick Links' ),
			'opportunities' => esc_html__( 'Opportunities' ),
			'footer_bottom' => esc_html__( 'Footer Bottom' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rpl_libraria_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rpl_libraria_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rpl_libraria_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rpl_libraria_content_width', 640 );
}
add_action( 'after_setup_theme', 'rpl_libraria_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rpl_libraria_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog List Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-blog_list',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Detail Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-detail',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Category Archive Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-category',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Tag Archive Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-tag',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Author Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-author',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Section Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-section',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title" style="margin-top: 15px; margin-bottom: 5px;">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Search Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-search',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'rpl_libraria_widgets_init' );

function wpb_load_widget() {
		register_widget( 'rpl_author_widget' );
		register_widget( 'rpl_authorhead_widget' );
		register_widget( 'rpl_cat_widget' );
		register_widget( 'rpl_search_widget' );
		register_widget( 'rpl_mcsubscribe_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );



///////////////////////////////////////////////////////
///////////RPL MAILCHIMP SUBSCRIBE  WIDGET/////////////
///////////////////////////////////////////////////////
class rpl_mcsubscribe_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rpl_mcsubscribe_widget',
		// Widget name will appear in UI
		__('RPL MailChimp Subscribe Widget', 'rpl_mcsubscribe_widget_domain'),
		// Widget description
		array( 'description' => __( 'Displays author info if it exists.', 'rpl_mcsubscribe_widget_domain' ), )
		);
	}

	// Creating widget front-end

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$mc_url = apply_filters( 'mc_url_field', $instance['mailchimp_url'] );
		$description = apply_filters( 'mc_des_field', $instance['description'] );
		// $title = 'Search the Site';
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo '<div style="margin-top: 5px;" >' . $description . '</div>';


		echo '<form class="rpl_mcwidget_form" action="';
		echo $mc_url;
		echo '" method="post" target="_blank">';
	  echo '<input class="rpl_mcwidget_input" type="search" name="MERGE0" placeholder="Email Address">';
	  echo '<button class="btn btn-primary rpl_mcwidget_submit" type="submit">Subscribe</button>';
	  echo '</form>';
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {$title = $instance[ 'title' ];}
		else {$title = __( 'New title', 'rpl_mcsubscribe_widget_domain' );}
		if ( isset( $instance[ 'mailchimp_url' ] ) ) {$mc_url = $instance[ 'mailchimp_url' ];}
		else {$mc_url = __( 'New URL', 'rpl_mcsubscribe_widget_domain' );}
		if ( isset( $instance[ 'description' ] ) ) {$description = $instance[ 'description' ];}
		else {$description = __( 'New Description', 'rpl_mcsubscribe_widget_domain' );}
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
		<input class="widefat" style="rows: 5;" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'mailchimp_url' ); ?>"><?php _e( 'MailChimp URL:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'mailchimp_url' ); ?>" name="<?php echo $this->get_field_name( 'mailchimp_url' ); ?>" type="text" value="<?php echo esc_attr( $mc_url ); ?>" />
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['mailchimp_url'] = ( ! empty( $new_instance['mailchimp_url'] ) ) ? strip_tags( $new_instance['mailchimp_url'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here

////////////////////////////////
/////////AUTHOR WIDGET//////////
////////////////////////////////
class rpl_author_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rpl_author_widget',
		// Widget name will appear in UI
		__('RPL Author Widget', 'rpl_author_widget_domain'),
		// Widget description
		array( 'description' => __( 'Displays author info if it exists.', 'rpl_author_widget_domain' ), )
		);
	}

	// Creating widget front-end

	public function widget( $args, $instance ) {
		// $title = apply_filters( 'widget_title', $instance['title'] );
		$title = 'About the Author';
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo __( get_the_author_meta('description'), 'rpl_author_widget_domain' );
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'rpl_author_widget_domain' );
		}
		// Widget admin form
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here







/////////////////////////////////////////
/////////AUTHOR HEADSHOT WIDGET//////////
/////////////////////////////////////////
class rpl_authorhead_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rpl_authorhead_widget',
		// Widget name will appear in UI
		__('RPL Author Headshot Widget', 'rpl_authorhead_widget_domain'),
		// Widget description
		array( 'description' => __( 'Displays author info if it exists.', 'rpl_authorhead_widget_domain' ), )
		);
	}

	// Creating widget front-end

	public function widget( $args, $instance ) {
		// $title = apply_filters( 'widget_title', $instance['title'] );
		$title = get_the_author();
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo '<div class="author_hs_parent">';
	  echo 		'<div class="author_hs_child">';
    echo 			'<img src="';
		echo 					get_avatar_url(get_the_author_meta('ID'), array('size' => '300'));
		echo 				'" alt="">';
	  echo 		'</div>';
    echo '</div>';

		echo '<ul style="margin-bottom: 10px;">';
	  echo '<li><a href="mailto:';
		echo get_the_author_meta('email');
		echo '"><i class="fa fa-envelope" aria-hidden="true"></i> <span>/ Email</span></a></li>';
	  if(get_the_author_meta('facebook')):
			echo '<li><a href="';
			echo get_the_author_meta('facebook');
			echo '"><i class="fa fa-facebook"></i> <span>/ Facebook</span></a></li>';
		endif;
	  if(get_the_author_meta('twitter')):
			echo '<li><a target="_blank" href="https://twitter.com/';
			echo get_the_author_meta('twitter');
			echo '"><i class="fa fa-twitter"></i> <span>/ Twitter</span></a></li>';
		endif;
	  echo '</ul>';



		echo __( get_the_author_meta('description'), 'rpl_authorhead_widget_domain' );
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'rpl_authorhead_widget_domain' );
		}
		// Widget admin form
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here


/////////////////////////////////////////
///////////RPL SEARCH WIDGET/////////////
/////////////////////////////////////////
class rpl_search_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rpl_search_widget',
		// Widget name will appear in UI
		__('RPL Search Widget', 'rpl_search_widget_domain'),
		// Widget description
		array( 'description' => __( 'Displays author info if it exists.', 'rpl_search_widget_domain' ), )
		);
	}

	// Creating widget front-end

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// $title = 'Search the Site';
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo '<form class="rpl_searchwidget_form" action="/" method="get">';
	  echo '<input class="rpl_searchwidget_input" type="search" name="s" placeholder="Pages and Posts...">';
	  echo '<button class="btn btn-primary rpl_searchwidget_button" type="submit"><i class="fas fa-search"></i></button>';
	  echo '</form>';
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'rpl_search_widget_domain' );
		}
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here

////////////////////////////////
///////CATEGORY WIDGET//////////
////////////////////////////////
class rpl_cat_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'rpl_cat_widget',
		// Widget name will appear in UI
		__('RPL Category Widget', 'rpl_cat_widget_domain'),
		// Widget description
		array( 'description' => __( 'Displays author info if it exists.', 'rpl_cat_widget_domain' ), )
		);
	}

	// Creating widget front-end

	public function widget( $args, $instance ) {
		// $title = apply_filters( 'widget_title', $instance['title'] );
		$title = 'About '. get_the_archive_title();
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		if (category_description()){
			echo __( category_description(), 'rpl_cat_widget_domain' );
		}else{
			$cat_error = 'There is no description for this category. Please ask our bloggers to add one.';
			echo __( $cat_error, 'rpl_cat_widget_domain' );
		}

		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'rpl_cat_widget_domain' );
		}
		// Widget admin form
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here



/**
 * Enqueue scripts and styles.
 */
function rpl_libraria_scripts() {
	wp_enqueue_style( 'rpl-libraria-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sidebars-style', get_template_directory_uri() . '/assets/css/sidebar_styles.css' );
	wp_enqueue_style( 'homepage-style', get_template_directory_uri() . '/assets/css/homepage_styles.css' );
	wp_enqueue_style( 'tilepage-style', get_template_directory_uri() . '/assets/css/tilepage_styles.css' );
	wp_enqueue_style( 'history-style', get_template_directory_uri() . '/assets/css/history_styles.css' );
	wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/header_styles.css' );
	wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/assets/css/footer_styles.css' );
	wp_enqueue_style( 'page-style', get_template_directory_uri() . '/assets/css/page_styles.css' );
	wp_enqueue_style( 'faq-style', get_template_directory_uri() . '/assets/css/faq_styles.css' );
	wp_enqueue_style( 'location-style', get_template_directory_uri() . '/assets/css/location_styles.css' );
	wp_enqueue_style( 'archive-style', get_template_directory_uri() . '/assets/css/archive_styles.css' );
	wp_enqueue_style( 'kids-style', get_template_directory_uri() . '/assets/css/kids_styles.css' );
	wp_enqueue_style( 'forms-style', get_template_directory_uri() . '/assets/css/forms.css' );
	wp_enqueue_style( 'meetingrooms-style', get_template_directory_uri() . '/assets/css/meetingrooms_styles.css' );
	wp_enqueue_style( 'buttons_template-style', get_template_directory_uri() . '/assets/css/buttons_template_styles.css' );
	wp_enqueue_style( 'onlinelibrary_template-style', get_template_directory_uri() . '/assets/css/onlinelibrary_styles.css' );
	wp_enqueue_style( 'discovery_template-style', get_template_directory_uri() . '/assets/css/discovery_styles.css' );
	wp_enqueue_style( 'searchpage-style', get_template_directory_uri() . '/assets/css/search_styles.css' );
	wp_enqueue_style( 'eventlist-style', get_template_directory_uri() . '/assets/css/eventlist_styles.css' );
	wp_enqueue_style( 'eventpage-style', get_template_directory_uri() . '/assets/css/event-page-template_styles.css' );
	wp_enqueue_style( 'blog-style', get_template_directory_uri() . '/assets/css/blog_styles.css' );



	wp_enqueue_style( 's0', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 's1', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css');
	wp_enqueue_style( 's2', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 's5', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i');
	wp_enqueue_style( 's6', 'https://fonts.googleapis.com/css?family=Permanent+Marker');
	wp_enqueue_style( 's7', 'https://fonts.googleapis.com/css?family=Parisienne');





	// wp_enqueue_script( 'rpl-libraria-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'rpl-libraria-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// wp_enqueue_script('1', get_template_directory_uri() . "/assets/js/jquery-1.4.1.min.js", array(), '20151215', true );
	// wp_deregister_script('jquery');
	// wp_enqueue_script('1', get_template_directory_uri() . "/assets/js/jquery-3.3.1.min.js", array(), '20151215', true );


	wp_enqueue_script('2', get_template_directory_uri() . "/assets/js/jquery-ui.min.js", array(), '20151215', true );
	wp_enqueue_script('3', get_template_directory_uri() . "/assets/js/jquery.easing.1.3.js", array(), '20151215', true );
	wp_enqueue_script('4', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '20151215', true );
	wp_enqueue_script('5', get_template_directory_uri() . "/assets/js/mmenu.min.js", array(), '20151215', true );
	wp_enqueue_script('6', get_template_directory_uri() . "/assets/js/harvey.min.js", array(), '20151215', true );
	wp_enqueue_script('7', get_template_directory_uri() . "/assets/js/waypoints.min.js", array(), '20151215', true );
	wp_enqueue_script('8', get_template_directory_uri() . "/assets/js/facts.counter.min.js", array(), '20151215', true );
	wp_enqueue_script('9', get_template_directory_uri() . "/assets/js/mixitup.min.js", array(), '20151215', true );
	wp_enqueue_script('10', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), '20151215', true );
	wp_enqueue_script('11', get_template_directory_uri() . "/assets/js/accordion.min.js", array(), '20151215', true );
	wp_enqueue_script('12', get_template_directory_uri() . "/assets/js/responsive.tabs.min.js", array(), '20151215', true );
	wp_enqueue_script('13', get_template_directory_uri() . "/assets/js/responsive.table.min.js", array(), '20151215', true );
	wp_enqueue_script('14', get_template_directory_uri() . "/assets/js/masonry.min.js", array(), '20151215', true );
	wp_enqueue_script('15', get_template_directory_uri() . "/assets/js/carousel.swipe.min.js", array(), '20151215', true );
	wp_enqueue_script('16', get_template_directory_uri() . "/assets/js/bxslider.min.js", array(), '20151215', true );
	wp_enqueue_script('17', get_template_directory_uri() . "/assets/js/main.js", array(), '20151215', true );
	wp_enqueue_script('18', get_template_directory_uri() . "/assets/js/js-cookie.js", array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rpl_libraria_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//Max's custom functions

function timerowsAPI($day, $branch_index, $body_string){
    echo "<tr>";
    echo "<td>$day</td>";
    echo "<td>";
    echo $body_string['locations'][$branch_index]['weeks'][0][$day]['rendered'];
    echo "</td>";
    echo "</tr>";
}


function custom_echo($x, $length){
  if(strlen($x)<=$length){
    echo $x;
  }else{
    $y=substr($x,0,$length) . '...';
    echo $y;
}}



//walker class

class comment_walker extends Walker_Comment {
	var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );




	// constructor – wrapper for the comments list
	function __construct() { ?>


	<?php }

	// start_lvl – wrapper for child comments list
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

		<ol class="children">

	<?php }
	// end_lvl – closing wrapper for child comments list
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>
		</ol>
	<?php }

	// start_el – HTML for comment template
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment;
		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

		if ( 'article' == $args['style'] ) {
			$tag = 'article';
			$add_below = 'comment';
		} else {
			$tag = 'article';
			$add_below = 'comment';
		} ?>

		<li <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
			<!-- <figure class="gravatar"><?php //echo get_avatar( $comment, 65, '[default gravatar URL]', 'Author’s gravatar' ); ?></figure> -->
			<div class="comment-body" itemprop="text">
				<div class="comment-author vcard">
						<img class="avatar avatar-32 photo avatar-default" src="<?php echo get_avatar_url($comment, get_comment_ID());?>" alt="Comment Author">
						<b class="fn">
								<a class="comment-author-link" href="<?php comment_author_url(); ?>" itemprop="author"><?php comment_author(); ?></a>
						</b>
				</div>
				<footer class="comment-meta">
						<div class="left-arrow"></div>
						<div class="reply">
							<?php comment_reply_link(array(
									    'add_below'  => 'comment',
									    'respond_id' => 'respond',
									    'reply_text' => __('<i class="fa fa-reply"></i> Reply'),
									    'login_text' => __('Log in to Reply'),
									    'depth'      => 1,
									    'before'     => '',
									    'after'      => '',
									    'max_depth'  => 3
						    ));?>

						</div>


						<div class="comment-metadata">
								<a href="#">
										<time datetime="2016-01-17">
												<b><?php comment_date('M j, Y') ?> / </b>  <?php echo esc_html( human_time_diff( get_comment_date('U'), current_time('U') ) ) . ' ago'; ?>
										</time>
								</a>
						</div>
						<div class="comment-content">
								<p><?php comment_text() ?></p>
						</div>
				</footer>
			</div>

	<?php }

	// end_el – closing HTML for comment template
	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
	</li>
	<?php }

	// destructor – closing wrapper for the comments list
	function __destruct() { ?>


	<?php }

}






//comments_open
function rpl_comment_form_layout ($fields) {
	$commenter = wp_get_current_commenter();
	$req       = get_option('require_name_email');
	$aria_req  = ($req ? " aria-required='true'" : '');
	$html_req  = ($req ? " required='required'" : '');
	$html5     = 'html5';

	$fields = array(
			'author' => '<p class="comment-form-author input-required">
											<input name="author" id="author" type="text" placeholder="Name *">
									</p>',




			'email' => '<p class="comment-form-email input-required">
														<input name="email" id="email" type="email" placeholder="Email *">
												</p>',
			'url' => '<p class="comment-form-subject input-required">
														<input name="url" id="subject" type="text" placeholder="Website">
												</p>',
	);
		 return $fields;
}
add_filter( 'comment_form_default_fields', 'rpl_comment_form_layout' );



//change output of getting an archive title to remove the tag, category, etc extra text
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }

    return $title;

});



//change excerpt length
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//time since posted
function get_time_since_posted() {

	$time_since_posted = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago';

	return $time_since_posted;

}


function is_old_post($days = 5) {
	$days = (int) $days;
	$offset = $days*60*60*24;
	if ( get_post_time() < date('U') - $offset )
		return true;

	return false;
}


//add infinite scroll via jetpack

// function infinite_scroll_render() {
// 	get_template_part( 'template-parts/blog/list/content', 'loop' );
// }
//
//
// function rpl_libraria_infinite_scroll_init() {
// 	add_theme_support( 'infinite-scroll', array(
// 			'type' => 'scroll',
// 	    'container' => 'blog-page-grid',
// 			'render' => 'infinite_scroll_render',
// 			'wrapper' => true,
// 			'footer' => true,
// 	) );
// }
// add_action( 'after_setup_theme', 'rpl_libraria_infinite_scroll_init' );
