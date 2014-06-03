<?php
/**
 * @package Crooked Tree Coffee House
 */
?>

	<footer id="footer" <?php if (is_home() || is_page('Contact')){ echo 'class="hide"'; } ?> role="contentinfo">
    <section class="header">
      <h1>COFFEE CATCH LINE</h1>
    </section>
    <section class="option-row">
      <section id="join-us">
        <h2>JOIN US FOR A CUP OF COFFEE</h2>
        <ul>
          <li>M-TH 6 A.M. - 11 P.M.</li>
          <li>FRIDAY 6 A.M. - 12 A.M.</li>
          <li>SATURDAY 7 A.M. - 12 A.M.</li>
          <li>SUNDAY 8 A.M. - 9 P.M.</li>
        </ul>
      </section>
      <section id="explore">
        <style type="text/css">
          #explore a:after{
            background-image: url("<?php bloginfo('template_directory'); ?>/assets/images/Explore-<?php if (is_page('Menu')){ echo 'Story'; } else{ echo 'Menu'; } ?>.png");
          }
        </style>
        <a href="index.php?page_id=<?php if (is_page('Menu')){ echo '4'; } else{ echo '8'; } ?>">EXPLORE OUR <?php if (is_page('Menu')){ echo 'STORY'; } else{ echo 'MENU'; } ?>&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
      </section>
      <section id="get-in-touch">
        <h2>GET IN TOUCH</h2>
        <ul class="social-media">
          <a href="https://www.facebook.com/crookedtreecoffee"><li class="fa fa-facebook"></li></a>
          <a href="https://twitter.com/crookedtree"><li class="fa fa-twitter"></li></a>
          <a href="mailto:info@crookedtreecoffeehouse.com"><li class="fa fa-envelope"></li></a>
        </ul>
        <a href="tel:2149531142">214-953-1142</a>
        <a href="mailto:info@crookedtreecoffeehouse.com">info@crookedtreecoffeehouse.com</a>
      </section>
    </section>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
