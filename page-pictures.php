<?php get_header(); ?>

    <?php openGridContainer(); ?>
    <?php openContent(); ?>

        <h1><?php the_title(); ?></h1>
            
        <?php

        if (have_posts()) :
        while (have_posts()) : the_post(); ?>

        <article>
            <p>I will add custom code here for pictures later!</p><!-- delete later -->
            <?php the_content(); ?>            
        </article>

        <?php endwhile;
    
        else :
            echo '<p>No content found.</p>';
    
        endif;

        ?>
            
    <?php closeContent(); ?>
    <?php closeGridContainer(); ?>

<?php get_footer(); ?>