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
    'posts_per_page' => 3,
    'post_type' => 'events',
  );
  query_posts($args);
?>

  <section class="section event" id="event">
    <h2 class="event__header"><span class="event__headerText">EVENT</span></h2>
    <div class="event__contents">
    <?php 
      $viewCount = 3;
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
          $viewCount--;
    ?>
      <article class="eventLatest">
        <a href="<?= get_the_permalink() ?>" class="eventLatest__link">
          <h3 class="eventLatest__title"><?= get_the_title() ?></h3>
          <div class="eventLatest__bg" style="background-image: url(<?= save_get_the_thumbnail_url(get_post_thumbnail_id(), 'top_thumb')?>);"></div>
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
      <article class="eventLatest nolink">
        <div class="eventLatest__nolink">
          <h3 class="eventLatest__title"></h3>
          <div class="eventLatest__bg" style="background-image: url(/assets/img/event00.jpg);"></div>
        </div>
      </article>
    <?php 
        endwhile;
      endif;
    ?>
    </div>

    <div class="eventMore">
      <a href="<?= get_post_type_archive_link('events');?>" class="eventMore__btn">ARCHIVES</a>
    </div>
  </section>