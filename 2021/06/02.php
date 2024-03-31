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
          <h2><?php echo $tag?></h2>
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
                <img src="../../<?php echo $img?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../../<?php echo $file?>"><?php echo $titolo?></a>
              </h2>
				<?php include '../../assets/php_utilities/view_entry-meta.php'; ?>

              <div class="entry-content">
					<p><b>"Kung-fu-panda"</b> è il titolo dell’Oratorio estivo 2021, un personaggio allo stesso tempo divertente e profondo, che scopre in sé la capacità di essere, per come è, un grande personaggio che può salvare il suo mondo! Questo è quello che può essere ognuno di noi quando vive al massimo le sue capacità, con l’aiuto di Dio.</p>
                    <p>Le iscrizioni sono aperte per i ragazzi dalla I elementare alla III media che hanno frequentato il catechismo della nostra parrocchia o che risiedono nella Parrocchia stessa (previa autorizzazione dei frati). </p>
                    <p>Vanno effettuate PRESSO L’ORATORIO ENTRANDO DAL CANCELLO NEI SEGUENTI GIORNI: <b>Giovedì 3 e Venerdì 4 giugno dalle 16:00 alle 20:00.</b></p>
                    <p>SARÀ POSSIBILE ATTUARE LA PROPOSTA DA PROGRAMMA ALLEGATO SOLO SE IL NUMERO DEGLI ISCRITTI GARANTIRÀ IL RISPETTO DELLE NORMATIVE COVID-19.
IN CASO DI ESUBERO CI SARANNO DUE PROPOSTE ALTERNATIVE PER EVITARE ESCLUSIONI</p>
					<p>Vedi tutte le informazioni nell'allegato:</p>
                    <ul>
                    	<li><a href='http://www.parrocchiasanfrancescolecco.it/pdf/2-MODULO-DI-ISCRIZIONE-ALLORATORIO-ESTIVO-2021-DI-MINORENNI.doc'>Modulo di iscrizione per minorenni</a></li>
                    	<li><a href='http://www.parrocchiasanfrancescolecco.it/pdf/OREST2021_Mod_iscrizione.docx'>Programma</a></li>
                    </ul>
              </div>

				<?php include '../../assets/php_utilities/view_entry-footer.php'; ?>


            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

				<?php include '../../assets/php_utilities/view_recent_posts.php';?>             
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
	</div>
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