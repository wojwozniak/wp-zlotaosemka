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
			 <div class="sidebar-socials-links">
				 <a href="https://www.youtube.com/c/ZlotaOsemka" target="_blank" class="s-link">
					 <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
    					<path d="M9.0175 0C4.03267 0 0 4.02797 0 9.00699V38.993C0 43.972 4.03267 48 9.0175 48H38.9825C43.9673 48 48 43.972 48 38.993V9.00699C48 4.02797 43.9673 0 38.9825 0H9.0175ZM24.028 14.2657C29.909 14.2657 33.8296 14.5455 33.8296 14.5455C34.3337 14.6014 35.5659 14.6014 36.6301 15.7203C36.6301 15.7203 37.4702 16.5594 37.7503 18.5175C38.0303 20.8112 38.0303 23.049 38.0303 23.049V25.1748C38.0303 25.1748 38.0303 27.4126 37.7503 29.7063C37.4702 31.6084 36.6301 32.4476 36.6301 32.4476C35.5659 33.5664 34.3337 33.5664 33.8296 33.6224C33.8296 33.6224 29.909 33.958 24.028 33.958C16.7468 33.9021 14.5064 33.6783 14.5064 33.6783C13.8903 33.5664 12.4341 33.5664 11.3699 32.4476C11.3699 32.4476 10.5298 31.6084 10.3057 29.7063C9.96966 27.4126 10.0257 25.1748 10.0257 25.1748V23.049C10.0257 23.049 9.96966 20.8112 10.3057 18.5175C10.5298 16.5594 11.3699 15.7203 11.3699 15.7203C12.4341 14.6014 13.6663 14.6014 14.2264 14.5455C14.2264 14.5455 18.091 14.2657 24.028 14.2657ZM21.1155 19.8601V27.7482L28.6768 23.8322L21.1155 19.8601Z" fill="black"/>
					 </svg>
					 <p class="sb-icon">Kanał YouTube Związku Drużyn</p></a>
			 	<a href="https://www.facebook.com/zlotaosemka" target="_blank" class="s-link">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M39 0H9C4.02947 0 0 4.02947 0 9V39C0 43.9705 4.02947 48 9 48H39C43.9705 48 48 43.9705 48 39V9C48 4.02947 43.9705 0 39 0ZM37.7811 25.8505H33.2905V42.4737H25.7874V25.8505H22.8758V20.2484H25.7874V16.68C25.7874 12.0063 27.7326 9.22737 33.24 9.22737H38.8232V14.8042H35.5768C33.4295 14.8042 33.2905 15.6063 33.2905 17.0968L33.2842 20.2421H38.3874L37.7747 25.8442L37.7811 25.8505Z" fill="black"/>
					</svg>
					<p class="sb-icon">Facebook Związku Drużyn</p></a>
			 </div>
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