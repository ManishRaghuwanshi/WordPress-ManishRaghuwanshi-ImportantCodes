<?php /*
Plugin Name:  smart
DescriPlugin URI:   https://www.smart.net
ption:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       Smartinfosys
Author URI:   https://www.smart.net
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/


//code to enqueue font awesome link, stylesheet


/*

In This we have developed a functionality of category vised carousel with the help of ACF plugin and theme panel created too

*/

function my_stylesheet(){
    $theme_version = wp_get_theme()->get( 'Version' );
 

    wp_enqueue_style('owl-custom-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_script( 'owl-custom-js',get_stylesheet_directory_uri() .'/assets/js/owl.carousel.min.js',array('jquery'));
    
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css',array(),$theme_version);
    wp_enqueue_style( 'smart-style', get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(),$theme_version);
    wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css',array(),$theme_version);
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(jquery), $theme_version);

 wp_enqueue_style( 'font-awesome-cdn',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
}
add_action( 'wp_enqueue_scripts', 'my_stylesheet',99 );


//code to create theme panel..

function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Theme panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("Theme-panel");
	            submit_button(); 
	        ?>
	    </form>
		</div>
	<?php
}

function add_theme_menu_item()
{
	add_menu_page("Theme panel", "Theme panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    
}

add_action("admin_menu", "add_theme_menu_item");

function display_address_element()
{
	?>
    	<input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>" />
    <?php
}
function display_address1_element()
{
	?>
    	<input type="text" name="address1" id="address1" value="<?php echo get_option('address1'); ?>" />
    <?php
}
function display_address2_element()
{
	?>
    	<input type="text" name="address2" id="address2" value="<?php echo get_option('address2'); ?>" />
    <?php
}
function display_address3_element()
{
	?>
    	<input type="text" name="address3" id="address3" value="<?php echo get_option('address3'); ?>" />
    <?php
}
function display_address4_element()
{
	?>
    	<input type="text" name="address4" id="address4" value="<?php echo get_option('address4'); ?>" />
    <?php
}
function display_address5_element()
{
	?>
    	<input type="text" name="address5" id="address5" value="<?php echo get_option('address5'); ?>" />
    <?php
}
function display_address6_element()
{
	?>
    	<input type="text" name="address6" id="address6" value="<?php echo get_option('address6'); ?>" />
    <?php
}
function display_phoneno_element()
{
	?>
    	<input type="text" name="phoneno" id="phoneno" value="<?php echo get_option('phoneno'); ?>" />
    <?php
}
function display_phoneno1_element()
{
	?>
    	<input type="text" name="phoneno1" id="phoneno1" value="<?php echo get_option('phoneno1'); ?>" />
    <?php
}
function display_phoneno2_element()
{
	?>
    	<input type="text" name="phoneno2" id="phoneno2" value="<?php echo get_option('phoneno2'); ?>" />
    <?php
}
function display_phoneno3_element()
{
	?>
    	<input type="text" name="phoneno3" id="phoneno3" value="<?php echo get_option('phoneno3'); ?>" />
    <?php
}
function display_phoneno4_element()
{
	?>
    	<input type="text" name="phoneno4" id="phoneno4" value="<?php echo get_option('phoneno4'); ?>" />
    <?php
}
function display_phoneno5_element()
{
	?>
    	<input type="text" name="phoneno5" id="phoneno5" value="<?php echo get_option('phoneno5'); ?>" />
    <?php
}
function display_phoneno6_element()
{
	?>
    	<input type="text" name="phoneno6" id="phoneno6" value="<?php echo get_option('phoneno6'); ?>" />
    <?php
}
function display_email_element()
{
	?>
    	<input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}
function display_email1_element()
{
	?>
    	<input type="text" name="email1" id="email1" value="<?php echo get_option('email1'); ?>" />
    <?php
}
function display_email2_element()
{
	?>
    	<input type="text" name="email2" id="email2" value="<?php echo get_option('email2'); ?>" />
    <?php
}
function display_email3_element()
{
	?>
    	<input type="text" name="email3" id="email3" value="<?php echo get_option('email3'); ?>" />
    <?php
}
function display_email4_element()
{
	?>
    	<input type="text" name="email4" id="email4" value="<?php echo get_option('email4'); ?>" />
    <?php
}
function display_email5_element()
{
	?>
    	<input type="text" name="email5" id="email5" value="<?php echo get_option('email5'); ?>" />
    <?php
}
function display_email6_element()
{
	?>
    	<input type="text" name="email6" id="email6" value="<?php echo get_option('email6'); ?>" />
    <?php
}
function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "Theme-panel");
    add_settings_field("phoneno", "phoneno", "display_phoneno_element", "Theme-panel", "section");
    add_settings_field("phoneno1", "phoneno1", "display_phoneno1_element", "Theme-panel", "section");
    add_settings_field("phoneno2", "phoneno2", "display_phoneno2_element", "Theme-panel", "section");
    add_settings_field("phoneno3", "phoneno3", "display_phoneno3_element", "Theme-panel", "section");
    add_settings_field("phoneno4", "phoneno4", "display_phoneno4_element", "Theme-panel", "section");
    add_settings_field("phoneno5", "phoneno5", "display_phoneno5_element", "Theme-panel", "section");
    add_settings_field("phoneno6", "phoneno6", "display_phoneno6_element", "Theme-panel", "section");
    add_settings_field("email1", "email1", "display_email1_element", "Theme-panel", "section");
    add_settings_field("email2", "email2", "display_email2_element", "Theme-panel", "section");
    add_settings_field("email3", "email3", "display_email3_element", "Theme-panel", "section");
    add_settings_field("email4", "email4", "display_email4_element", "Theme-panel", "section");
    add_settings_field("email5", "email5", "display_email5_element", "Theme-panel", "section");
    add_settings_field("email6", "email6", "display_email6_element", "Theme-panel", "section");
	add_settings_field("email", "email", "display_email_element", "Theme-panel", "section");
	add_settings_field("address", "address", "display_address_element", "Theme-panel", "section");
    add_settings_field("address1", "address1", "display_address1_element", "Theme-panel", "section");
    add_settings_field("address2", "address2", "display_address2_element", "Theme-panel", "section");
    add_settings_field("address3", "address3", "display_address3_element", "Theme-panel", "section");
    add_settings_field("address4", "address4", "display_address4_element", "Theme-panel", "section");
    add_settings_field("address5", "address5", "display_address5_element", "Theme-panel", "section");
    add_settings_field("address6", "address6", "display_address6_element", "Theme-panel", "section");
    
    register_setting("section", "address");
    register_setting("section", "address1");
    register_setting("section", "address2");
    register_setting("section", "address3");
    register_setting("section", "address4");
    register_setting("section", "address5");
    register_setting("section", "address6");
    register_setting("section", "phoneno");
    register_setting("section", "phoneno1");
    register_setting("section", "phoneno2");
    register_setting("section", "phoneno3");
    register_setting("section", "phoneno4");
    register_setting("section", "phoneno5");
    register_setting("section", "phoneno6");
	register_setting("section", "email");
    register_setting("section", "email1");
    register_setting("section", "email2");
    register_setting("section", "email3");
    register_setting("section", "email4");
    register_setting("section", "email5");
    register_setting("section", "email6");
    
}

