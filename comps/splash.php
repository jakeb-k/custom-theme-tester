<div class="splash-container">
    <div class="cta">
        <?php
        if (isset($_GET['submission']) && $_GET['submission'] === 'success') {
        echo '<div class="submission-success"><p><i class="fa-solid fa-envelope-circle-check"></i> Message was sent!</p></div>';
        } ?> 
        <h1> Get a FREE Quote <a>NOW!</a></h1>
        <h3>Contact our lawn mowing experts today (based in South Gold Coast) for a beautifully manicured yard that 
            will make your neighbors green with envy! 
            <span class="heart-beat">
            <button class="vine-button" style="color:white;">CONTACT NOW →</button>
            </span>
        </h3>
        <div class="before-after">
            <h1>BEFORE</h1>
            <h1>AFTER</h1>
        </div>
        <div class="slides-container">
            <div class="slideshow">
                <?php 
                for ($i = 1; $i <= 5; $i++) {
                    // Use ACF's get_field() function to get the image URL directly
                    // Ensure your ACF field is set to return 'Image URL' in the field settings
                    $slide_image_url = get_field('before_' . $i);

                    // Check if the field actually has an image URL
                    if (!empty($slide_image_url)): ?>
                        <div class="slide">
                            <img src="<?php echo esc_url($slide_image_url); ?>" style="width:100%">
                        </div>
                    <?php endif;
                }
                ?>
            </div>

            <div class="slideshow">
                <?php 
                for ($i = 1; $i <= 5; $i++) {
                    // Use ACF's get_field() function to get the image URL directly
                    // Ensure your ACF field is set to return 'Image URL' in the field settings
                    $slide_image_url = get_field('after_' . $i);

                    // Check if the field actually has an image URL
                    if (!empty($slide_image_url)): ?>
                        <div class="slide2">
                            <img src="<?php echo esc_url($slide_image_url); ?>" style="width:100%">
                        </div>
                    <?php endif;
                }
                ?>
            </div>
        </div>
        <div class="testimonials">
            <h3>My bushes are so trim and clean, I love it. Great work from Indy!</h3>
        </div>
    </div>
    
</div>