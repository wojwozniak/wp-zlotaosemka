<?php
	get_header();
?>
<div id="bg"></div>
<h1 id="title">Związek Drużyn "Złota Ósemka"</h1>
<div id="root">
	<div class="sidebar">
		<article class="sidebar-element">
			<h2>KALENDARZ</h2>
		</article>
		<article class="sidebar-element">
			
		</article>
	</div>
	<article class="wrapper">
		<h2>AKTUALNOŚCI</h2>
		<div class="post-wrapper">
			<?php
				if( have_posts() ){
					while( have_posts() ) {
						the_post();
						get_template_part('template-parts/content', 'archive');
					}
				}
			?>
			<?php the_posts_pagination(); ?>
		</div>
	</article>
</div>


<?php
	get_footer();
?>