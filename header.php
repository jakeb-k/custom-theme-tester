
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
   
    <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/mowgo.jpg" alt="Descriptive Alt Text">
    </div>
    <div class="header-section">
        <div class="slideBtn" style="margin-top:42.5px; --color:#ccff33;">
            <button>TESTIMONIALS</button>
        </div>

        <div class="h-sub-sec">

            <div class="icons">
                <span class="icons"><i class="fa-brands fa-square-facebook fa-2x" style="color: #ccff33;"></i></span>
                <span class="icons"><i class="fa-brands fa-instagram fa-2x" style="color: #ccff33;"></i></span>
            </div>

            <div class="slideBtn" style="--color:#ccff33; ">
                <button>CONTACT</button>
            </div>
        </div>
      
    </div>
</div>
