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
					<p>
				Per avere informazioni sull'iniziativa della nostra Parrocchia per i ragazzi delle Elementari e delle Medie <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/presentazione_oe2020.pdf" target="_blank">clicca qui</a>.</p>

				<p>Per iscrivere vostro figlio scaricate, compilate e spedite all'indirizzo mail <i>oratorioestivo@parrocchiasanfrancescolecco.it</i> il <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/iscrizione_oe2020.doc" target="_blank">modulo disponibile qui</a>.</p>

				<p>Il primo giorno all'accoglienza dovrete consegnare, dopo averli debitamente compilati e firmati, i seguenti tre moduli:  <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/pattocorre_oe2020.pdf" target="_blank">patto di corresponsabilit&agrave;</a>, condizione di salute <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/condisalutea_oe2020.pdf" target="_blank">dell'accompagnatore</a> e <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/condisalutem_oe2020.pdf" target="_blank">del minore</a>.</p>

				<p>Ogni giorno all'accoglienza dovrete consegnare, dopo averli debitamente compilati e firmati, i seguenti due moduli relativi alle condizioni di salute giornaliere <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/condisalutegiornoa_oe2020.pdf" target="_blank">dell'accompagnatore</a> e <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/condisalutegiornom_oe2020.pdf" target="_blank">del minore</a>.</p>

				<p>Se vostro figlio non sar&agrave; accompagnato da uno dei genitori, il primo giorno all'accoglienza dovrete consegnare, dopo averlo debitamente compilato e firmato, il <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/delega_oe2020.pdf" target="_blank">modulo di delega</a>.</p><hr width="100">

				<p>Gli ADO per iscriversi devono scaricare, compilare e spedire all'indirizzo mail <i>oratorioestivo@parrocchiasanfrancescolecco.it</i> il <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/iscrizione_oe2020.doc" target="_blank">modulo disponibile qui</a>; inoltre il primo giorno all'accoglienza dovranno consegnare, dopo averlo fatto compilare e firmare il <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/pattocorreado_oe2020.pdf" target="_blank">patto di corresponsabilit&agrave;</a>; infine ogni giorno devono consegnare, dopo averla debitamente compilata e firmata l'autodichiarazione <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/autodichiarazione_giorno_ado_oe2020.pdf" target="_blank">l'autodichiarazione</a> relativa alle condizioni di salute giornaliera.
				Qui &egrave; possibile vedere il <a href="http://www.parrocchiasanfrancescolecco.it/oe2020/programmado_oe2020.pdf" target="_blank">programma delle attivit&agrave;</a>.<hr width="100">

				<p>I documenti che consegnarete saranno conservati dalla Parrocchia San Francesco di Lecco nel rispetto della normativa vigente sulla tutela dei dati personali, per 15 giorni oltre il termine dell'oratorio estivo per le finalit&agrave; imposte dalle misure di contrasto alla diffusione del Covid-19. &Egrave; possibile leggere qui l'<a href="http://www.parrocchiasanfrancescolecco.it/oe2020/privacy_oe2020.pdf" target="_blank">Informativa privacy</a>.</p>
                    

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