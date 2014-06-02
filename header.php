<?php
/**
 * @package Crooked Tree Coffee House
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<nav id="fallback-navigation" class="hide" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

    <a id="drawer-menu" href="#sidr"></a>
     
    <div id="sidr">
      <nav id="drawer-nav" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav>
      <section id="mailing-list">
        <h1>SUBSCRIBE</h1>
        <form action="">
          <input type="text" name="email" placeholder="jdoe@biz.com">
          <button class="fa fa-play-circle" type="submit">
          </button>
        </form> 
      </section>
      <section id="drawer-contact">
        <a>214-953-1142</a>
        <a>info@crookedtreecoffeehouse.com</a>
      </section>
    </div>
    