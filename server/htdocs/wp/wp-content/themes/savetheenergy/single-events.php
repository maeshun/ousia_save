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
    <div class="eventWrapper">
      <div class="eventDetail">
				<?php
					while ( have_posts() ) : the_post();
				?>

        <h2 class="eventDetail__title"><span class="eventDetail__titleText"><?= get_the_title()?></span></h2>
        <div class="eventDetail__eyecatch">
          <img src="<?= save_get_the_thumbnail_url(get_post_thumbnail_id(), 'large') ?>">
        </div>
        <div class="eventDetail__content">
          <?= the_content()?>
        </div>
	      <?php 
	      	endwhile;
	      ?>
      </div>
      <div class="eventBackBtnArea">
        <a href="<?= get_post_type_archive_link('events');?>" class="eventBackBtnArea__backBtn">ARCHIVES</a>
      </div>      
    </div>
  </div>

<?php get_footer(); ?>
