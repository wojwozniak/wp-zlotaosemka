<?php
	get_header();
?>

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

<?php
	get_footer();
?>