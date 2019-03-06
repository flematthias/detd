  <li class="mdc-image-list__item classhome mx-3 mb-5 ">
   
        <img class="mdc-image-list__image" src="<?php echo get_the_post_thumbnail_url();?>">
        <div class="mdc-image-list__supporting ">
          <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <span class=""><?php the_time('j F Y, '); ?></span>
          <span class=""><?php the_category(', '); ?></span>
        </div>
 
  </li>