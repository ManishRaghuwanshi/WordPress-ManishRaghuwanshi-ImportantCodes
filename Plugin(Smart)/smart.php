<?php
/*
Plugin Name: smart
Plugin URI: http://www.smartinfosys.net
Description: custom post type
Version: 1.0 
Author: Smart Infosys
Author URI: http://smartinfosys.net/
*/

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

function display_instagram_element()
{
?>
  <input type="url" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
<?php
}

function display_facebook_element()
{
?>
  <input type="url" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
<?php
}

function display_tiktok_element()
{
?>
  <input type="url" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
<?php
}

function display_linkedin_url_element()
{
?>
  <input type="url" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
<?php
}

function display_address_element()
{
?>
  <input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>" />
<?php
}

function display_openinghour_element()
{
?>
  <input type="text" name="openinghour" id="openinghour" value="<?php echo get_option('openinghour'); ?>" />
<?php
}

function display_fphoneno_element()
{
?>
  <input type="text" name="fphoneno" id="fphoneno" maxlength="15" value="<?php echo get_option('fphoneno'); ?>" />
<?php
}

function display_theme_panel_fields()
{
  add_settings_section("section", "All Settings", null, "Theme-panel");
  add_settings_field("instagram_url", "Instagram Url", "display_instagram_element", "Theme-panel", "section");
  add_settings_field("facebook_url", "Facebook Url", "display_facebook_element", "Theme-panel", "section");
  add_settings_field("twitter_url", "Twitter Url", "display_tiktok_element", "Theme-panel", "section");
  add_settings_field("linkedin_url", "Linkedin Url", "display_linkedin_url_element", "Theme-panel", "section");
  add_settings_field("fphoneno", "Phone No", "display_fphoneno_element", "Theme-panel", "section");
  add_settings_field("openinghour", "Opening Hours", "display_openinghour_element", "Theme-panel", "section");
  add_settings_field("address", "Address", "display_address_element", "Theme-panel", "section");

  register_setting("section", "instagram_url");
  register_setting("section", "facebook_url");
  register_setting("section", "twitter_url");
  register_setting("section", "linkedin_url");
  register_setting("section", "address");
  register_setting("section", "openinghour");
  register_setting("section", "fphoneno");
}

add_action("admin_init", "display_theme_panel_fields");

// Shortcodes

function sociallink()
{
    ob_start();
    $facebook = get_option('facebook_url');
    $instagram = get_option('instagram_url');
    $tiktok = get_option('twitter_url');
    $linkedin = get_option('linkedin_url');
?>
  <ul class="socialicon-link">
    <?php if (!empty($facebook)) { ?>
      <li class="facebook"><a target="_blank" href="<?php echo esc_url($facebook); ?>">Facebook</a></li>
    <?php } ?>

    <?php if (!empty($tiktok)) { ?>
      <li class="twitter"><a target="_blank" href="<?php echo esc_url($tiktok); ?>">Twitter</a></li>
    <?php } ?>

    <?php if (!empty($instagram)) { ?>
      <li class="instagram"><a target="_blank" href="<?php echo esc_url($instagram); ?>">Instagram</a></li>
    <?php } ?>

    <?php if (!empty($linkedin)) { ?>
      <li class="linkedin url"><a target="_blank" href="<?php echo esc_url($linkedin); ?>">Linkedin</a></li>
    <?php } ?>
  </ul>
<?php
  return ob_get_clean();
}

add_shortcode('sociallink', 'sociallink');

// Address Shortcode

function redfern_address()
{
   ob_start();
   $phone = get_option('fphoneno');
?>
  <ul class='contact_us'>
    <?php if (!empty(get_option('address'))) { ?>
      <li class="address">
        <p class='cname-next-line'>
          <label class="address-labal">Address</label>
          <p class="address-text"><?php echo esc_attr(get_option('address')); ?></p>
        </p>
      </li>
    <?php } ?>

    <?php if (!empty($phone)) { ?>
      <li class="fphoneno">
        <label class="phone-labal">Phone</label>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?php echo esc_html($phone); ?></a>
      </li>
    <?php } ?>

    <?php if (!empty(get_option('openinghour'))) { ?>
      <li class="openinghours">
        <label class="openinghours">Opening Hours</label>
        <p class="openinghours"><?php echo esc_attr(get_option('openinghour')); ?></p>
      </li>
    <?php } ?>
  </ul>
<?php
  return ob_get_clean();
}

add_shortcode('address', 'redfern_address');

// Crazy Footer Styles

function my_crazy_admin_footer() {
  echo '<style type="text/css">
  #wp-admin-bar-wp-logo, #wp-admin-bar-updates, #wp-admin-bar-comments, #wp-admin-bar-new-content,
  #dashboard_right_now .b-tags,
  #dashboard_right_now .tags, #wpfooter,
  #dashboard_right_now .b-comments,
  #dashboard_right_now .comments,#dashboard_right_now .b-posts,
  #dashboard_right_now .posts,#dashboard_right_now .table_discussion, .plugin-version-author-uri, .plugin-update-tr, .update-plugins, .update-nag, #wp-version-message, #dashboard_right_now .main p {
  display:none !important;
  }
  </style>';
}
add_action('admin_footer', 'my_crazy_admin_footer');

// Admin Logo

function replace_wp_logo() { ?>
  <style type="text/css">
      #login h1 a, .login h1 a {
      background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2023/09/logo.png);
      height:100px;
      width:320px;
      background-size: 320px 120px;
      background-repeat: no-repeat;
      background-color: black;
      background-position: center;
      background-size: contain;
      padding-bottom: 30px;
      }
  </style>
<?php
}
add_action('login_head', 'replace_wp_logo');

add_filter('login_headerurl', 'fnAdminLogoURL');
function fnAdminLogoURL($url) {
  return home_url();
}

// Breadcrumb

function page_url_function() {
  ob_start();
  global $post;

  if (!is_front_page()) {
    ?>
    <div class="container">
        <ul class="breadcrumb">
          <?php if (is_404()) { ?>
            <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
            <li>404 ERROR</li>
          <?php } else { ?>
            <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
            <?php echo '<li>' . esc_html(get_the_title()) . '</li>';
          } ?>
        </ul>
      </div>
    <?php
  }
  return ob_get_clean();
}

add_shortcode('breadcrumb', 'page_url_function');

// 404 Banner Widget

function my_custom_sidebar() {
  register_sidebar(
      array (
          'name' => __( '404 Banner', 'your-theme-domain' ),
          'id' => '404-banner-content',
          'description' => __( '404 Banner', 'your-theme-domain' ),
          'before_widget' => '<div class="widget-content">',
          'after_widget' => "</div>",
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>',
      )
  );
}

add_action( 'widgets_init', 'my_custom_sidebar' );
