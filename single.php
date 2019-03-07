<?php get_header(); ?>
<?php the_post(); ?>

<section class="single_article">
    <article id="<?php the_ID(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="img-comments" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/comment.png');" >
            <p class="number-comments"><?php comments_number('0', '1', '%') ?></p></div>
        <div>
            <header>
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_the_date(); ?><br></p>
                <p><?php the_category(','); ?></p>

            </header>
            <p><?php the_content(); ?></p>
            <p>Publié par: <?php the_author(); ?></p>
        </div>

    <hr>
    <?php comments_template(); ?>
    </article>

    <div class="prev_next_article">
            <?php previous_post_link('%link'); ?>
            <?php next_post_link('%link'); ?>
    </div>

</section>
<?php get_footer(); ?>