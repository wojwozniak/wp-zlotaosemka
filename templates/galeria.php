<?php
    /* Template name: Galeria */
	get_header();
?>

<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('large',['class' => 'site-bg', 'title' => 'Tło']); ?>")></img>
			
																															   
<?php
    $post_id = get_the_ID();
    $custom_title = get_post_meta($post_id, 'custom_title', true);
    $custom_subtitle = get_post_meta($post_id, 'custom_subtitle', true);

    // Determine the class for #site-root
    $site_root_class = !empty($custom_title) ? 'smaller-root' : '';
?>

<div id="site-root" class="<?php echo esc_attr($site_root_class); ?>">
    <?php
        if (!empty($custom_title)) {
            echo '<div id="cus-theme-title-wrapper">';
                echo '<h1 class="cus-theme-title">' . esc_html($custom_title) . '</h1>';
                if (!empty($custom_subtitle)) {
                    echo '<h2 class="cus-theme-subtitle">' . esc_html($custom_subtitle) . '</h2>';
                }
            echo '</div>';
        } else {
            echo '<div id="title">';
                echo '<h1 class="title-part">' . wp_title('', false) . '</h1>';
            echo '</div>';
        }
    ?>
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