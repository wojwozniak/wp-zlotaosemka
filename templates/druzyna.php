<?php
	/* Template Name: Drużyna/Gromada/Jednostka */
	get_header();
?>
<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('thumbnail',['class' => 'site-bg', 'title' => 'Tło']); ?>
<h1 id="site-title"><?php wp_title('') ?></h1>
<div id="site-root">
	<article class="site">
		<div id="buttons">
            <button id="biwak" class="sitebtn currentbtn">Biwak</button>
			<button id="opis" class="sitebtn">O Drużynie</button>
			<button id="kadra" class="sitebtn">Kadra</button>
            <button id="historia" class="sitebtn">Historia drużyny</button>
			<button id="dokumenty" class="sitebtn">Dokumenty i umundurowanie</button>
			
		</div>
		<div id="descs">
            <div id="d-biwak" class="desc displaydesc">
				<p>Informacje o biwaku</p>
			</div>
			<div id="d-opis" class="desc">
				<p>Drużyna prężnie działa od 2016 roku, zbiórki odbywają się co tydzień o 21:30.</p>
			</div>
			<div id="d-kadra" class="desc">
				 <!-- # Start of single person -->
				 <div class="c-person">
                    <div class="c-person-pic">
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/aaa.jpg">
                    </div>
                    <div class="c-person-data">
                        <p>pwd. Dominik "Bela" Belicki</p>
                        <p>Zespół ds. Programu</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p>dominik.belicki@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
                <!-- # Start of single person -->
                <div class="c-person">
                    <div class="c-person-pic">
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/aaa.jpg">
                    </div>
                    <div class="c-person-data">
                        <p>pwd. Maciej Grądal</p>
                        <p>Zespół ds. Finansów</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p>maciej.gradal@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
                 <!-- # Start of single person -->
                 <div class="c-person">
                    <div class="c-person-pic">
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/aaa.jpg">
                    </div>
                    <div class="c-person-data">
                        <p>pwd. Karolina Koza</p>
                        <pZespół ds. Promocji</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p>karolina.koza@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
			</div>
			<div id="d-dokumenty" class="desc">
				Dokumenty i umundurowanie
			</div>
			<div id="d-historia" class="desc">
				Tutaj historia drużyny
			</div>
		</div>
	</article>
	<article id="articles" class="site">
		<h2>Aktualności</h2>
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



<?php get_footer(); ?>
