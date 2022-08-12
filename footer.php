
<footer class="footer">
        <?php wp_nav_menu(
                array(
                        'menu' => 'footer',
                        'container' => '',
                        'theme_location' => 'footer',
                        'items_wrap' => '<div id="footer-menu" class="footer-menu">%3$s</div>',
                        'container_aria_label' => 'footer-menu'
                )
        )?>
</footer>

 <?php wp_footer(); ?>
</body>