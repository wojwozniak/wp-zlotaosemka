<div id="single-post-wrapper">
    <?php the_post_thumbnail('thumbnail',['class' => 'thumbnail', 'title' => 'Feature image']); ?>
    <?php

$the_cat = get_the_category();

$category_name = $the_cat[0]->cat_name;

$category_link = get_category_link( $the_cat[0]->cat_ID );

?>

 

<a href=”<?php echo $category_link ?>”

title=”<?php echo $category_name ?>”  >

<?php echo $category_name ?>

</a>
    <div class="meta">
        <h2><?php the_title() ?></h2>
        <span class="date"><?php the_date(); ?></span>
    </div>
    <?php the_content(); ?>
</div>