<div class="splash-container">
    <div class="cta">
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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="slideshow">
                <?php 
                for ($i = 1; $i <= 5; $i++) { // Adjust the loop limit based on how many images you expect
                    $slide_image_id = get_post_meta(get_the_ID(), 'before_' . $i, true); // This gets the image ID
                    if (!empty($slide_image_id)) {
                        $slide_image_url = wp_get_attachment_url($slide_image_id); // Convert ID to URL
                        if (!empty($slide_image_url)): ?>
                            <div class="slide">
                                <img src="<?php echo esc_url($slide_image_url); ?>" style="width:100%">
                            </div>
                        <?php endif;
                    }
                }
                ?>
            </div>
        <?php endwhile; endif; ?>
            <div class="slideshow">
                
            </div>
        </div>
        <div class="testimonials">
            <h3>My bushes are so trim and clean, I love it. Great work from Indy!</h3>
        </div>
    </div>
    
</div>