    </div><!-- END Page Container -->
    
    <footer>
        <div class="column-wrap clearfix">
            <span class="search">
                <?php get_search_form(); ?>
            </span>
            <span class="login">
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo wp_logout_url(); ?>"><button type="button">Sign out</button></a>
                    <span class="active-user"><?php global $current_user; get_currentuserinfo(); echo "&nbsp;&nbsp;" . $current_user->user_firstname; ?></span>
                <?php else : ?>
                    <a href="<?php echo wp_login_url(); ?>"><button type="button">Sign in</button></a>
                <?php endif ;?>
            </span>
        </div>
        <span class="copyright">
            <p>
                <?php echo "&copy; " . date("Y"); ?> <a href="/"><?php echo get_the_author(); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;Theme Information
            </p>
        </span>
    </footer>

<?php wp_footer(); ?>
</body>
</html>