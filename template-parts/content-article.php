<div id="single-post-wrapper">
    <div id="post-top">
        <div class="meta">
            <h2><?php the_title() ?></h2>
            <span class="date"><?php the_date(); ?></span>
        </div>
        <?php the_post_thumbnail('thumbnail',['class' => 'post-thumbnail', 'title' => 'Feature image']); ?>
    </div>
    
    <?php the_content(); ?>
</div>