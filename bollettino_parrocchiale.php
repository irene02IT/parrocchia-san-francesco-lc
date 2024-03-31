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
          <h2>Il bollettino parrocchiale</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Bollettino parrocchiale</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <section id="Lettera2008" class="blog">
      <div class="container" style="margin-top:30px" >


        <div class="row">
         <div class="col-sm-3" >
            <div class="sidebar" id="ultimo numero">
              <div class="sidebar-item">   
              <div class="entry-title">
              	<h3 class="sidebar-title">Ultimo numero del bollettino</h3>
              </div>              
              <div class="entry-img">
				<a href="http://www.parrocchiasanfrancescolecco.it/pdf/bolpsf_30_6.pdf"> <img class="img-fluid" src="http://www.parrocchiasanfrancescolecco.it/images/lastbolpsf.jpg" alt="ultimo numero" href="http://www.parrocchiasanfrancescolecco.it/pdf/bolpsf_30_6.pdf" ></a>                       
              </div>						  

                <div class="read-more"> 
              		<a class="get-started-btn ml-auto" href="http://www.parrocchiasanfrancescolecco.it/pdf/bolpsf_30_6.pdf" >Scaricalo</a>
                </div>
              </div>
             </div>              
          </div>
          
          <div class="col-sm-7">


                 <h1><i>Eravamo 4 amici ...</i></h1><br>                  
                      <h3>Lettera pubblicata sul bollettino di gennaio 2008<br>con cui l'attuale redazione si &egrave; presentata.</h3>
                      <p>Cos&igrave; recita una famosa canzone; noi eravamo 4 amici a cena e tra una chiacchiera e l'altra &egrave; emerso che a tutti &quot;mancava&quot; il bollettino.<br></p>
                      &quot;E se raccogliessimo noi l'invito del parroco a occuparci della redazione del bollettino parrocchiale?&quot;.<br>
                      <p>
                      E cos&igrave; eccoci qui !!!<br>Sotto la guida del nostro Parroco e direttore Padre Tommaso, proveremo a portare avanti questo strumento prezioso.<br>
                      Prima di tutto volevamo ringraziare di cuore tutta la  precedente redazione 
                      che ce lo ha fatto conoscere e amare: Ciano Benaglio, Maria Teresa Colombo, Renato Viscardi e Michele Trattenero.<br>
                      Ora proviamo noi, con tutte le incertezze dei principianti ma con grande entusiasmo.<br>  
                      Abbiamo chiesto aiuto ad altri amici, affidando loro il compito di gestire le rubriche fisse che si &egrave; deciso di inserire a fianco degli argomenti del mese.<br>
                      La veste grafica adottata &egrave; merito della nostra amica Mary che ringraziamo per il prezioso aiuto.<br>
                      Saranno ben accetti consigli, suggerimenti, articoli e anche eventuali critiche che potrete spedirci all'indirizzo di posta elettronica bollettino@parrocchiasanfrancescolecco.it.<br>Buona lettura !! </p>
                      Monica e Dino, Cristina ed Eugenio
          </div>
          <div class="col-sm-2">
			<img class="img-fluid" src="assets/img/santachiara.jpg" alt="santaChiara" >
            		<img class="img-fluid align-center" src="assets/img/ilovebolpsf.jpg" alt="ultimo numero" href="assets/pdf/lastbolpsf.pdf" >
          </div>

        </div>

      </div>
    </section>
    
   <!-- ======= Archivio bollettini ======= -->
     <section id="archivio-boll" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Archivio</h2>
          <p>Tutti i Bollettini <i class="icofont-newspaper"></i></p>
        </div>
 		<?php include("assets/php_utilities/view_bollettini_anni.php");?>

          <br>        
        <div class="row" id='BollettiniPerMese'>     
        </div>	
      </div>
    </section><!-- End Archivio bollettini -->

  </main><!-- End main -->


  <!-- ======= Footer ======= -->
		<?php include 'assets/html_utilities/footer.php';?>	
    <!-- End Footer -->
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<?php include("assets/html_utilities/foot.php"); ?>
 
 
</body>

</html>