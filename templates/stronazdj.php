<?php
    /* Template name: Strona ze zdjęciem */
	get_header();
?>

<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('thumbnail',['class' => 'site-bg', 'title' => 'Tło']); ?>")></img>
<div id="title"><h1 class="title-part"><?php wp_title('') ?></h1></div>
<div id="site-root">
	<article class="article">
		<div id="page-wrapper">
			<?php echo the_content(); ?>
		</div>
	</article>
</div>


<?php
	get_footer();
?>