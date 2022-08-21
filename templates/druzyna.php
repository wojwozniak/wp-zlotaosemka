<?php
	/* Template Name: Drużyna/Gromada/Jednostka */
	get_header();
?>
<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('thumbnail',['class' => 'site-bg', 'title' => 'Tło']); ?>
<h1 id="site-title"><?php wp_title('') ?></h1>
<div id="site-root">
	<article class="site">
		<div id="buttons">
			<button id="opis" class="sitebtn currentbtn">O Drużynie</button>
			<button id="kadra" class="sitebtn">Kadra</button>
			<button id="dokumenty" class="sitebtn">Dokumenty</button>
			<button id="umundurowanie" class="sitebtn">Umundurowanie</button>
		</div>
		<div id="descs">
			<div id="d-opis" class="desc displaydesc">
				<p>Drużyna prężnie działa od 2016 roku, zbiórki odbywają się co tydzień o 21:30.</p>
			</div>
			<div id="d-kadra" class="desc">
				<p>
					Drużynowa Przyboczna itp
				</p>
			</div>
			<div id="d-dokumenty" class="desc">
				Dokumenty
			</div>
			<div id="d-umundurowanie" class="desc">
				Umundurowanie
			</div>
		</div>
	</article>
	<article id="articles" class="site">
		<h2>Aktualności</h2>
		
	</article>
</div>



<?php get_footer(); ?>