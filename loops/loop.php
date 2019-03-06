  <ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list">
  <li class="mdc-image-list__item">
    <img class="mdc-image-list__image" src="<?php echo get_the_post_thumbnail_url();?>">
    <div class="mdc-image-list__supporting">
      <span class="mdc-image-list__label"><?php the_title(); ?></span>
      <span class="mdc-image-list__label"><?php the_time('j F Y, '); ?></span>
      <span class="mdc-image-list__label"><?php the_category(', '); ?></span>
    </div>
  </li>

</ul>