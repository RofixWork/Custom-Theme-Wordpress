<?php
    function web_files() {
        wp_enqueue_script("web_js_file", get_theme_file_uri("/build/index.js"), NULL, "1.0", true);
        wp_enqueue_style("web_style_files", get_stylesheet_uri());
        wp_enqueue_style("web_font", "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
        wp_enqueue_style("web_font_awesome", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    }
    function web_features() {
        add_theme_support("title-tag");
    }
    add_action("wp_enqueue_scripts", "web_files");
    add_action("after_setup_theme", "web_features");
?>