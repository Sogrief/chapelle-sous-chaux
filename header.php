<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">

    <?php 
        if(has_custom_logo())
        {?>
            <a href="<?php echo home_url( '/' ); ?>"><!--home_url fait un retour à l'accueil au clic-->
                <img class="custom-logo" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); $image_url = $image[0]; echo $image_url; ?>" alt="logo">
            </a>  
        <?php }
        
            wp_nav_menu( 
                array( 
                    'theme_location' => 'main',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'site__header__menu', // ma classe personnalisée  
                    ) 
            ); 
        ?>
        
    </header>
    
    <?php wp_body_open(); ?>