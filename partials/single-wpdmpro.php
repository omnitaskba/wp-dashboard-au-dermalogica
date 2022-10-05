<?php

get_header();

?>

<div class="top_page">
    <div class="container">
    <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="container py-20">

    <?php the_content(); ?>

</div>


<?php

get_footer(); 

?>
