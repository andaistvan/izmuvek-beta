<?php
//
// template name:home
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header();

 ?>

<a id="anchor-izpolitika"></a>
<section id="izpolitika" class="fullwidth">

   <div class="main-container">

      <div class="column-3">
         <div class="item">
            <div class="imgbox">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/img-normal.jpg" alt="klasszik" />
            </div>
            <h2>klasszik</h2>
         </div>
         <div class="item">
            <div class="imgbox">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/img-paleo.jpg" alt="paleo" />
            </div>
            <h2>paleo</h2>
         </div>
         <div class="item">
            <div class="imgbox">
               <img src="<?php bloginfo('template_url'); ?>/dev/img/img-vega.jpg" alt="vega" />
            </div>
            <h2>vega</h2>
         </div>
      </div>
      <!-- 3column -->

   </div><!-- main-container bg-white -->
   <div class="fullwidth izpolitika-bottom">
      <div class="main-container izpolitika-text">
         <h2>Ízpolitika</h2>
         <p>
            „Pár évvel ezelőtt néhány egészséges és finom ételre éhező barátnak elkészítettem 6 adag ételt. Akkor még nem tudtam, hogy az életem ezen a ponton meg fog változni, hiszen ez akkor kicsiben indult, azonban mára az életem részévé vált a főzés. A visszajelzések felébresztettek bennem valami ott szunnyadót. Lezárult egy közel 20 éves korszak, amiben városról-városra, országról-országra jártam, meleg- és hidegkonyhákban szereztem tapasztalatot, míg végül elkezdtem a saját ételeimet megalkotni.A kísérletezés során elkezdtem felfedezni a fővárosi piacokat és őstermelőket, akiknél a mai napig a legfrissebb alapanyagaimat szerezhetem be.
         </p>
         <p>
            Most ezeket az élményeket szeretném megosztani Veled az Ízművek által, ahol a cél az egészséges, friss és finom ételek elkészítése.
         </p>
         <p>
            Amellett, hogy számomra fontos a minőség és az, hogy időről időre újat alkothassak, szeretnék olyan ételeket készíteni, amiket bátran fogyaszthatnak mindazok, akik számára fontos az egészséges táplálkozás a hétköznapjaik során is. Így a három fő allergén száműzetésre került menüimből, vagyis a cukor, a laktóz és a glutén, és mindezek mellett kiegészült paleo és vegetáriánus ételekkel is.
         </p>
         <p>
            Olyan különleges összetevőkkel dolgozom, mint a rizsliszt, a tökmagliszt, a csipkebogyóliszt, a lenmagliszt, a kókuszliszt és a szezám őrlemények. A sokszor nem kedvelt tejtermékeket kókusz-, mandula- és rizstejjel, valamint ezek tejszíneivel helyettesítem, illetve ritkán laktózmentes termékeket is használok.
         </p>
         <p>
            A cukor elhagyása az ízek szempontjából nem könnyű döntés, de szerencsére olyan nagyszerű alapanyagok állnak rendelkezésemre, mint a kókuszvirágcukor és a stevia. Kompromisszumot kötöttem a nádcukorral és a mézzel is, amiket leginkább saláták és öntetek ízesítéséhez használok, de a lehető legkevesebb alkalommal és mennyiségben.
         </p>
         <p>
            Ami a húsos ételeimet illeti: a legkiválóbb minőségű húsokat kutatom fel, sertést csak ízesítés során használok. Leginkább csirkét, marhát, borjút, kacsát és libát készítek, kiegészülve édesvízi és tengeri halakkal, valamint vadhúsokkal.
         </p>
         <p>
            Nem félek kísérletezni, a tányérodon mindig rengeteg színű és ízű ételpárosítással találkozhatsz majd, és ami a legfontosabb: mindig friss, egészséges és finom ételeket csempészek a hétköznapjaidba!”
         </p>
      </div><!-- main-container izpolitika-text -->

   </div><!-- bg-white fullwidth -->

   <!-- <div class="placeholder-div"></div> -->

</section><!-- izpolitika -->

<div class="img2-cont">

