<?php
/**
 * Template Name: About Us
 * @package Crooked Tree Coffee House
 */

get_header(); ?>

<div id="about-us" class="bg-mobile-target use-window" data-top="background-position:0px 0px;" data-bottom="background-position:0px -60px;"> 
  <div id="about-us-info">
    <section id="splash">
      <picture class="bg-mobile">
        <source src="<?php bloginfo('template_directory'); ?>/assets/images/Pic-Coffee-3.jpg">
        <source src="<?php bloginfo('template_directory'); ?>/assets/images/Pic-Coffee-3-2x.jpg" media="(min-width: 768px">
        <noscript>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1.jpg">
        </noscript>
      </picture>
      <section class="title" data-0="margin-top: 0%; opacity: 1;" data-320="margin-top: 12%; opacity: 0;">
          <h1>ABOUT US</h1>
      </section>
    </section>
    <section id="welcome">
      <section id="mission-statement" data-0="margin-top: -13%; opacity: 1;" data-320="margin-top: -4%; opacity: 0;">
        <h2><?php echo get_post_meta(4,'Tag line',true); ?></h2>
      </section>
      <a href="#welcome" class="hash-nav">
        <div class="tab" data-0="top: -64px; background-color: rgba(255,255,255,1); color: rgba(191,211,59,1);" data-180="top: 0px; background-color: rgba(255,255,255,0); color: rgba(191,211,59,0);">
          <i class="fa fa-chevron-down"></i>
        </div>
      </a>
      <section class="header">
        <i class="fa fa-coffee"></i>
      </section>
      <h3><?php echo get_post_meta(4,'Welcome header',true); ?></h3>
      <div>
        <p>
          <?php echo get_post_meta(4,'Welcome body',true); ?>
        </p>
      </div>
    </section>
    <section id="origins" class="bg-mobile-target">
      <picture class="bg-mobile">
        <source src="<?php bloginfo('template_directory'); ?>/assets/images/Origins.jpg">
        <source src="<?php bloginfo('template_directory'); ?>/assets/images/Origins-2x.jpg" media="(min-width: 768px">
        <noscript>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Origins.jpg">
        </noscript>
      </picture>
      <section class="bg" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -120px;">
      </section>
      <section class="description" data-bottom-top="@class:description fade;" data-top-bottom="@class:description fade;" data-edge-strategy="reset">
        <h4><?php echo get_post_meta(4,'Origins header',true); ?></h4>
        <?php echo get_post_meta(4,'Origins body',true); ?>
      </section>
      <section id="founded" class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
        <h5>FOUNDED</h5>
        <span>2008</span>
      </section>
    </section>
    <section id="mission" class="bg-mobile-target">
      <picture class="bg-mobile">
        <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission.jpg">
        <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-2x.jpg" media="(min-width: 768px">
        <noscript>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission.jpg">
        </noscript>
      </picture>
      <section class="bg" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -120px;">
      </section>
      <a href="#mission" class="hash-nav">
        <div class="tab" data-anchor-target="#welcome" data-top-top="top: -64px; background-color: rgba(255,255,255,1); color: rgba(191,211,59,1);" data-top-bottom="top: 0px; background-color: rgba(255,255,255,0); color: rgba(191,211,59,0);">
          <i class="fa fa-chevron-down"></i>
        </div>
      </a>
      <section class="header">
        <h3><?php echo get_post_meta(4,'Mission header',true); ?></h3>
      </section>
      <ul>
        <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
          <section class="description">
             <h4><?php echo get_post_meta(4,'People header',true); ?></h4>
              <p>
                <?php echo get_post_meta(4,'People body',true); ?>
              </p>
            </section>
            <section class="imagery">
              <section>
                <!--[if ! lte IE 9]><!-->
                  <picture alt="Atmosphere Pic">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1-0.5x.jpg">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1.jpg" media="(min-width: 320px">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1-2x.jpg" media="(min-width: 1768px)">
                    <noscript>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1.jpg" alt="Atmosphere Pic">
                    </noscript>
                  </picture>
                <!--<![endif]-->
                <!--[if lte IE 9]>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1.jpg" alt="Atmosphere Pic">
                <![endif]-->
              </section>
            </section>
        </li>
        <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
            <section class="description mobile">
              <h4><?php echo get_post_meta(4,'Atmosphere header',true); ?></h4>
              <p>
                <?php echo get_post_meta(4,'Atmosphere body',true); ?>
              </p>
            </section>
            <section class="imagery">
              <section>
                <!--[if ! lte IE 9]><!-->
                  <picture alt="Atmosphere Pic">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-2-0.5x.jpg">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-2.jpg" media="(min-width: 320px">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-2-2x.jpg" media="(min-width: 1768px)">
                    <noscript>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-2.jpg" alt="Atmosphere Pic">
                    </noscript>
                  </picture>
                <!--<![endif]-->
                <!--[if lte IE 9]>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-2.jpg" alt="Atmosphere Pic">
                <![endif]-->
              </section>
            </section>
            <section class="description non-mobile">
              <h4><?php echo get_post_meta(4,'Atmosphere header',true); ?></h4>
              <p>
                <?php echo get_post_meta(4,'Atmosphere body',true); ?>
              </p>
          </section>
        </li>
        <li class="lazy-load" data-bottom-top="@class:fade;" data-top-bottom="@class:fade;" data-edge-strategy="reset">
          <section class="header">
            <h4><?php echo get_post_meta(4,'Product header',true); ?></h4>
          </section>
          <span><?php echo get_post_meta(4,'Product tag line',true); ?></span>
          <section class="focus coffee">
            <i class="icomoon icomoon-bean"></i>
            <p>
              <?php echo get_post_meta(4,'Product focus 1',true); ?>
            </p>
          </section>
          <section class="focus brew">
            <i class="icomoon icomoon-tea"></i>
            <p>
              <?php echo get_post_meta(4,'Product focus 2',true); ?>
            </p>
          </section>
          <section class="focus food">
            <i class="icomoon icomoon-cupcake"></i>
            <p>
              <?php echo get_post_meta(4,'Product focus 3',true); ?>
            </p>
          </section>
        </li>
      </ul>
    </section>
  </div>
</div>

<?php get_footer(); ?>