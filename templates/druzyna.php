<?php
	/* Template Name: Drużyna/Gromada/Jednostka */
	get_header();
?>
<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('thumbnail',['class' => 'site-bg', 'title' => 'Tło']); ?>"></img>
<h1 id="title"><?php wp_title('') ?></h1>
<div id="site-root">
	<article class="site">
		<?php echo the_content(); ?>
	</article>
        <div class="lower">
            <aside class="sidebar">
                <article class="sidebar-element">
                    <h2>KALENDARZ</h2>
                </article>
                <article class="sidebar-element logos">
                    <h2>SOCIAL MEDIA</h2>
                </article>
            </aside>
            <article id="articles">
                <h2>AKTUALNOŚCI</h2>
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
            </article>
        </div>
    </div>
<?php get_footer(); ?>
