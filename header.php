<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

<body <?php body_class; ?>>

    <div class="page-container"><!-- BEGIN Page Container -->
        
        <header>
            
            <nav class="primary-nav">
                <div class="primary-nav-l">
                    <?php 
                    
                    wp_nav_menu( array(
                        'theme_location' => 'header_l',
                        'menu_class' => 'm-active',
                    ));
                    
                    ?>
                </div>
                <div class="primary-nav-logo">
                    <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img class="trigger-logo" src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </a>
                    
                    <?php else : ?>
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri() . '/img/logo/dist/logo.png'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="trigger-logo">
                    </a>
                        
                    <?php endif; ?>
                </div>
                <div class="inner-l"></div>
                <div class="inner-r">
                    <div class="trigger-menu" id="nav-toggle"><span></span></div>
                </div>
                <div class="primary-nav-r">
                    <?php 
                    
                    wp_nav_menu( array(
                        'theme_location' => 'header_r',
                        'menu_class' => 'm-active',
                    ));
                    
                    ?>
                </div>
            </nav>
        </header>