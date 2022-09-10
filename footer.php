        <footer id="foot" class="footer">
                <hr class="hr">
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
                <div id="footer-end">
                <p class="footer-end-text copyright">Copyright © 2013-2022 Złota Ósemka</p>
                <p class="footer-end-text">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                <p class="footer-end-text"><a href="https://zhp.pl/" class="footer-end-text footer-end-link" target="_blank">Związek Harcerstwa Polskiego</a></p>
                <p class="footer-end-text">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                <p class="footer-end-text"><a href="https://dabrowagornicza.zhp.pl/" class="footer-end-text footer-end-link" target="_blank">ZHP Hufiec Dąbrowa Górnicza</a></p>
                <p class="footer-end-text">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                <p class="footer-end-text"><a href="https://github.com/wojwozniak/" class="footer-end-text footer-end-link" target="_blank">Autor</a></p>
                </div>
        </footer>

        <?php wp_footer(); ?>
</body>