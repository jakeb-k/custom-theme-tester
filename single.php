<?php get_header(); ?>
<?php
// Get the header part of the WordPress theme
get_header(); ?>

<div id="container">
    <div id="articleContainer">
        <!-- Back Button -->
        <div class="slideBtn">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('testimonials'))); ?>"> 
                <button class="tBtn" style="--color:#006400;">BACK</button>
            </a>
        </div>
        <!-- Article Box -->
        <div class="aBox">
            <div class="aInfo">
                <h1><?php the_field('title'); ?></h1>
                <h4><?php echo get_the_date('l jS \of F'); ?></h4>
                <h6><i>'<?php the_field('review'); ?>'</i></h6>
                <p><?php the_field('description'); ?></p>
            </div>
            <!-- Article Image -->
            <div class="aImg">
                <div class="w3-content w3-display-container">
                <?php
                    // Get the images from the ACF fields
                    $before_image = get_field('before'); // 'before' is the field name for the 'Before' image
                    $after_image = get_field('after'); // 'after' is the field name for the 'After' image

                    // Check if the images exist and display them
                    if ($before_image):
                        echo '<img class="mySlides1 w3-animate-opacity" src="' . esc_url($before_image['url']) . '" alt="' . esc_attr($before_image['alt']) . '" />';
                    endif;

                    if ($after_image):
                        echo '<img class="mySlides1 w3-animate-opacity" src="' . esc_url($after_image['url']) . '" alt="' . esc_attr($after_image['alt']) . '" />';
                    endif;
                ?>
                <button class="w3-button w3-display-left" style="background:#ccff00;" onclick="plusDivs1(-1)">&#10094;</button>
                <button class="w3-button w3-display-right" style="background:#ccff00;" onclick="plusDivs1(1)">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var slideIndex1 = 1;
    showDivs1(slideIndex1);

    function plusDivs1(n) {
      showDivs1(slideIndex1 += n);
    }

    function showDivs1(n) {
      var i;
      var x = document.getElementsByClassName("mySlides1");
      if (n > x.length) {slideIndex1 = 1}
      if (n < 1) {slideIndex1 = x.length};
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      x[slideIndex1-1].style.display = "block";
    }
</script>

<?php
// Get the footer part of the WordPress theme
get_footer();
?>
<?php get_footer(); ?>
