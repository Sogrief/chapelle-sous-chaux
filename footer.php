<footer class="piedDePage">
    
    <?php wp_nav_menu( array( 'theme_location' => 'footer',                    
        'container' => 'ul', 
        'menu_class' => 'site__footer__menu',    ) ); 
    ?>

    <div class="piedDePage__copyright"><?php the_field( '_copyright','infos' ); ?><div>
    
</footer>

    <?php wp_footer(); ?>
</body>
</html>