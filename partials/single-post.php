<article class="article-single container py-10 lg:py-20">

    <?php
        $tID = get_post_thumbnail_id(get_the_ID());
    ?>

    <span><?php echo get_the_date(); ?></span>
    <h1><?php the_title(); ?></h1>

    <?php 
        if(has_post_thumbnail()){ 
            echo '<div class="block py-10">'.wp_get_attachment_image($tID, 'max', '').'</div>';
        }
    ?>

    <?php the_content(); ?>


</article>