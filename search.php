<?php get_header(); ?>

    <?php openGridContainer(); ?>
    <?php openContent(); ?>
    
        <h1>Blog</h1>
            
        <?php

        if (have_posts()) : ?>

        <h2>Search results for: <?php the_search_query(); ?></h2>

        <?php
        
        while (have_posts()) : the_post();
        
        get_template_part('content');

        endwhile;
    
        else :
            echo '<p>No content found.</p>';
    
        endif;

        ?>

    <?php closeContent(); ?>
    <?php closeGridContainer(); ?>

<?php get_footer(); ?>