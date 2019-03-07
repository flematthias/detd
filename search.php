<?php get_header(); ?>


<ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list container mb-5">
   <?php
   if ( have_posts() ) : while ( have_posts() ) : the_post();
   get_template_part('loops/loop');
   endwhile; else:?>
    <h2 class="page-title">Aucun article ne correspond à votre recherche.</h2>
<div class="align-center">
    <img src="<?php echo get_template_directory_uri();?>/images/lunettes.jpg" alt="">
</div>
  <?php endif;?>
</ul>
<div class="navigation mb-5"><?php bongo_wp_pagination(); ?></div>
<?php get_footer(); ?>