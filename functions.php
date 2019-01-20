<?php

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 267,
        'width'       => 380,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}


function custom_settings_add_menu() {
  add_menu_page( 'Kursy i kontakt', 'Kursy i kontakt', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );

// Data kursu
function setting_date() { ?>
  <input type="text" name="date" id="date" value="<?php echo get_option( 'date' ); ?>" />
<?php }

function setting_hour() { ?>
  <input type="text" name="hour" id="hour" value="<?php echo get_option( 'hour' ); ?>" />
<?php }

function setting_phone() { ?>
  <input type="tel" id="tel" name="tel"
           placeholder="000-000-000"
           pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" value="<?php echo get_option('tel'); ?>" />
<?php }


function setting_mail() { ?>
  <input type="email" id="mail" name="mail" value="<?php echo get_option('mail'); ?>" />
<?php }

  function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Zarządzaj informacjami na stronie!</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section');
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }
}

function custom_settings_page_setup() {
  add_settings_section( 'section', 'Data i godzina najbliższego kursu', null, 'theme-options' );
  add_settings_field( 'date', 'Data', 'setting_date', 'theme-options', 'section' );
  add_settings_field( 'hour', 'Godzina', 'setting_hour', 'theme-options', 'section' );
  add_settings_field( 'tel', 'Telefon', 'setting_phone', 'theme-options', 'section' );
  add_settings_field( 'mail', 'E-mail', 'setting_mail', 'theme-options', 'section' );
  register_setting('section', 'date');
  register_setting('section', 'hour');
  register_setting('section', 'tel');
  register_setting('section', 'mail');
}






function links() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('faicons', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('layout', get_template_directory_uri().'/css/layout.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}


remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function clean_script_tag( $input ) {
    $input = str_replace( "type='text/javascript' ", '', $input );

    return str_replace( "'", '"', $input );
}

add_filter( 'links', 'clean_script_tag'  );



add_action( 'wp_enqueue_scripts', 'links' );

add_action( 'admin_menu', 'custom_settings_add_menu' );

add_action( 'admin_init', 'custom_settings_page_setup' );

themename_custom_logo_setup();

?>