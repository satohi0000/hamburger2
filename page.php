<?php get_header(); ?> 
  <div class="p-article">
    <article class="p-article__left">
      <div class="p-article__left__page__top">
        <div class="p-article__left__page__top__img"></div>
        <div class="p-article__left__page__top__word">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
      <?php if(have_posts()): 
      while(have_posts()):
      the_post(); ?>
      <div id="post-<?php the_ID(); ?>">
       <?php post_class(); ?>>
       <?php the_content(); ?>
      </div>
      <?php endwhile;else: ?>
        <p>表示する記事がありません</p>
      <?php endif; ?> 
    </article>
  </div>
  <?php get_sidebar(); ?> 
  <?php get_footer(); ?>
</body>  
  

