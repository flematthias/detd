<?php get_header(); ?>

<h2 class="page-title container mb-4" ><?php single_cat_title() ?></h2>

<ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list container mb-5">
   <?php
   if ( have_posts() ) : while ( have_posts() ) : the_post();
   get_template_part('loops/loop');
   endwhile; else:
   endif;?>
</ul>

<?php get_footer(); ?>