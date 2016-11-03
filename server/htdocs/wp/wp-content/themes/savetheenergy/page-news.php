<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

  <div class="main">
    <div class="newsWrapper">
    <?php 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $queryParam = 'post_type=post&paged=' . $paged;

      $args = array(
      		'post_type' => 'post',
      		'paged' => $paged,
      	);

      // 6件以下に設定された場合、topからのリンクに影響する
      $minPostsPerPage = 1;
      if (get_query_var('posts_per_page') < $minPostsPerPage) {
          $queryParam .= "&showposts=".$minPostsPerPage;
          $args['showposts'] = $minPostsPerPage;
      }
      // query_posts($queryParam);
      query_posts($args);

      if ( have_posts() ) : 
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
    <?php 
      	endwhile;
    	endif;
    ?>

    </div>

    <div class="newsPagenate">
    <?php 
        $pages = $wp_query->max_num_pages;

        // if ($pages != 1) {
        //     echo "<span>New</span>";
        // }

        if ($paged != 1) {
            echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lt;</a>";
        }

        for ($i = 1; $i < $pages + 1; $i++) {
            $pagelink = "";
            $pagelink = " <a href='" . get_pagenum_link($i) . "'";
            if ($paged == $i) {
                $pagelink .= " class='current'";
            }
            $pagelink .= ">" . $i . "</a>";
            echo $pagelink;
        }

        if ($pages != 1 && $paged != $pages) {
            echo " <a href='" . get_pagenum_link($paged + 1) . "'>&gt;</a>";
        }

        // if ($pages != 1) {
        //     echo "<span>Old</span>";
        // } 
    ?>
</div>
  </div>

<?php get_footer(); ?>
