<?php get_header(); ?>
<div class="single-wrapper">
	<article class="article">
		<?php
			if( have_posts() ){
				while( have_posts() ) {
					the_post();
					get_template_part('template-parts/content', 'article');
				}
			}
		?>		
	</article>
</div>
<?php get_footer(); ?>