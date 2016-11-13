    </div><!-- END Page Container -->
    
    <footer>
        <div class="search">
            <?php get_search_form(); ?>
        </div>
        <div class="ftr-menu">
            <?php if (is_user_logged_in()) : ?>
                <a href="<?php echo wp_logout_url(); ?>"><button type="button">Sign Out:</button></a>
                <a class="active-user"><?php global $current_user; get_currentuserinfo(); echo $current_user->user_firstname; ?></a>
            <?php else : ?>
                <a href="<?php echo wp_login_url(); ?>"><button type="button">Sign In</button></a>
            <?php endif ;?>
            <a href="#">Theme Info</a>
        </div>
        <div class="copyright">
            <p><?php echo "&copy; " . date("Y"); ?> <a href="/"><?php echo get_the_author(); ?></a></p>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>