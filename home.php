<?php get_header(); ?>
<?php
  $args = array(
		'numberposts' => 4,
);

global $post;

$custom_posts = get_posts($args);?>

<ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list">

<?php
foreach($custom_posts as $post) :setup_postdata($post);
				get_template_part('loops/loop');

			endforeach;
		?>
</ul>
<?php get_footer(); ?>