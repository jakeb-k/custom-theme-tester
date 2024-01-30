
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="site-header">

        <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                    $logo = get_custom_logo();
                    if ($logo) {
                        echo $logo;
                    }
                    ?>
                <?php bloginfo('name'); ?>
                </a>

        </div>
        <div class="site-navigation">
            <nav>
               
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'navMenu', // Use the registered menu location
                        'container' => false, // Remove the outer <div> container
                        'items_wrap' => '%3$s', // Display items without <ul> and <li>
                    ));
                    ?>
                
            </nav>
        </div>
        <div class="site-actions">
            <div class="slideBtn">
                <button> Contact Now </button>
            </div>
        </div>
    </div>
 

