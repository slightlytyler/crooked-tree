<?php
/**
 * Template Name: About Us
 * @package Crooked Tree Coffee House
 */

get_header(); ?>

<div id="about-us" data-top="background-position:0px 0px;" data-bottom="background-position:0px -60px;"> 
  <div id="about-us-info">
    <section class="title" data-0="margin-top: 0%; opacity: 1;" data-320="margin-top: 1%; opacity: 0;">
        <h1>ABOUT US</h1>
    </section>
    <seciton class="welcome">
      <section id="mission-statement" data-0="margin-top: -13%; opacity: 1;" data-320="margin-top: -4%; opacity: 0;">
        <h2>People. Atmosphere. Coffee.</h2>
      </section>
      <div class="tab" data-0="top: -64px; background-color: rgba(255,255,255,1); color: rgba(191,211,59,1);" data-180="top: 0px; background-color: rgba(255,255,255,0); color: rgba(191,211,59,0);">
        <i class="fa fa-chevron-down"></i>
      </div>
      <section class="header">
        <i class="fa fa-coffee"></i>
      </section>
      <h3>WELCOME</h3>
      <div>
        <p>
          Hello! To say a little bit about ourselves, we are an independent, neighborhood coffeehouse through 
          and through. We operate in a historic house in the State-Thomas district of Uptown Dallas. And, we are 
          passionate about coffee and people.
        </p>
      </div>
    </seciton>
    <section id="origins"  data-start="background-position:0px 60px;" data-end="background-position:0px -60px;">
      <seciton class="description">
        <h4>ORIGINS</h4>
        <p>
          Crooked Tree Coffeehouse is as a dream of our owners Kristyn Bartley and Sarah Momary.
          Having backgrounds at indie shops, they desire to create a place that is people forward and 
          economically responsible.</p><br> 
          <p>They feel that the coffeehouse provides a unique opportunity to feature 
          people, from our employees, to our customers, to the producers of our coffee.
        </p>
      </seciton>
      <seciton id="founded" data-center="right: -200px;" data-top="right: 0;">
        <h5>FOUNDED</h5>
        <span>2008</span>
      </seciton>
    </section>
    <section id="mission">
      <section class="header">
        <h3>OUR MISSION</h3>
      </section>
      <ul>
        <li>
          <section class="decription">
             <h4>PEOPLE</h4>
              <p>
                We aim to be a great place to work and to visit. At Crooked Tree, we hope that our
                customer experience is both inviting and quality-driven. We want to employ friendly people who 
                can share positivity and sincerity with our customers, as well as making a beautifully tasting cup 
                of coffee. We hope that you feel at home and taken care of when you come to visit us.
              </p>
            </section>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-1.png">
        </li>
        <li>
          <section class="decription">
             <h4>ATMOSPHERE</h4>
              <p>
                Our atmosphere stands out, as it is eclectic and comfortable. Sometimes we like to say
                that we have a living room feel. In addition to our warmly colored walls, we have a variety of 
                seating from couches, to tables both big and small, to a back patio, or, should you choose to 
                have your drink more quickly over a brief chat, we have a standing bar at our espresso machine.
              </p>
            </section>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Mission-Imagery-2.png">
        </li>
          <section class="header">
            <h4>PRODUCT</h4>
            <span>We are committed to consistently making quality beverages and food.</span>
            <section class="focus">
              <i class="fa fa-coffee"></i>
              <p>
                Our coffee is
                locally roasted by Oak Cliff Coffee Roasters, where they buy directly from farmers to ensure 
                quality of taste and economic responsibility.
              </p>
            </section>
            <section class="focus">
              <i class="fa fa-coffee"></i>
              <p>
                On our end, we are committed to brewing and
                training standards that facilitate the best tasting coffee possible. We also source amazing 
                loose leaf teas from a local company called Zakti.
              </p>
            </section>
            <section class="focus">
              <i class="fa fa-coffee"></i>
              <p>
                Regarding food, our pastries come from local
                bakeries, such as Empire and Zenzero, and our sandwich menu is made of delightful, house 
                recipes.
              </p>
            </section>
          </section>
        <li>
      </ul>
    </section>
  </div>
</div>

<?php get_footer(); ?>