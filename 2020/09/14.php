<!DOCTYPE html>
<html lang="en">

   <?php include '../../assets/html_utilities/head-2.php';?>	

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
   <?php include '../../assets/html_utilities/menu-2.php';?>	
  </header><!-- End Header -->

  <main id="main">
   <?php include '../../assets/php_utilities/data_post.php';?>	
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $tag ?></h2>
          <ol>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../notizie.php">Eventi e notizie</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../../<?php echo $img ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../../<?php echo $file ?>"><?php echo $titolo ?></a>
              </h2>

   			<?php include '../../assets/php_utilities/view_entry-meta.php';?>				

              <div class="entry-content">
					<p>
					Tutti devono avere accesso solo tramite iscrizione e patto di reciproca responsabilità (ne basta una indicando tutte le attività svolte).
					Ognuno avrà delle competenze diverse e quindi una preparazione differente.
					</p>
					<h3>Catechismi</h3>
					<p>
					I genitori devono compilare il modulo di iscrizione (Allegato I), il patto di reciproca responsabilità (Allegato X), in caso sia necessario il modulo con informazioni riservate particolari (Allegato V).
					Leggere le due normative della privacy (Allegati III e IV) ed il protocollo.
					</p>
					<p>
					Le iscrizioni a catechismo quest'anno si svolgeranno secondo la seguente formula per evitare assembramenti che potrebbero essere causa di diffusione del contagio Covid-19.
					Ad ogni classe di catechismo è stata riservata una serata durante la quale i catechisti ed i frati faranno da "sportello" e ritireranno i moduli che dovranno essere già compilati!
					Le serate (dalle 20.30 alle 22) sono:
							<ul>
									<li>V elementare: 17/9 con l'opzione del 22/9 (alle 17.30) in caso non riescano per il poco preavviso</li>
									<li>I media: 21/9</li>
									<li>I superiore: 23/9</li>
									<li>III media: 24/9</li>
									<li>II media: 25/9</li>
									<li>IV elementare: 28/9</li>
									<li>III elementare: 30/9</li>
							</ul>
					<p>
					I catechismi inizieranno il 12/10 per le medie ed il 13/10 per le elementari (esclusi quelli che si preparano ai sacramenti che inizieranno prima).
					Appena possibile, sarà comunicato l'orario d'ingresso che sarà differenziato per ogni classe.<br><br>
					</p>
					<h3>I maggiorenni di qualsiasi gruppo (non responsabili)</h3>
					<p>
					I maggiorenni devono compilare il modulo di iscrizione (Allegato II), il patto di reciproca responsabilità (Allegato XI).
					Leggere le due normative della privacy (Allegati III e IV) ed il protocollo.<br><br>
					</p>

					<h3>I volontari</h3>
					<p>
					Se maggiorenni devono compilare il modulo di iscrizione (Allegato II), il patto di reciproca responsabilità (Allegato XI), compilare il modulo di auto-dichiarazione (Allegato XII).
					Leggere le due normative della privacy (Allegati III e IV), leggere l'opuscolo informativo (Allegato IX) ed il protocollo.
					</p>
					<p>
					Per i minorenni genitori devono compilare il modulo di iscrizione (Allegato I), il patto di reciproca responsabilità (Allegato X).
					Leggere le due normative della privacy (Allegati III e IV), leggere l'opuscolo informativo (Allegato IX) ed il protocollo.
					</p>
					<p>
					I volontari (maggiorenni e minorenni) saranno tenuti a seguire anche un corso informativo sulle precauzioni necessarie per evitare la diffusione del virus e su come affrontare la situazione in caso compaiano i sintomi in una persona del loro gruppo.
					Questo avverrà tramite video informativo di persona autorizzata (medico) ed un test, datato e firmato, che certifichi la visione dello stesso.
					</p>

					<h3>I dipendenti</h3>
					<p>
					Devono compilare il modulo di iscrizione (Allegato II), il patto di reciproca responsabilità (Allegato XI), compilare il modulo di auto-dichiarazione (Allegato XII).
					Leggere le due normative della privacy (Allegati III e IV), leggere l'opuscolo informativo (Allegato IX) ed il protocollo.
					</p>
					<p>
					I dipendenti saranno tenuti a seguire anche un corso informativo sulle precauzioni necessarie per evitare la diffusione del virus e su come affrontare la situazione in caso compaiano i sintomi in una persona del loro gruppo.
					Questo avverrà tramite video informativo di persona autorizzata (medico) ed un test, datato e firmato, che certifichi la visione dello stesso.

					</p>
					<p>
					<ul>
					<li><a href="regole/protocollo.pdf">Protocollo Attività Parrocchia</a></li>

					<li><a href="regole/allegatoI.pdf">(Allegato I) Modulo di iscrizione per minori</a></li>

					<li><a href="regole/allegatoII.pdf">(Allegato II) Modulo di iscrizione per maggiorenni</a></li>

					<li><a href="regole/allegatoIII.pdf">(Allegato III) Informativa sulla Privacy e riservatezza</a></li>

					<li><a href="regole/allegatoIV.pdf">(Allegato IV) Informativa sulla Privacy nei dati Covid-19</a></li>

					<li><a href="regole/allegatoV.pdf">(Allegato V) Comunicazione di dati riservati</a></li>

					<li><a href="regole/allegatoVI.pdf">(Allegato VI) Certificato di igienizzazione da parte della Parrocchia</a></li>

					<li><a href="regole/allegatoVII.pdf">(Allegato VII) Certificato di igienizzazione da parte del gruppo</a></li>

					<li><a href="regole/allegatoVIII.pdf">(Allegato VIII) Modello di registri di presenza nei gruppi</a></li>

					<li><a href="regole/allegatoIX.pdf">Allegato IX) Opuscolo informativo di prevenzione</a></li>

					<li><a href="regole/allegatoX.pdf">(Allegato X) Patto di reciproca responsabilità per minori</a></li>

					<li><a href="regole/allegatoXI.pdf">Allegato XI) Patto di reciproca responsabilità per maggiorenni</a></li>

					<li><a href="regole/allegatoXII.pdf">(Allegato XII) Autodichiarazione</a></li>
					</ul>

   			<?php include '../../assets/php_utilities/view_entry-footer.php';?>	

            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
				<?php include '../../assets/php_utilities/view_recent_posts.php';?>             
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <?php include '../../assets/html_utilities/footer-2.php';?>	
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include '../../assets/html_utilities/foot-2.php';?>	

</body>

</html>