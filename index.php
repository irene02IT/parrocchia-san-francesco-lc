<!DOCTYPE html>
<html lang="en">

  <?php include("assets/html_utilities/head.php"); ?>

<body>
 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
		<?php include 'assets/html_utilities/menu.php'?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">		
  <?php include 'assets/php_utilities/homepage-slides.php'?>
  </section><!-- End Hero -->


  <main id="main">


    <!-- ======= Siti Amici Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.gsaurorasf.it/"><img src="assets/img/sitiamici/aurorasf.png" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.teatrocenacolofrancescano.it/"><img src="assets/img/sitiamici/cenacolo.jpg" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="http://www.decanatodilecco.it/"><img src="assets/img/sitiamici/decanatolecco.jpg" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.chiesadimilano.it/"><img src="assets/img/sitiamici/chiesamilano.jpg" class="img-fluid" alt=""></a>
          </div>
        </div>

      </div>
    </section><!-- End Siti Amici Section -->
	
    <!-- ======= Notizie Section ======= --> 
    <section id="notizie" class="blog">
      <div class="container">
	  
        <div class="section-title">
          <h2>Vita in parrocchia</h2>
		  
          <p>Notizie ed eventi   <a href="notizie.php"><i class="icofont-megaphone"></i></a> </p>
        </div>
        
        <div class="row">
          <div class="col-lg-4">
			<?php include 'assets/php_utilities/view_info_Oratorio-Estivo.php' ?>
			<!-- End Oratorio estivo-->	

            <div class="sidebar" id="Orari-Sante-messe">
              <h3 class="sidebar-title">Orari Sante messe</h3>			  
              <div class="sidebar-item">
			  <p><strong>Feriali</strong><br>alle 8.00, 9.00 e 18.30</p>
			  <p><strong>Prefestive</strong><br>alle 18.30</p>
			  <p><strong>Festive</strong><br>alle 8.00, 10.00, 11.30, 18,30 e 21.00</p>
              </div>
            </div><!-- End Orari sante messe-->
			
            <div class="sidebar" id="Letture-del-giorno">
              <div class="entry-img">
                <a href="https://www.chiesadimilano.it/letture-rito-ambrosiano"><img src="assets/img/letturegiorno.jpg" alt="" class="img-fluid"></a>
              </div>						  
              <div class="sidebar-item">
                <div class="read-more">                 
                </div>
              </div>			  
            </div><!-- End Letture del giorno-->		

            <div class="sidebar" id="Avvisi">
              <h3 class="sidebar-title">Avvisi</h3>			  
              <div class="sidebar-item">
			  <p>Per recarsi in Chiesa e per partecipare alle Celebrazioni delle S.Messe è necessario dotarsi di una <strong>autocerificazione</strong> <br></p>		  
              </div><!-- End Avvisi-->			  
            </div><!-- End sidebar 2 -->
 
 
          </div><!-- End col lg 4-->
		  <!--  POST -->
		 <?php include 'assets/php_utilities/view_posts.php'; ?></div>
</div>
</section>

   <!-- ======= Iniziative Section ======= -->
     <section id="iniziative" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Iniziative</h2>
          <p>In evidenza<i class="icofont-warning"></i></p>
        </div>
        <div class="row">
          <?php include("assets/php_utilities/view_services.php"); ?>
        </div>	
      </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'assets/html_utilities/footer.php'?>
	<!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
  <?php include("assets/html_utilities/foot.php"); ?>

</body>

</html>