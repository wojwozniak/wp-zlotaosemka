<?php
    /* Template name: Galeria */
	get_header();
?>

<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('thumbnail',['class' => 'site-bg', 'title' => 'Tło']); ?>")></img>
<h1 id="title"><?php wp_title('') ?></h1>
<div id="site-root">
	<div class="single-wrapper">
		<article class="article">
			<div id="page-wrapper">
				<div id="galbuttons">
					<button id="2022" class="galbtn btnstyle currentbtn">2022</button>
					<div class="vl"></div>
					<button id="2021" class="galbtn btnstyle">2021</button>
					<div class="vl"></div>
					<button id="2020" class="galbtn btnstyle">2020</button>
					<div class="vl"></div>
					<button id="2019" class="galbtn btnstyle">2019</button>
					<div class="vl"></div>
					<button id="2018" class="galbtn btnstyle">2018</button>
				</div> <!-- End of buttons div -->
				<div class="gallery-container">
					<div id="g-2022" class="k-past-container gal displaygal">
						<div class="k-past">
							<a href="https://photos.google.com/share/AF1QipO7fBDHcBFhvcyS32_x4sfRGvF8l_ioQXUKX6pztW-c6ZvJ4NmXYL32GAth61Jf4g?key=bWNuSUJxRHctWGNMMmRFSEJITFVqOU5nbmVteFVR" target="_blank">
								<p>Harcerska Akcja Letnia</p>
								<img class="k-past-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="">
							</a>
						</div> <!-- End of single gal -->
					</div> <!-- End of year container -->
					<div id="g-2021" class="k-past-container gal">
						<div class="k-past">
							<a href="https://photos.google.com/share/AF1QipO7fBDHcBFhvcyS32_x4sfRGvF8l_ioQXUKX6pztW-c6ZvJ4NmXYL32GAth61Jf4g?key=bWNuSUJxRHctWGNMMmRFSEJITFVqOU5nbmVteFVR" target="_blank">
								<p>Test 2</p>
								<img class="k-past-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="">
							</a>
						</div> <!-- End of single gal -->
					</div> <!-- End of year container -->
				</div>
			</div>
		</article>
	</div>
</div>


<?php
	get_footer();
?>