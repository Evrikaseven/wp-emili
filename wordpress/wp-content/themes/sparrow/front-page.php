
<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">



<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/geo.jpg" class="d-block w-100" alt="" />
    </div>
    <div class="carousel-item">
      <img src="https://emiligroup.ru/images/products/geomembrane-2.jpg" class="d-block w-100" alt="" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/geo.jpg" class="d-block w-100" alt="" />
    </div>
  </div>
</div>

   </section> <!-- Intro Section End-->
   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">
            <?php
            if ( have_posts() ){
               while ( have_posts() ){
                  the_post();
                  // код вывода
               }
            } else {
               echo wpautop( 'Постов для вывода не найдено.' );
            }
            ?>

         <div class="entry-header align-center">
            <h2><?php the_title(); ?></h2>
         </div>
         <?php the_content(); ?>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h2>Продукция</h2>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">
            <div class="columns portfolio-item">
               <div class="item-wrap">
                  <a href="portfolio.html">
                     <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/reshotka_s.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
                  <div class="portfolio-item-meta">
                     <h5><a href="portfolio.html">Геотекстиль</a></h5>
                     <p>от 16 руб/м</p>
                        
                  </div>
               </div>
            </div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
                  <a href="portfolio.html">
                     <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/reshotka_s.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
                  <div class="portfolio-item-meta">
                     <h5><a href="portfolio.html">Георешетка</a></h5>
                     <p>от 16 руб/м</p></p>
                  </div>
               </div>
            </div>

            <div class="columns portfolio-item s-first">
               <div class="item-wrap">
                  <a href="portfolio.html">
                     <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/reshotka_s.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
                  <div class="portfolio-item-meta">
                     <h5><a href="portfolio.html">Геомембрана</a></h5>
                     <p>от 16 руб/м</p>
                  </div>
               </div>
            </div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
                  <a href="portfolio.html">
                     <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/reshotka_s.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
                  <div class="portfolio-item-meta">
                     <h5><a href="portfolio.html">Геосетка</a></h5>
                     <p>от 16 руб/м</p>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </section> <!-- Works Section End-->
   <section id="info">
      <div class="row">
         <div class="twelve columns align-center">
            <h2> Благодарственные письма</h2>
         </div>
      </div>
<div class="row align-center">
                  <div class="three columns">
                      <div class="item-wrap">
                        <p>
                        <img src="https://emiligroup.ru/wp-content/themes/emiligroup/img/doc1.png" alt="Благодарственные письма">
                     </p>
                     </div>
                  </div>
                  <div class="three columns">
                     <img src="https://emiligroup.ru/wp-content/themes/emiligroup/img/doc2.png" alt="Благодарственные письма">
                  </div>
                  <div class="three columns">
                     <img src="https://emiligroup.ru/wp-content/themes/emiligroup/img/doc3.png" alt="Благодарственные письма">
                  </div>
                  <div class="three columns">
                     <img src="https://emiligroup.ru/wp-content/themes/emiligroup/img/doc4.png" alt="Благодарственные письма">
                  </div>
               </div>
   </section>
   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h2><a href="<?php echo home_url('/news', 'http');?>">Новости</a></h2>
         </div>
      </div>

      <div class="blog-entries">
<div class="row entry">

            <div class="four columns">

                     <time datetime="2014-01-31" class="post-date" pubdate="">Jan 31, 2014</time>

                     <h3><a href="single.html">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h3>
            </div>
            <div class="four columns">
                     <time datetime="2014-01-31" class="post-date" pubdate="">Jan 31, 2014</time>
                     <h3><a href="single.html">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h3>
            </div>
            <div class="four columns">
                     <time datetime="2014-01-31" class="post-date" pubdate="">Jan 31, 2014</time>
                     <h3><a href="single.html">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h3>
            </div>
         </div>

      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->

   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
            <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
               Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>. 
               <!-- Simply type  the promocode in the box labeled “Promo Code” when placing your order. --></p>

         </div>

         <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->
<?php get_footer(); ?>