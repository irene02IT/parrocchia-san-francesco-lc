<!DOCTYPE html>
<html lang="en">

  <?php include("assets/html_utilities/head.php"); ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
		<?php include 'assets/html_utilities/menu.php';?>	
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">

      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Consiglio Pastorale</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Consiglio Pastorale</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Il team della Parrocchia</h2>
            <h3 class="font-italic">Parole tratte dall'articolo del Parroco<br> sul ruolo del Consiglio Pastorale Parrocchiale <br> pubblicato sul Bollettino di marzo 2015</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
				Il Consiglio vuole essere un luogo di dialogo, di confronto che esprime la partecipazione di tutti.<br>Non &egrave; sempre facile lavorare insieme, mi &egrave; anche capitato di sentire qualcuno dire che sarebbe meglio che decidesse tutto il Parroco, cos&igrave; si risparmierebbe tempo e fatica e forse a volte anche qualche conflitto.<br>Credo che per ritrovare il senso del Consiglio dobbiamo rifarci non tanto alle forme di &quot;partecipazione democratica&quot; quanto a quello che il Santo Papa Giovanni Paolo indicava come un obiettivo per tutta la Chiesa nella Novo Millennio; riscoprire una spiritualit&agrave; di comunione, riscoprire cio&egrave; la comunione, i rapporti che viviamo ogni giorno come il luogo dove ognuno di noi &egrave; chiamato a dare la sua risposta al Signore, come il luogo dove il Signore ci parla attraverso la molteplicit&agrave; dei doni e dei carismi che elargisce a tutti i membri della Chiesa chiamati per la loro vocazione battesimale ad essere &quot;membra vive del Corpo del Signore&quot;.<br><br>
				Il Consiglio &egrave; un luogo che deve favorire questa crescita, la conoscenza delle varie realt&agrave; della Parrocchia, la loro collaborazione, la loro capacit&agrave; di ricentrarsi sempre sull'essenziale, sul compito proprio della comunit&agrave; cristiana di vivere una comunione piena e viva e di testimoniarla nel mondo.
            </p>
            <p><i class="icofont-letter"></i><a title="Lettera sul Consiglio Pastorale" href="./pdf/cpp.pdf" target="_blank"> La Lettera del nostro Arcivescovo sul Consiglio Pastorale</a><br>pubblicata sul Bollettino di marzo 2015
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Membri Section ======= -->
    <?php include("assets/php_utilities/view_consiglio_pastorale.php"); ?>
	<!-- End Membri Section -->
    
  </main><!-- End main -->

  <!-- ======= Footer ======= -->
		<?php include 'assets/html_utilities/footer.php';?>	
    <!-- End Footer -->
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<?php include("assets/html_utilities/foot.php"); ?>
 
 
</body>

</html>