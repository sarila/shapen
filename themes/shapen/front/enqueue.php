<?php
   function shapen_enqueue_scripts(){
       $uri = get_theme_file_uri();
       $ver = SHAPEN_DEV_MODE ? time() : false;
       // CSS
       wp_register_style('bootstrap_css', $uri . '/assets/css/bootstrap.min.css', [], $ver);
       wp_register_style('fontawesome_css', $uri . '/assets/css/fontawesome/css/font-awesome.min.css', [], $ver);
       wp_register_style('owl_css', $uri . '/assets/css/owl.carousel.min.css', [], $ver);
       wp_register_style('popup_css', $uri . '/assets/css/magnific-popup.min.css', [], $ver);
       wp_register_style('loader_css', $uri . '/assets/css/loader.min.css', [], $ver);
       wp_register_style('flaticon_css', $uri . '/assets/css/flaticon.min.css', [], $ver);
       wp_register_style('style_css', $uri . '/assets/css/style.css', [], $ver);
       wp_register_style('skin_css', $uri . '/assets/css/skin/skin-1.css', [], $ver);
       wp_register_style('switcher_css', $uri . '/assets/css/switcher.css', [], $ver);
       wp_register_style('setting_css', $uri . '/assets/plugins/revolution/revolution/css/settings.css', [], $ver);
       wp_register_style('nav_css', $uri . '/assets/plugins/revolution/revolution/css/navigation.css', [], $ver);
       wp_register_style('font_css','https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', [], $ver);
       wp_register_style('font1_css', 'https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', [], $ver);
       
       wp_enqueue_style('bootstrap_css');
       wp_enqueue_style('fontawesome_css');
       wp_enqueue_style('owl_css');
       wp_enqueue_style('popup_css');
       wp_enqueue_style('loader_css');
       wp_enqueue_style('flaticon_css');
       wp_enqueue_style('style_css');
       wp_enqueue_style('skin_css');
       wp_enqueue_style('switcher_css');
       wp_enqueue_style('setting_css');
       wp_enqueue_style('nav_css');
       wp_enqueue_style('font_css');
       wp_enqueue_style('font1_css');



       // JS
       wp_register_script('bootstrap_js', $uri . '/assets/js/bootstrap.min.js', [], $ver, true);
       wp_register_script('popup_js', $uri . '/assets/js/magnific-popup.min.js', [], $ver, true);
       wp_register_script('waypoint_js', $uri . '/assets/js/waypoints.min.js', [], $ver, true);
       wp_register_script('counter_js', $uri . '/assets/js/counterup.min.js', [], $ver, true);
       wp_register_script('sticky_js', $uri . '/assets/js/waypoints-sticky.min.js', [], $ver, true);
       wp_register_script('isotope_js', $uri . '/assets/js/isotope.pkgd.min.js', [], $ver, true);
       wp_register_script('owl_js', $uri . '/assets/js/owl.carousel.min.js', [], $ver, true);
       wp_register_script('filter_js', $uri . '/assets/js/jquery.owl-filter.js', [], $ver, true);
       wp_register_script('stellar_js', $uri . '/assets/js/stellar.min.js', [], $ver, true);
       wp_register_script('custom_js', $uri . '/assets/js/custom.js', [], $ver, true);
       wp_register_script('shortcode_js', $uri . '/assets/js/shortcode.js', [], $ver, true);
       wp_register_script('bgscroll_js', $uri . '/assets/js/jquery.bgscroll.js', [], $ver, true);
       wp_register_script('switcher_js', $uri . '/assets/js/switcher.js', [], $ver, true);
       wp_register_script('themepunch_js', $uri . '/assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js', [], $ver, true);
       wp_register_script('revolution_js', $uri . '/assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js', [], $ver, true);
       wp_register_script('plugin_js', $uri . '/assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js', [], $ver, true);
       wp_register_script('script_js', $uri . '/assets/js/rev-script-1.js', [], $ver, true);
       


       wp_enqueue_script('jquery');
       wp_enqueue_script('bootstrap_js');
       wp_enqueue_script('popup_js');
       wp_enqueue_script('waypoint_js');
       wp_enqueue_script('counter_js');
       wp_enqueue_script('sticky_js');
       wp_enqueue_script('isotope_js');
       wp_enqueue_script('owl_js');
       wp_enqueue_script('filter_js');
       wp_enqueue_script('stellar_js');
       wp_enqueue_script('custom_js');
       wp_enqueue_script('shortcode_js');
       wp_enqueue_script('bgscroll_js');
       wp_enqueue_script('switcher_js');
       wp_enqueue_script('themepunch_js');
       wp_enqueue_script('revolution_js');
       wp_enqueue_script('plugin_js');
       wp_enqueue_script('script_js');
       
   }

