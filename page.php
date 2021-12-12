<?php get_header(); ?> 
  <div class="l-contents">
    <article class="l-contents__left">
      <div class="l-contents__left__page__top">
        <div class="l-contents__left__page__top__img"></div>
        <div class="l-contents__left__page__top__word">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
      <?php if(have_posts()): //もし投稿データがあったら
      while(have_posts()): //以下を繰り返してくださいね
      the_post(); ?> 
      <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>> 
            <?php the_content(); ?>
        </div>
    <?php endwhile; //繰り返しここまでです。まだデータがあるならwhileに戻ってね
    else: //投稿がなければ、
    ?>
    <p>表示する記事がありません</p>
    <?php endif; ?>
</div>
  </article>
  <?php get_sidebar(); ?> 
</div>
<<?php get_footer(); ?>

</body>  
  

