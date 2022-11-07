<?php get_header(); ?>

<div class="top_page">
	<div class="container">
	<h1><?php echo get_the_archive_title(); ?></h1>
	</div>
</div>


<div class="container py-10 lg:py-20">

<?php
	$i = 0;
	if(have_posts()) :
		echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">';
		while (have_posts()) : the_post();

			get_template_part( 'partials/loop', get_post_type() );
?>

<?php endwhile; echo '</div>'; echo _pagination('page-pagination', $query); else : ?>

<?php endif; ?>
</div>


<?php get_footer(); ?>