</div>
<a id="anchor-rendeles"></a>
<section id="rendeles" class="fullwidth">
   <div class="main-container">
      <h2 class="menu-title">Menü</h2>
      <ul class="tabs" data-tabs id="example-tabs">


        <li class="tabs-title "><a href="#panel2">
           <h2 class="week-datas">
              <?php echo date('W.', strtotime('this week +1 week'))  ?> hét
              <?php echo date('m.d. - ', strtotime('Monday next week')), date('m.d.', strtotime('Friday next week'))?>
           </h2><!-- week-datas -->
        </a></li>
      </ul>
      <div class="tabs-content" data-tabs-content="example-tabs">

        <div class="tabs-panel is-active" id="panel2">
           <div class="menu-desktop">
             <ul class="napok-hun">
               <li>Hétfő</li>
                 <li>Kedd</li>
                 <li>Szerda</li>
                  <li>Csütörtök</li>
                    <li>Péntek</li>
            </ul>
              <?php get_template_part('template-parts/menu-next-week-desktop-wrap') ?>
           </div>
           <div class="menu-mobil">
              <?php get_template_part('template-parts/menu-next-week') ?>
           </div>
        </div>
      </div>
   </div><!-- main-container bg-white -->
</section><!-- rendeles -->

<a id="anchor-fizetes-szallitas"></a>
<section id="fizetes-szallitas" class="fullwidth">
   <div class="main-container">

      <h2>Kérdések - válaszok</h2>

      <!-- accordion teszt -->
               <ul class="accordion" id="proba-accordion" data-accordion data-allow-all-closed="true">

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Lehet a munkahelyemtől eltérő címre rendelni?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                     Nem. Szállítási címként csak a legördülő menü tartalmából lehet választani.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Meddig rendelhetek a következő napra kiszállítást?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        A tárgynapot megelőző munkanap 14:00-ig.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Meddig lehet lemondani megrendelést?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        A tárgynapot megelőző munkanap 14:00-ig
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Lehet csak egy napra rendelni?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        Igen. Tetszőleges a napok száma.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Hogyan tudok fizetni?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        Jelenleg csak készpénzben, az első megrendelés kiszállításakor kell kifizetni az elküldött megrendelés ellenértékét.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Mikor szállítanak?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        Munkanapokon 11.00-11:30 között.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Kapok értesítést a szállításról?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        Igen. A regisztrációkor megadott e-mail címre értesítést küldünk, amikor a kiszállítás megtörtént.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Kérhetek számlát?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        Igen. A megrendelés kiegyenlítése után, minden esetben elektronikus készpénzfizetési számlát küldünk a regisztrációkor megadott számlázási adatokkal, a megadott e-mail címre.
                     </p>
                  </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                     <a href="#" class="accordion-title">
                        <h6>Le lehet mondani a már kifizetett megrendelést?</h6>
                     </a>
                  <div class="accordion-content" data-tab-content>
                     <p>
                        Igen. A tárgynapot megelőző munkanap 14:00-ig lemondott rendelést töröljük, a megfizetett díjat a alapértelmezettként a következő rendelésből jóváírjuk, vagy írásban jelzett igény esetén 3 munkanapon belül visszafizetjük. A visszafizetésnek feltétele, hogy a megrendelés egyetlen tétele sem került kiszállításra. (Tehát, ha egy egész hétre érkezett rendelés és abból már egy vagy több kiszállítás megtörtént, akkor a lemondott napokat csak jóváírni tudjuk.) A visszafizetési igényt a <a href="mailto:trebi4@gmail.com">trebi4@gmail.com</a>  címre kell elküldeni. Az igénylés befogadásáról e-mailben a visszafizetés időpontjáról telefonon értesítjük.
                     </p>
                  </div>
                  </li>

               </ul>
               <!-- accordion teszt -->

   </div><!-- main-container bg-white -->
</section><!-- fizetes-szallitas -->

<!-- <a id="anchor-kapcsolat"></a> -->
<!-- <section id="kapcsolat" class="fullwidth">
   <div class="main-container">
      <h1>Kapcsolat</h1>
   </div>
</section> -->

<?php
get_footer();
?>
