<?php get_header(); ?>
<?php the_post(); ?>

<section class="single_article">
    <article id="<?php the_ID(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div>
            <header>
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_the_date(); ?><br>
                    <?php the_category(','); ?>
                </p>
            </header>
            <p><?php the_content(); ?></p>
            <p>Publié par: <?php the_author(); ?></p>
        </div>
    </article>
    <hr>
    <?php comments_template(); ?>
</section>

<?php previous_post_link(); ?>
<?php next_post_link(); ?>
<?php get_footer(); ?>