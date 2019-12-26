<?php
/*
Template Name: Новости
*/
?>

<?php get_header(); ?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Blog<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="columns">

<?php 
// параметры по умолчанию
$posts = get_posts( array(
   'numberposts' => 5,
   'category'    => 'news',
   'orderby'     => 'date',
   'order'       => 'DESC',
   'include'     => array(),
   'exclude'     => array(),
   'meta_key'    => '',
   'meta_value'  =>'',
   'post_type'   => 'post',
   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
   setup_postdata($post);
   ?>



               <article class="post">

               <div class="entry-header cf">

                  <h2><?php the_title();?></h2>

                  <p class="post-meta">
                     <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
                  </p>

               </div>

               <div class="post-content">

                  <?php the_content(); ?>

               </div>

            </article> <!-- post end -->
<?php
}

wp_reset_postdata(); // сброс
?>


            <!-- Pagination -->
            <nav class="col full pagination">
               <ul>
                  <li><span class="page-numbers prev inactive">Prev</span></li>
                  <li><span class="page-numbers current">1</span></li>
                  <li><a href="#" class="page-numbers">2</a></li>
                  <li><a href="#" class="page-numbers">3</a></li>
                  <li><a href="#" class="page-numbers">4</a></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="page-numbers">7</a></li>
                  <li><a href="#" class="page-numbers">8</a></li>
                  <li><a href="#" class="page-numbers">9</a></li>
                  <li><a href="#" class="page-numbers next">Next</a></li>
               </ul>
            </nav>

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

            <?php get_sidebar(); ?>
         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

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

   </section> <!-- Tweets Section End-->

<?php get_footer(); ?>
