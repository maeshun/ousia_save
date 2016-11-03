<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

  <div class="main">
    <div class="newsWrapper">
		<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
		?>
      <article class="newsContaner" id="<?= get_the_id()?>">
        <div class="newsHeader">
          <h2 class="news__title"><?= get_the_title()?></h2>
          <p class="news__date"><?= get_the_time("Y.m.d") ?></p>
        </div>
        <div class="news__eyecatch">
          <img src="<?= save_get_the_thumbnail_url(get_post_thumbnail_id(), 'large') ?>">
        </div>
        <div class="news__contents">
					<?= the_content() ?>
        </div>
      </article>
    <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>
