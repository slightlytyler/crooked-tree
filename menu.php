<?php
/**
 * Template Name: Menu
 * @package Crooked Tree Coffee House
 */

get_header(); ?>

<div id="menu" class="outer-page bg-mobile-target use-window" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -60px;"> 
  <picture class="bg-mobile">
    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Pic-Menu.jpg">
    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Pic-Menu-2x.jpg" media="(min-width: 768px">
    <noscript>
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Pic-Menu.jpg">
    </noscript>
  </picture>
  <div id="menu-info" class="inner-page">
    <section class="title">
        <h1>MENU</h1>
    </section>
    <section id="tag-line">
      <h2><?php echo get_post_meta(6,'Menu tag',true); ?></h2>
    </section>
    <ul>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-coffee"></i>
        </section>
        <h3><?php echo get_post_meta(6,'Brewed coffee header',true); ?></h3>
        <p>
          <?php echo get_post_meta(6,'Brewed coffee body',true); ?>
        </p>
      </li>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-espresso"></i>
        </section>
        <h3><?php echo get_post_meta(6,'Espresso header',true); ?></h3>
        <p>
          <?php echo get_post_meta(6,'Espresso body',true); ?>
        </p>
      </li>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-bottle"></i>
        </section>
        <h3><?php echo get_post_meta(6,'Non-coffee header',true); ?></h3>
        <p>
          <?php echo get_post_meta(6,'Non-coffee body',true); ?>
        </p>
      </li>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-cupcake-inverse"></i>
        </section>
        <h3><?php echo get_post_meta(6,'Food header',true); ?></h3>
        <p>
          <?php echo get_post_meta(6,'Food body',true); ?>
        </p>
      </li>
    </ul>
  </div>
</div>

<?php get_footer(); ?>