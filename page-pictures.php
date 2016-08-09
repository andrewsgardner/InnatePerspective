<?php get_header(); ?>

    <?php echo $htmlLayout['open-grid-container'].$htmlLayout['open-content']; ?>
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
            
    <?php echo $htmlLayout['close-content'].$htmlLayout['close-grid-container']; ?>

<?php get_footer(); ?>