<article class="article-loop">

    <?php
        $tID = get_post_thumbnail_id(get_the_ID());
    ?>

    <div>
        <a href="<?php echo get_the_permalink(); ?>" class="image" style="background-image:url(<?php echo wp_get_attachment_image_url($tID, 'max', ''); ?>)"></a>
        <span><?php echo get_the_date(); ?></span>
        <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php echo _stringLimit(get_the_excerpt(), 20); ?></p>
    </div>
    <a href="<?php echo get_the_permalink(); ?>" class="readmore">Read more</a>

</article>