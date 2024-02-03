<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header() ?> 
<div id="dashboard"> 
<h1>Posts</h1>
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="postBox">
        <?php
        $after = get_field('after');
        if ($after) :
            echo '<img src="' . esc_url($after['url']) . '" alt="' . esc_attr($after['alt']) . '" />';
        endif;
        ?>

            <div class="pInfo">
                <h3> <?php the_title(); ?> </h3>
                <h6> <i> <?php the_time('jS \of F'); ?> </i></h6>
                <p><?php the_excerpt(); ?></p>
                <?php if ( get_post_meta(get_the_ID(), 'review', true) ) : ?>
                    <p><i><?php echo get_post_meta(get_the_ID(), 'review', true); ?></i></p>
                <?php endif; ?>

                <div class="postOps">
                    <div class="slideBtn">
                        <a href='<?php the_permalink(); ?>'>
                            <button style="--color:#006400;">
                                VIEW
                            </button>
                        </a>
                    </div>
                    
                    <?php if ( is_user_logged_in() ): ?>
                        <div class="authOps">
                            <a href='<?php echo get_edit_post_link(); ?>'>
                                <button class="postBtn">EDIT</button>
                            </a>
                            <form class="opForm" method="POST" action='<?php echo get_delete_post_link(get_the_ID()); ?>' enctype="multipart/form-data">
                                <?php wp_nonce_field('delete-post_' . get_the_ID()); ?>
                                <input name="_method" type="hidden" value="DELETE" />
                                <button type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile;
endif;
wp_reset_postdata();
?>
</div>
    <footer>
        <?php get_footer() ?>
    </footer>
    </body>
</html>