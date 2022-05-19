<?php

/**
 * New Header Legacy AMP Template
 */

// Replace the file header-bar.php in the plugin AMP for our own file in the public folder
add_filter(
    'amp_post_template_file',
    function ($template_file) {
        if (basename($template_file) === 'header-bar.php') {
            $template_file = __DIR__ . '/header-bar.php';
        }
        return $template_file;
    }
);


// Register the nav menu location if not in Standard/Transitional modes.

const NAV_MENU_LOCATION = 'amp_reader_sidebar';
add_action(
    'init',
    function () {
        if (!current_theme_supports('amp')) {
            register_nav_menu(NAV_MENU_LOCATION, __('AMP Reader[mode] Menu sidebar', 'amp-reader-nav-menu'));
        }
    }
);


add_filter(
    'amp_post_template_data',
    function ($data) {
        $data['amp_component_scripts'] = array_merge(
            $data['amp_component_scripts'],
            array(
                'amp-sidebar' => true,
            )
        );
        return $data;
    }
);

// Add aditional information in the Footer
add_action(
    'amp_post_template_footer',
    function () {
        //get_template_part('footer');
    }
);

// Add custom CSS
add_action(
    'amp_post_template_css',
    function () {
?>
    .amp-wp-header{
    background-color: #FFFFFF;
    }

    header.amp-wp-header amp-img{
    height: 40px;
    width: 224px;
    }

    header .amp-menu{
    display: flex;
    justify-content: space-between;
    }
    amp-sidebar{
    width:60%;
    background-color:#ffffff;
    }
    button#toggleNavMenu {
    background: none;
    border: none;
    color: gray;
    text-decoration: underline;
    }

    .nav-primary{
    text-align:center;
    padding-top:50px;
    }

    .nav-primary ul li a{
    text-decoration:none;
    }
<?php }
);
