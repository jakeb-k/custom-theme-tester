
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Freemans Lawn's</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
   
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/mowgo.jpg" alt="Descriptive Alt Text">
        </a>
    </div>
    <div class="header-section">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('testimonials'))); ?>"> 
        <div class="slideBtn" style="margin-top:42.5px; --color:#ccff33;">
            <button>TESTIMONIALS</button>
        </div>
        </a>
        <div class="h-sub-sec">

            <div class="icons">
                <span class="icons"><i class="fa-brands fa-square-facebook fa-2x" style="color: #ccff33;"></i></span>
                <span class="icons"><i class="fa-brands fa-instagram fa-2x" style="color: #ccff33;"></i></span>
            </div>
        
            <div class="slideBtn2" style="--color:#ccff33; ">
                <button>CONTACT</button>
            </div>
      
        </div>
      
    </div>
</div>
