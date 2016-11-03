<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php 
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'events',
  );
  query_posts($args);
?>

  <div class="main">
    <div class="eventArchiveWrapper">
      <div class="eventArchive">
        <h2 class="eventArchive__title"><span class="eventArchive__titleText">EVENT ARCHIVE</span></h2>
        <div class="eventArchive___contents">
        <?php 
          if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
        ?>

          <article class="eventArchive_article">
            <a href="<?= get_the_permalink() ?>" class="eventArchive__link">
              <div class="eventArchive__imageWrapper">
                <div class="eventArchive__image" style="background-image: url(<?= save_get_the_thumbnail_url(get_post_thumbnail_id(), 'top_thumb')?>);"></div>
              </div>
              <h3 class="eventArchive__eventTitle"><?= get_the_title() ?></h3>
            </a>
          </article>

        <?php 
            endwhile;
          endif;
        ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
