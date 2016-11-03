<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="description" content="<?= save_get_description(); ?>" />
<meta name="keywords" content="SAVE THE ENERGY,経済産業省,資源エネルギー庁,Amazon Fashion Week TOKYO,柿本ケンサク,ファッションウィーク" />

<meta property="og:title" content="<?= get_the_title(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?= save_get_og_image() ?>" />
<meta property="og:url" content="<?= the_permalink() ?>" />
<meta property="og:site_name" content="SAVE THE ENERGY" />
<meta property="og:description" content="<?= save_get_description(); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<meta name="robots" content="index,follow">

<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all">

<?php wp_head(); ?>
</head>

<body class="<?= is_front_page()?'top':''?>">
<div class="wrapper">
  <header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <a href="/"><img src="/assets/img/logo.svg" alt="save the energy project"></a>
      </div>
      <a href="javascript:void(0);" class="header__menuBtn">
        <span class="menuLine"></span>
        <span class="menuLine"></span>
        <span class="menuLine"></span>
      </a>
      <nav class="header__navi">
        <ul class="naviContainer">
          <li class="navi"><a href="<?= is_front_page() ? '' : '/'; ?>#news" class="navi__anchor">NEWS</a></li>
          <li class="navi"><a href="<?= is_front_page() ? '' : '/'; ?>#about" class="navi__anchor">ABOUT</a></li>
          <li class="navi"><a href="<?= is_front_page() ? '' : '/'; ?>#event" class="navi__anchor">EVENT</a></li>
          <li class="navi"><a href="<?= is_front_page() ? '' : '/'; ?>#link" class="navi__anchor">LINK</a></li>
          <li class="navi"><a href="https://www.instagram.com/savetheenergyproject/" class="navi__anchor" target="_blank">INSTAGRAM</a></li>
        </ul>
      </nav>
    </div>
  </header>

