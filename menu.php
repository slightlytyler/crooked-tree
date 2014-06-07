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
      <h2>Our menu, we hope, features and directs you towards how truly great coffee can be, when well prepared.</h2>
    </section>
    <ul>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-coffee"></i>
        </section>
        <h3>BREWED COFFEE</h3>
        <p>
          We offer batch brewed as well as manually brewed coffee (Chemex, V60, Clever,
          French Press, etc.) that rotates based on availability. We also make delicious cold brewed iced coffee.
        </p>
      </li>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-espresso"></i>
        </section>
        <h3>ESPRESSO</h3>
        <p>
          We love espresso and we offer rotating single-origin coffees as espresso. Our espresso
          + milk menu is inspired by Italian cafes, with beverages based on proportion rather than size. That 
          means that, instead of having the "small, medium, large" distinctions, our espresso based drinks all 
          have a uniform amount of espresso with increasing amounts of milk from Macchiato, to Cortado, to Cappuccino, 
          to Latte.
        </p>
      </li>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-bottle"></i>
        </section>
        <h3>NON-COFFEE</h3>
        <p>
          We believe there is a time a place for non-coffee beverages, as well. We offer
          amazing loose leaf teas, chai lattes, Italian sodas, and season specialty beverages, such as hot chocolate, 
          or fruit spritzers, if you are looking for something beyond coffee.
        </p>
      </li>
      <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <section class="header">
          <i class="icomoon icomoon-cupcake-inverse"></i>
        </section>
        <h3>FOOD</h3>
        <p>
          We receive pastries daily from Empire Bakery and Zenzero Bakery that range from
          croissants, to banana bread, to crumb cake, to bagels. We also have an awesome, house-created 
          sandwich menu, made with only the finest ingredients.
        </p>
      </li>
    </ul>
  </div>
</div>

<?php get_footer(); ?>