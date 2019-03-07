<?php
/* 
* Template Name: contact
*/




get_header(); ?>
<?php the_post(); ?>

<section class="single_article">
    <article class="pt-3">
        <h2 class="contact"><?php the_title(); ?></h2>
    <?php
    the_content();

    ?>
    </article>
</section>
<?php get_footer(); ?>
