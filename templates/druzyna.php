<?php
	/* Template Name: Drużyna/Gromada/Jednostka */
	get_header();
?>
<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('large',['class' => 'site-bg', 'title' => 'Tło']); ?>"></img>
																															   
																															   
<?php
    $post_id = get_the_ID();
    $custom_title = get_post_meta($post_id, 'custom_title', true);
    $custom_subtitle = get_post_meta($post_id, 'custom_subtitle', true);

    // Determine the class for #site-root
    $site_root_class = !empty($custom_title) ? 'smaller-root' : '';
?>

<div id="site-root" class="<?php echo esc_attr($site_root_class); ?>">
    <?php
        if (!empty($custom_title)) {
            echo '<div id="cus-theme-title-wrapper">';
                echo '<h1 class="cus-theme-title">' . esc_html($custom_title) . '</h1>';
                if (!empty($custom_subtitle)) {
                    echo '<h2 class="cus-theme-subtitle">' . esc_html($custom_subtitle) . '</h2>';
                }
            echo '</div>';
        } else {
            echo '<div id="title">';
                echo '<h1 class="title-part">' . wp_title('', false) . '</h1>';
            echo '</div>';
        }
    ?>
	<article class="site">
		<?php echo the_content(); ?>
	</article>
        <div class="lower">
            <aside class="sidebar">
                <article class="sidebar-element">
                    <h2>KALENDARZ</h2>
					<?php echo do_shortcode('[my_calendar category="1" months="12" weekends="true" format="list"]'); ?>
                </article>
                <article class="sidebar-element sidebar-socials">
                    <h2>SOCIAL MEDIA</h2>
					<a href="https://www.youtube.com/c/ZlotaOsemka" target="_blank" class="s-link"><i class="fa-brands fa-youtube"></i><p>&nbsp;Kanał YouTube Związku Drużyn</p></a>
					<a href="" target="_blank" class="s-link fb-link"><i class="fa-brands fa-facebook-f dont-show"></i>&nbsp;<p class="fb-link-text"></p></a>
					<a href="" target="_blank" class="s-link ig-link"><i class="fa-brands fa-instagram dont-show"></i>&nbsp;<p class="ig-link-text"></p></a>
                </article>
            </aside>
            <article id="articles">
                <h2>AKTUALNOŚCI</h2>
                <?php                
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => basename(get_page_link()),
                            'posts_per_page' => 50,
							'paged'          => get_query_var( 'paged' ),
                        );
                        $arr_posts = new WP_Query( $args );
                        if ( $arr_posts->have_posts() ) :
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                                get_template_part('template-parts/content', 'archive');
                            endwhile;
                        endif;
                    ?>
            </article>
			<?php the_posts_pagination(array(
				'mid_size'           => 1,
				'prev_text'          => _x( 'Poprzednia strona', 'previous set of posts' ),
				'next_text'          => _x( 'Następna strona', 'next set of posts' ),
				'screen_reader_text' => __( 'Wybór strony' ),
				'aria_label'         => __( 'Posts' ),
				'class'              => 'pagination',
			)); ?>
   </div>
</div>
<?php get_footer(); ?>
