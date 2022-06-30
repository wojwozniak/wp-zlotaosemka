<article class="post-preview">
    <div class="post-elements">
        <?php the_post_thumbnail('thumbnail',['class' => 'thumbnail', 'title' => 'Feature image']); ?>
        <div class="media-body">
            <h3 class="h3 preview-title"><a href=<?php the_permalink() ?>><?php the_title(); ?> </a></h3>
            <div class="meta">
                <span class="date"><?php the_time('d.m.Y'); ?>r. </span>
            </div>
            <div class="intro">    
                <?php the_excerpt(); ?>
            </div>
            <a class="more-link" href=<?php the_permalink() ?> > Czytaj więcej &rarr;</a>
        </div> <!-- media-body -->
    </div> <!-- post-elements -->
</article>