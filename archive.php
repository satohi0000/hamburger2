<?php get_header(); ?> 
<div class="l-contents">
  <article class="l-contents__left">
    <div class="l-contents__left__archive__top">
      <div class="l-contents__left__archive__top__bg"></div>
      <div class="l-contents__left__archive__top__img"></div>
      <div class="l-contents__left__archive__top__word">
        <h1>Menu:</h1>
        <p><?php single_cat_title(); ?></p> 
      </div>
    </div>
    <?php
    if (have_posts()) :
    while (have_posts()) :
    the_post(); ?>
    <div class="p-menu-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <?php the_post_thumbnail(); ?> 
      <div class="p-menu-card__intro">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?> 
        <a href="<?php the_permalink(); ?>">詳しく見る</a> 
      </div>
    </div>
    <?php endwhile;
    else :?>
    <p>表示する記事がありません</p>
    <?php endif; ?>
  </article>
  <?php get_sidebar(); ?> 
</div>
  
  <div class="p-pagenation">
      <ul>
          <li>page 1/10</li>
          <li><a href="archive.html">1</a></li>
          <li><a href="archive.html">2</a></li>
          <li><a href="archive.html">3</a></li>
          <li><a href="archive.html">4</a></li>
          <li><a href="archive.html">5</a></li>
          <li><a href="archive.html">6</a></li>
          <li><a href="archive.html">7</a></li>
          <li><a href="archive.html">8</a></li>
          <li><a href="archive.html">9</a></li>
      </ul>
    </div>
    <?php get_footer(); ?>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/Hamburger.js"></script>
