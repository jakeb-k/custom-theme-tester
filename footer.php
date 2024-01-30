
    <div class="site-footer">
        <div class="footer-section">
        <?php
            $custom_logo_id = get_theme_mod('custom_logo'); // Get the logo ID
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the logo image URL
            if (has_custom_logo()) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
            }
        ?>
        <?php bloginfo('name'); ?>
        </div>
        <div class="footer-section">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>

        <div class="footer-section">
            <nav>
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'navMenu', // Use the registered menu location
                        'container' => false, // Remove the outer <div> container
                        'items_wrap' => '%3$s', // Display items without <ul> and <li>
                    ));
                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <?php wp_footer(); ?>

