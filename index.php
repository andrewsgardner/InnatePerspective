<?php get_header(); ?>

    <?php openGridContainer(); ?>
    <?php openContent(); ?>
        
            <h1>Blog</h1>
            
        <?php

        if (have_posts()) :
        while (have_posts()) : the_post();
        
        get_template_part('content', get_post_format());

        endwhile;
    
        else :
            echo '<p>No content found.</p>';
    
        endif;

        ?>

    <?php closeContent(); ?>
    <?php closeGridContainer(); ?>

<?php get_footer(); ?>