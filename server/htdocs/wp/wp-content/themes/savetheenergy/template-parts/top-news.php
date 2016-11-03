<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php 
  $args = array(
    'posts_per_page' => 4,
    'post_type' => 'post',
		'post_status' => 'publish',
  );
  query_posts($args);
?>

  <section class="section news" id="news">
    <h2 class="news__header"><span class="news__headerText">NEWS</span></h2>
    <div class="newsLatest__contents">
      <?php 
        $viewCount = 4;
        if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
            $viewCount--;
      ?>
      <article class="newsLatest">
        <a href="/news/#<?= get_the_id() ?>" class="newsLatest__link">
          <div class="newsLatest__imageWrapper">
            <div class="newsLatest__image" style="background-image: url(<?= save_get_the_thumbnail_url(get_post_thumbnail_id(), 'top_thumb')?>);"></div>
          </div>
          <div class="newsLatest__headline">
            <p class="newsLatest__date"><?= get_the_time("Y.m.d") ?></p>
            <p class="newsLatest__caption"><?= save_get_shorted_text(get_the_excerpt(), 60) ?></p>
          </div>
        </a>
      </article>
      <?php 
          endwhile;
        endif;
      ?>

      <?php
        if ($viewCount > 0) :
          while ($viewCount) :
            $viewCount--;
      ?>
      <article class="newsLatest nolink">
        <div class="newsLatest__imageWrapper">
          <div class="newsLatest__image" style="background-image: url(./assets/img/news00.jpg);"></div>
        </div>
        <div class="newsLatest__headline">
          <p class="newsLatest__date"></p>
          <p class="newsLatest__caption"></p>
        </div>
      </article>
      <?php 
          endwhile;
        endif;
      ?>
    </div>

    <div class="newsMore">
      <a href="/news/" class="newsMore__btn">PAST NEWS</a>
    </div>
  </section>