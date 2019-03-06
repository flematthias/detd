<?php get_header(); ?>
<?php
  $args = array(
		'numberposts' => 10,
);

global $post;

$custom_posts = get_posts($args);


foreach($custom_posts as $post) :setup_postdata($post);
				get_template_part('loops/loop');

			endforeach;
		?>

<?php get_footer(); ?>