<?php
	get_header();
?>
<div id="bg"></div>
<div id="title">
	<h1 class="title-part">Związek Drużyn</h1>
	<h1 class="title-part">"Złota Ósemka"</h1>
</div>

<div id="root">
	<aside class="sidebar">
		<article class="sidebar-element">
			<h2>KALENDARZ</h2>
			<?php echo do_shortcode('[my_calendar category="1" months="12" weekends="true" format="list"]'); ?>
		</article>
		 <article class="sidebar-element sidebar-socials">
			 <h2>ŚLEDŹ NASZE DZIAŁANIA</h2>
			 <a href="https://www.youtube.com/c/ZlotaOsemka" target="_blank" class="s-link"><i class="fa-brands fa-youtube"></i><p>&nbsp;Kanał YouTube Związku Drużyn</p></a>
			 <a href="https://www.facebook.com/zlotaosemka" target="_blank" class="s-link fb-link"><i class="fa-brands fa-facebook-f dont-show"></i>&nbsp;<p class="fb-link-text"></p></a>
         </article>
		<article class="sidebar-element logos">
			<a href="https://zhp.pl/" target="_blank" style="width: 250px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/i1.jpg' ); ?>" alt="" class="sidebar-logo"></a>
			<a href="https://slaska.zhp.pl/" target="_blank" style="width: 250px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/i2.png' ); ?>" alt="" class="sidebar-logo"></a>
			<a href="https://dabrowagornicza.zhp.pl/" target="_blank" style="width: 250px; display:flex;"><img id="logo-hufiec" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/i3.jpg' ); ?>" alt="" class="sidebar-logo"></a>
		</article>
	</aside>
	<article class="wrapper">
		<h2>AKTUALNOŚCI</h2>
		<div class="post-wrapper">
			<?php                
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'main',
                            'posts_per_page' => 6,
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
			<?php the_posts_pagination(array(
				'mid_size'           => 1,
				'prev_text'          => _x( 'Poprzednia strona', 'previous set of posts' ),
				'next_text'          => _x( 'Następna strona', 'next set of posts' ),
				'screen_reader_text' => __( 'Wybór strony' ),
				'aria_label'         => __( 'Posts' ),
				'class'              => 'pagination',
			)); ?>
		</div>
	</article>
</div>


<?php
	get_footer();
?>