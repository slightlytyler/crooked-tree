<?php
/**
 * @package Crooked Tree Coffee House
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width = device-width,initial-scale = 1.0,maximum-scale = 1.0" />
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
        <a href="/"><i id="drawer-home" class="fa fa-home"></i></a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav>
      <section id="mailing-list">
        <h1>SUBSCRIBE</h1>
        <form action="http://deepspacerobots.createsend.com/t/r/s/biujdk/" method="post">
          <input name="email" type="text" name="cm-biujdk-biujdk" id="biujdk-biujdk" placeholder="jdoe@biz.com" onclick="$(this).val('');">
          <button class="fa fa-play-circle" type="submit" name="mailing_list_submit" id="mailing_list_submit">
          </button>
        </form> 
      </section>
      <section id="drawer-contact">
        <a href="tel:2149531142">214-953-1142</a>
        <a href="mailto:info@crookedtreecoffeehouse.com">info@crookedtreecoffeehouse.com</a>
      </section>
    </div>
    <div id="content">