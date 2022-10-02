<?php
	get_header();
?>
<div id="bg"></div>
<h1 id="title">Związek Drużyn "Złota Ósemka"</h1>
<div id="root">
	<aside class="sidebar">
		<article class="sidebar-element">
			<h2>KALENDARZ</h2>
		</article>
		<article class="sidebar-element logos">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/i1.jpg' ); ?>" alt="" class="sidebar-logo">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/i2.png' ); ?>" alt="" class="sidebar-logo">
		<img id="logo-hufiec" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/i3.jpg' ); ?>" alt="" class="sidebar-logo">
		</article>
	</aside>
	<article class="wrapper">
		<h2>AKTUALNOŚCI</h2>
		<div class="post-wrapper">
		<?php                
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => basename(get_page_link()),
                            'posts_per_page' => 10,
                        );
                        $arr_posts = new WP_Query( $args );
                        if ( $arr_posts->have_posts() ) :
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                                get_template_part('template-parts/content', 'archive');
                            endwhile;
                        endif;
                    ?>
			<?php the_posts_pagination(); ?>
		</div>
	</article>
</div>


<?php
	get_footer();
?>