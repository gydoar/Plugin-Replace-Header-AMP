<?php

/**
 * Header bar template part.
 * 
 * This is a forked version of the header-bar.php in the AMP plugin.
 * @link https://github.com/ampproject/amp-wp/blob/e63d2c3034d079f1a1b5bb2f0a2d1e0a221cadb9/templates/header-bar.php
 *
 * @package AMP
 */
?>
<header id="top" class="amp-wp-header">
    <div class="amp-menu">
        <a href="<?php echo esc_url($this->get('home_url')); ?>">
            <span class="amp-site-title">
                <!-- Replace for a custom logo -->
                <img src="<?php echo plugins_url('/img/logo.png', __FILE__) ?>" alt="<?php echo esc_html(wptexturize($this->get('blog_name'))); ?>">
            </span>
        </a>
        <!-- Replace for menu -->
        <?php if (has_nav_menu(NAV_MENU_LOCATION)) : ?>
            <button id="toggleNavMenu" type="button" on="tap:navMenu.open" aria-label="<?php esc_html__('Open nav menu', 'amp-reader-nav-menu'); ?>">Menu</button>
        <?php endif; ?>
        <!-- Replace for menu -->

        <?php $canonical_link_url = $this->get('post_canonical_link_url'); ?>
        <?php if ($canonical_link_url) : ?>
            <?php $canonical_link_text = $this->get('post_canonical_link_text'); ?>
            <a class="amp-wp-canonical-link" href="<?php echo esc_url($canonical_link_url); ?>">
                <?php echo esc_html($canonical_link_text); ?>
            </a>
        <?php endif; ?>
    </div>
</header>

<!-- Create the new menu -->
<?php if (has_nav_menu(NAV_MENU_LOCATION)) : ?>
    <?php
    printf(
        '<amp-sidebar id="navMenu" layout="nodisplay" side="%s">%s</amp-sidebar>',
        esc_attr(is_rtl() ? 'left' : 'right'),
        wp_nav_menu(
            [
                'theme_location' => NAV_MENU_LOCATION,
                'echo'           => false,
                'depth'          => 1,
                'menu_class' => 'navbar-nav',
                'container_class' => 'nav-primary'
            ]
        )
    );
    ?>
<?php endif; ?>