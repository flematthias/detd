<?php get_header(); ?>
    <div class="sidebar_page_content">
        <ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list container mb-5">
           <?php
           if ( have_posts() ) : while ( have_posts() ) : the_post();
           get_template_part('loops/loop');
           endwhile; else:?>
            <h2 class="page-title">Aucun article ne correspond à votre recherche.</h2>
          <?php endif;?>
        </ul>

        <?php get_template_part('sidebar'); ?>
    </div>
<div class="navigation mb-5"><?php bongo_wp_pagination(); ?></div>
<?php get_footer(); ?>