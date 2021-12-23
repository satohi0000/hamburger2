<?php get_header(); ?>    
<div class="p-article">
  <article class="p-article__left">
    <div class="p-article__left__single__top">
      <div class="p-article__left__single__top__img"></div>
      <div class="p-article__left__single__top__word">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>> 
     <?php the_content(); ?>
    </div>
    <?php endwhile;
    else: 
    ?>
    <p>表示する記事がありません</p> 
      <?php endif; ?> 
  </div>
  </article>
</div>
<aside class="l-contents__right">
    <div class="l-sidebar">
        <span class="l-sidebar__batsu">
        </span>
        <a href="#">Menu</a>
        <?php
            if ( is_active_sidebar( 'menu_widget' ) ) :
                dynamic_sidebar( 'menu_widget' );
            else:
        ?>
        <div class="widget">
            <h2>No Widget</h2>
            <p>ウィジットは設定されていません。</p>
        </div>
        <?php endif; ?>
    </div>
</aside>


 <?php get_footer(); ?>
</body>
