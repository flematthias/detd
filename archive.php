<?php get_header(); ?>
<section id="archive_page">

        <h2 class="page-title container mb-4" ><?php single_cat_title() ?></h2>
    <div class="archive_page_content">
        <ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list container mb-5">
           <?php
           if ( have_posts() ) : while ( have_posts() ) : the_post();
           get_template_part('loops/loop');
           endwhile; else:
           endif;?>
        </ul>
        <?php get_template_part('sidebar'); ?>
    </div>


</section>
<?php get_footer(); ?>