add_action("admin_init", "display_theme_panel_fields");

function contact_custom()
{
	ob_start();
	?>
	<ul class='contact'>		
	<?php
        if(!get_option('address')=='')
        { ?>
            <li class="address" >
                <div class="company_address">
                    <p><?php  echo esc_attr( get_option('address') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno')=='')
        { ?>
            <li class="phoneno" >
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno"); ?>"><?php echo get_option("phoneno"); ?></a>
                </div>
            </li>
        <?php
        } ?>

<?php
        if(!get_option('email')=='')
        { ?>
            <li class="email" >
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email"); ?>"><?php echo get_option("email"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('headoffice','contact_custom');

function contact_custom1()
{
	ob_start();
	?>
	<ul class='contact1'>
	<?php
        if(!get_option('address1')=='')
        { ?>
            <li class="address1" >
                <div class="company_address">
                    <p><?php echo esc_attr( get_option('address1') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno1')=='')
        { ?>
            <li class="phoneno1">
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno1"); ?>"><?php echo get_option("phoneno1"); ?></a>
                </div>
            </li>
        <?php
        } ?>

        <?php
        if(!get_option('email1')=='')
        { ?>
            <li class="email1">
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email1"); ?>"><?php echo get_option("email1"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('canberra','contact_custom1');

function contact_custom2()
{
	ob_start();
	?>
	<ul class='contact2'>
	<?php
        if(!get_option('address2')=='')
        { ?>
            <li class="address2" >
                <div class="company_address">
                    <p><?php echo esc_attr( get_option('address2') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno2')=='')
        { ?>
            <li class="phoneno2">
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno2"); ?>"><?php echo get_option("phoneno2"); ?></a>
                </div>
            </li>
        <?php
        } ?>

        <?php
        if(!get_option('email2')=='')
        { ?>
            <li class="email2">
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email2"); ?>"><?php echo get_option("email2"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('northern','contact_custom2');

function contact_custom3()
{
	ob_start();
	?>
	<ul class='contact3'>
	<?php
        if(!get_option('address3')=='')
        { ?>
            <li class="address3" >
                <div class="company_address">
                    <p><?php echo esc_attr( get_option('address3') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno3')=='')
        { ?>
            <li class="phoneno3">
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno3"); ?>"><?php echo get_option("phoneno3"); ?></a>
                </div>
            </li>
        <?php
        } ?>

        <?php
        if(!get_option('email3')=='')
        { ?>
            <li class="email3">
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email3"); ?>"><?php echo get_option("email3"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('brisbane','contact_custom3');

function contact_custom4()
{
	ob_start();
	?>
	<ul class='contact4'>
	<?php
        if(!get_option('address4')=='')
        { ?>
            <li class="address4" >
                <div class="company_address">     
                    <p><?php echo esc_attr( get_option('address4') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno4')=='')
        { ?>
            <li class="phoneno4">
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno4"); ?>"><?php echo get_option("phoneno4"); ?></a>
                </div>
            </li>
        <?php
        } ?>

        <?php
        if(!get_option('email4')=='')
        { ?>
            <li class="email4">
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email4"); ?>"><?php echo get_option("email4"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('melbourne','contact_custom4');

function contact_custom5()
{
	ob_start();
	?>
	<ul class='contact5'>
	<?php
        if(!get_option('address5')=='')
        { ?>
            <li class="address5" >
                <div class="company_address">
                    <p><?php echo esc_attr( get_option('address5') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno5')=='')
        { ?>
            <li class="phoneno5">
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno5"); ?>"><?php echo get_option("phoneno5"); ?></a>
                </div>
            </li>
        <?php
        } ?>

        <?php
        if(!get_option('email5')=='')
        { ?>
            <li class="email5">
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email5"); ?>"><?php echo get_option("email5"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('nsw','contact_custom5');

function contact_custom6()
{
	ob_start();
	?>
	<ul class='contact6'>
	<?php
        if(!get_option('address6')=='')
        { ?>
            <li class="address6" >
                <div class="company_address">
                    <p><?php echo esc_attr( get_option('address6') );?></p>
                </div>
            </li>
        <?php
        } ?>

    <?php
        if(!get_option('phoneno6')=='')
        { ?>
            <li class="phoneno6">
                <div class="company_phone">
                <a href="tel:<?php echo get_option("phoneno6"); ?>"><?php echo get_option("phoneno6"); ?></a>
                </div>
            </li>
        <?php
        } ?>

        <?php
        if(!get_option('email6')=='')
        { ?>
            <li class="email6">
                <div class="company_email">
                <a href="mailto:<?php echo get_option("email6"); ?>"><?php echo get_option("email6"); ?></a>
                </div>
            </li>
        <?php
        } ?>
        </ul>
  <?php
	return ob_get_clean();
}
add_shortcode('goldcoast','contact_custom6');

function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Our LinkedinPr', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'LinkedinPr', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Our LinkedinPr', 'text_domain' ),
		'name_admin_bar'        => __( 'LinkedinPr', 'text_domain' ),
		'archives'              => __( 'Posts Archives', 'text_domain' ),
		'attributes'            => __( 'Posts Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Posts:', 'text_domain' ),
		'all_items'             => __( 'All Posts', 'text_domain' ),
		'add_new_item'          => __( 'Add New Posts', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Posts', 'text_domain' ),
		'edit_item'             => __( 'Edit Posts', 'text_domain' ),
		'update_item'           => __( 'Update Posts', 'text_domain' ),
		'view_item'             => __( 'View Posts', 'text_domain' ),
		'view_items'            => __( 'View Posts', 'text_domain' ),
		'search_items'          => __( 'Search Posts', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Posts', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Posts', 'text_domain' ),
		'items_list'            => __( 'Posts list', 'text_domain' ),
		'items_list_navigation' => __( 'Posts list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Posts list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Our LinkedinPr', 'text_domain' ),
		'description'           => __( 'LinkedinPr Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'button'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'LinkedinPr', $args );

	}
	add_action( 'init', 'custom_post_type', 0 );

	//add_theme_support( 'post-thumbnails' );

	add_action( 'after_setup_theme', 'theme_setup' );
	//Get Categories
	function rmcc_post_listing_shortcode1( $args ) {
		ob_start();
		echo '<ul class="nav nav-tabs" role="tablist">';
    	$args = array(
        	'hide_empty'=> 1,
        	'orderby' => 'name',
        	'order' => 'ASC',
			'number'=> 5
		);	
    	$categories = get_categories($args);
    	foreach($categories as $category) { 
        	echo 
            	'<li class="nav-item">
               		<a href="#'.$category->slug.'" role="tab" class="nav-link" data-toggle="tab">
                    	'.$category->name.'
                	</a>
            	</li>';
    	}
    	echo '</ul>';
    	echo '<div class="tab-content">';
    	foreach($categories as $category) {
        	echo '<div class="tab-pane" id="'.$category->slug.'">';
				$the_query = new WP_Query(array(
					'post_type' => 'LinkedinPr',
					'posts_per_page' => -1,
					'category_name' => $category->slug
				));
				echo '<div class="pr-slider owl-carousel">';
				$p = 0;
					while ( $the_query->have_posts() ) : 
						$the_query->the_post();
                        echo '<div class="img-sec-wrap">';
                            echo '<div class="img-div">';
                                echo '<a class="img-link">';
							       echo the_post_thumbnail();
                                echo '</a>';
						    echo '</div>';
                            echo '<div class="sec-wrap">';
                                echo '<div class="title-div">';
							       echo the_title();
						        echo '</div>';
                                echo '<div class="cont-div">';
							      echo the_content();
						        echo '</div>';
						        echo '<a class="ind-div" href="'.get_field('link').'" target="_blank">';
							      echo get_field('link');
						        echo '</a>';
                            echo '</div>';
                        echo '</div>';
					endwhile;
				echo '</div>';
			echo '</div>';
		}
		echo '</div>';
		
		return ob_get_clean();
	}

	add_shortcode( 'post-type', 'rmcc_post_listing_shortcode1' );

    function replace_wp_logo() {
        echo '<style type="text/css">
        h1 a { background-image:url('.site_url().'/wp-content/uploads/2023/07/logo.png) !important; background-size: 150px 150px !important;
        height: 150px !important;width:150px !important;
        }
        </style>';
        add_filter( 'login_headerurl', 'fnAdminLogoURL' );
        function fnAdminLogoURL($url) {
        return home_url();
        }
    }
    add_action('login_head', 'replace_wp_logo');

    function custom_post_type2() {

		$labels = array(
			'name'                  => _x( 'Careers', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Careers', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Careers', 'text_domain' ),
			'name_admin_bar'        => __( 'Careers', 'text_domain' ),
			'archives'              => __( 'Posts Archives', 'text_domain' ),
			'attributes'            => __( 'Posts Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Posts:', 'text_domain' ),
			'all_items'             => __( 'All Posts', 'text_domain' ),
			'add_new_item'          => __( 'Add New Posts', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Posts', 'text_domain' ),
			'edit_item'             => __( 'Edit Posts', 'text_domain' ),
			'update_item'           => __( 'Update Posts', 'text_domain' ),
			'view_item'             => __( 'View Posts', 'text_domain' ),
			'view_items'            => __( 'View Posts', 'text_domain' ),
			'search_items'          => __( 'Search Posts', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Posts', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Posts', 'text_domain' ),
			'items_list'            => __( 'Posts list', 'text_domain' ),
			'items_list_navigation' => __( 'Posts list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Posts list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Careers', 'text_domain' ),
			'description'           => __( 'Careers Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'           => array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions'),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Careers', $args );

	}
	add_action( 'init', 'custom_post_type2', 0 );

	add_theme_support( 'post-thumbnails' );

	add_action( 'after_setup_theme', 'theme_setup' );

	add_shortcode( 'list-post', 'rmcc_post_listing_shortcode2' );
	function rmcc_post_listing_shortcode2( $atts ) {
		ob_start();
		$query = new WP_Query( array(
			'post_type' => 'Careers',
			'posts_per_page' => -1,
			'order' => 'ASC',
			'category_name' => 'current-vacancies',
		) );
		if ( $query->have_posts() ) { ?>
			<ul class="career">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="career-wrap">
					<div class='title-wrap'>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class='cont-wrap'><?php echo get_field('description'); ?></div>
					<button id="btn-red"><a href="<?php the_permalink(); ?>">Apply Now</a></button>
                </div>
				</li>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</ul>
		<?php $myvariable = ob_get_clean();
		return $myvariable;
		}
	}
    add_shortcode( 'list-post1', 'rmcc_post_listing_shortcode3' );
    function rmcc_post_listing_shortcode3( $atts ) {
		ob_start();
		$query = new WP_Query( array(
			'post_type' => 'Careers',
			'posts_per_page' => -1,
			'order' => 'ASC',
			'category_name' => 'undergraduate-intern-program',
		) );
		if ( $query->have_posts() ) { ?>
			<ul class="career">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="career-wrap">
					<div class='title-wrap'>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class='cont-wrap'><?php echo get_field('description'); ?></div>
                    <button id="btn-red"><a href="<?php the_permalink(); ?>">Apply Now</a></button>
                </div>
				</li>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</ul>
		<?php $myvariable = ob_get_clean();
		return $myvariable;
		}
	}

    add_action('init', function () {
        add_rewrite_rule('careers/?$','index.php?pagename=careers', 'top');
        flush_rewrite_rules();
    }, 1000);

	add_filter( 'wpseo_breadcrumb_single_link' ,'wpseo_just_remove_breadcrumb_link', 10 ,2);
function wpseo_just_remove_breadcrumb_link( $link_output , $link ){
    $text_to_remove = ['Services', 'Something else'];
    if(in_array($link['text'] , $text_to_remove )) {
        $link_output = str_replace('href="'.$link['url'].'"' , "" , $link_output);
        return str_replace('data-wpel-link="internal"' , "" , $link_output);
    }
    return $link_output;
}

add_action('wpcf7_init', 'add_google_search_field');

function add_google_search_field() {
    wpcf7_add_form_tag('google-search', 'render_google_search_field');
}

function render_google_search_field($tag) {
    $tag = new WPCF7_FormTag($tag);

    $html = '<input type="text" name="' . $tag->name . '" value="' . $tag->get_default_option() . '" class="wpcf7-form-control wpcf7-text" size="40" aria-required="true" aria-invalid="false" placeholder="' . $tag->get_placeholder() . '" />';
    $html .= '<span class="wpcf7-form-control-wrap ' . $tag->name . '"></span>';

    return $html;
}