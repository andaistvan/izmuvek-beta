<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
</div><!-- #content -->
<a id="anchor-kapcsolat"></a>
<footer id="colophon" class="site-footer fullwidth" role="contentinfo">
   <div class="main-container">
      <div class="column-3">

         <div class="item">
            <h4>Szerintem…</h4>
            <p>
               Ha szeretnél egészségesen étkezni, akkor most megtaláltad a megoldást! Szép adagokat, jó áron, jó minőségű alapanyagokból! Jó étvágyat!
            </p>
         </div>

         <div class="item">
            <h4>Faceebook</h4>
            <p>
               Légy tagja a Facebook csoportnak és értesülj könnyedén a heti menüről! Írj email címünkre, hogy felvehessünk csoportunkba.
            </p>
            <a href="#"><img class="facebook" src="<?php bloginfo('template_url'); ?>/dev/img/icon-facebook.svg" alt="facebook ikon" /></a>
         </div>

         <div class="item">
            <h4>Kapcsolat</h4>
            <p>
               Kérdezz bátran,<br>vagy mondd el véleményed!
            </p>
            <p>
               Telefon: +36 20 53 56 366<br>
               Email: <a href="mailto:trebi@izmuvek.hu" >trebi@izmuvek.hu</a>
            </p>
         </div>

      </div>
   </div><!-- main-container -->
   <div class="main-container aszf">
      <p>©<?php echo date('Y'); ?> Trebi Konyhája</p>
      <a href="http://izmuvek.hu/wp-content/themes/trebi/dev/docs/izmuvek_aszf.pdf"><p>Általános szerződési feltételek</p></a>
   </div>

</footer><!-- #colophon -->

</div><!-- #page -->


<?php wp_footer(); ?>

<script type="text/javascript">
$(document).foundation();
</script>


</body>
</html>
