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
                <?php
                // Query arguments for fetching posts that have 'post details'
                $args = array(
                    'post_type' => 'post', // Change to your custom post type if necessary
                    'posts_per_page' => -1, // Get all posts
                    'post_status' => 'publish' // Only get published posts
                );

                // Custom query for posts
                $testimonial_query = new WP_Query($args);
                $first = true; // Flag to mark the first item as active

                // Check if the query has posts
                if ($testimonial_query->have_posts()) : 
                    // Loop through the posts
                    while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                        // Get the 'review' custom field
                        $review = get_field('review');
                        // If there is a review, display it
                        if ($review) :
                            ?>
                            <div class="review <?php echo $first ? 'active' : ''; ?>">
                                <h3>"<?php echo esc_html($review); ?>"</h3>
                            </div>
                            <?php
                            $first = false; // Only the first item should be marked as active
                        endif;
                    endwhile;
                else :
                    // No posts found message
                    echo '<div class="review"><h3 style="text-align:center; color:#006400">No testimonials found.</h3></div>';
                endif;
                
                // Restore original Post Data
                wp_reset_postdata();
                ?>
        </div>
    </div>
</div>