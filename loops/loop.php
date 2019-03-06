<article id="<?php echo $numbernext ?>" class="post style<?php $type++; echo $numberstyle= floor($type/2);
    if ($type %7==0) { $type = 1;}; 
    ?> 

    <?php if ($numbernext %2 == 0) { echo 'invert alt';} ?>">
    <div class="image">
      <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" data-position="75% center" />
    </div>
    <div class="content">
      <div class="inner">
        <header>
          <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
          <p class="info"><?php the_time('j F Y, '); ?><?php the_author_posts_link(); ?></a> Catégorie :
            <?php the_category(', '); ?></p>
        </header>
        <p><?php the_excerpt(); ?></p>
        <ul class="actions">
          <li><a href="<?php the_permalink(); ?>" class="button alt">Lire</a></li>
        </ul>
      </div>
      <div class="postnav">
        <a href="#<?php if ($numbernext>1) { echo --$numberprev;} ?>" class="<?php if ($numbernext>1) {echo 'scrolly prev';} else echo 'prev disabled'?>"><span class="icon fa-chevron-up"></span></a>
        <a href="#<?php echo ++$numbernext; ?>" class="<?php $count_posts = wp_count_posts();if ($numbernext != $count_posts->publish+1) { echo 'scrolly next';}else echo 'next disabled' ?>"><span class="icon fa-chevron-down"></span></a>
      </div>
    </div>
    
  </article>
  <ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list">
  <li class="mdc-image-list__item">
    <img class="mdc-image-list__image" src="<?php echo get_the_post_thumbnail_url();?>">
    <div class="mdc-image-list__supporting">
      <span class="mdc-image-list__label"><?php the_time('j F Y, '); ?></span>
    </div>
  </li>
  ...
</ul>