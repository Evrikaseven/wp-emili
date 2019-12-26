
   <!-- footer
   ================================================== -->
   <footer>
<div class="row">

            <div class="four columns">
               <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
            </div>

            <div class="four columns">
            <nav class="footer-nav">
                <?php wp_nav_menu( array(
                  'theme_location' => 'down',
                  'container'      => null,
                  'menu_class'     => 'footer-menu',
                )); ?>
             </nav>
            </div>
<!-- 
            <div class="three columns">
               <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
            </div> -->

            <div class="columns">


                <span>круглосуточный бесплатный телефон:</span><br>
                <a class="phone" href="tel:+78005006960">8-800-500-69-60</a><br>

                <button class="cb">Заказать звонок</button><br>


                <span>Факс: +7 (861) 624-35-65<br>

                E-mail: <a href="mailto:helico@helico-russia.ru">helico@helico-russia.ru</a></span><br>



                <span>ОГРН 114 237 300 24 30<br>

                ИНН 2373007549<br>

                КПП 237301001</span>

            </div>

         </div>
      <div class="row">

         <div class="twelve columns">



            <ul class="footer-social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Copyright &copy; 2019 <?php bloginfo('name'); ?></li> 
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <?php wp_footer(); ?>

</body>

</html>