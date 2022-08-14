
<footer class="footer">
        <div class="footer-content">
                <?php wp_nav_menu(
                        array(
                                'menu' => 'footer',
                                'container' => '',
                                'theme_location' => 'footer',
                                'items_wrap' => '<div id="footer-menu" class="footer-menu">%3$s</div>',
                                'container_aria_label' => 'footer-menu'
                        )
                )?>
                <div class="socials-wrapper">
                        <p id="footer-s-title">SOCIAL MEDIA</p>
                        <?php get_template_part('template-parts/socials'); ?>
                </div>
        </div>
        
        
</footer>
<?php wp_footer(); ?>
</body>