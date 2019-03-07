<?php
/* 
* Template Name: contact
*/

 get_header(); ?>

    <h1>CONTACT</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis adipisci magnam sunt natus amet sapiente. Necessitatibus, rerum molestias sequi quaerat aliquid repellendus at! Tempora molestiae, consectetur placeat nostrum voluptatum qui?</p>


<div class="container">

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else:
endif;?>
</div>


<?php get_footer(); ?>

