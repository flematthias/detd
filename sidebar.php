 <?php if ( is_active_sidebar( 'aside-widget-area' ) ) : ?>
     <div id="aside-widget-area" class="nwa-aside-widget widget-area" role="complementary">
         <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
             <div id="searchbar">
                 <input type="text" value="" name="s" class="search-term" />
                 <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
             </div>
         </form>
            <?php dynamic_sidebar( 'aside-widget-area' ); ?>
        </div>
    <?php endif; ?>