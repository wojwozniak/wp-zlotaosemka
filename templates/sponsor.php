<?php
    /* Template name: Partnerzy/Sponsorzy */
	get_header();
?>

<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('large',['class' => 'site-bg', 'title' => 'Tło']); ?>")></img>
<div id="title">
	<?php
		$post_id = get_the_ID();
		$custom_title = get_post_meta($post_id, 'custom_title', true);
		$custom_subtitle = get_post_meta($post_id, 'custom_subtitle', true);

	if (!empty($custom_title)) {
		echo '<h1 class="cus-theme-title">' . esc_html($custom_title) . '</h1>';
	} else {
		echo '<h1 class="cus-theme-title">' . wp_title('', false) . '</h1>';
	}
	if (!empty($custom_subtitle)) {
    echo '<h2 class="cus-theme-subtitle">' . esc_html($custom_subtitle) . '</h2>';
	}
	?>
</div>
<div id="site-root">
    <div class="single-wrapper">
        <article class="article">
            <div id="page-wrapper">
                 <?php echo the_content(); ?>
            </div>
        </article>
    </div>
</div>


<?php
	get_footer();
?>