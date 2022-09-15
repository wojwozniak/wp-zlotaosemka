<?php
    /* Template name: Partnerzy/Sponsorzy */
	get_header();
?>

<img id="site-bg" style="background-image: url("<?php the_post_thumbnail('thumbnail',['class' => 'site-bg', 'title' => 'Tło']); ?>")></img>
<h1 id="title"><?php wp_title('') ?></h1>
<div id="site-root">
    <div class="single-wrapper">
        <article class="article">
            <div id="page-wrapper">
                <div class="sponsor-container">
                    <div class="sponsor">
                        <a href="https://photos.google.com/share/AF1QipO7fBDHcBFhvcyS32_x4sfRGvF8l_ioQXUKX6pztW-c6ZvJ4NmXYL32GAth61Jf4g?key=bWNuSUJxRHctWGNMMmRFSEJITFVqOU5nbmVteFVR" target="_blank">
                            <img class="sponsor-logo" src="https://www.facebook.com/images/fb_icon_325x325.png" alt="">
                        </a>
                    </div>
                    <div class="sponsor">
                        <a href="https://photos.google.com/share/AF1QipO7fBDHcBFhvcyS32_x4sfRGvF8l_ioQXUKX6pztW-c6ZvJ4NmXYL32GAth61Jf4g?key=bWNuSUJxRHctWGNMMmRFSEJITFVqOU5nbmVteFVR" target="_blank">
                            <img class="sponsor-logo" src="https://www.slawkow.pl/uploads/important_files/obrazekog.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>


<?php
	get_footer();
?>