
<footer class="footer">
        <div id="footer-menu">
                <?php wp_nav_menu(
                        array(
                                'menu' => 'footer',
                                'container' => '',
                                'theme_location' => 'footer',
                                'items_wrap' => '<ul id="footer-menu" class="footer-menu text">%3$s</ul>',
                                'container_aria_label' => 'footer-menu'
                        )
                )?>
        </div>

      
</footer>

 <?php wp_footer(); ?>
</body>