<?php get_header(); ?>

    <?php echo $htmlLayout['open-grid-container'].$htmlLayout['open-content']; ?>
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

    <?php echo $htmlLayout['close-content'].$htmlLayout['close-grid-container']; ?>

<?php get_footer(); ?>