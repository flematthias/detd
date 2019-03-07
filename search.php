<?php get_header(); ?>


<ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list container mb-5">
   <?php
   if ( have_posts() ) : while ( have_posts() ) : the_post();
   get_template_part('loops/loop');
   endwhile; else:
   endif;?>
</ul>
<div class="navigation mb-5"><?php bongo_wp_pagination(); ?></div>
<?php get_footer(); ?>